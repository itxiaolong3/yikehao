<?php
namespace app\admin\controller;

use app\admin\controller\Base;
use think\Controller;

class Ueditor extends Base {

	private $uploadfolder='/upload/';   //上传地址

	private $scrawlfolder='/upload/_scrawl/';   //涂鸦保存地址

	private $catchfolder='/upload/_catch/';   //远程抓取地址

	private $configpath='./ueditor/php/config.json';



	public function index(){
		$this->type=input('edit_type','');
        //header('Access-Control-Allow-Origin: http://www.baidu.com'); //设置http://www.baidu.com允许跨域访问
        //header('Access-Control-Allow-Headers: X-Requested-With,X_Requested_With'); //设置允许的跨域header
        date_default_timezone_set("Asia/chongqing");
        error_reporting(E_ERROR);
        header("Content-Type: text/html; charset=utf-8");

        $CONFIG = json_decode(preg_replace("/\/\*[\s\S]+?\*\//", "", file_get_contents($this->configpath)), true);
		$this->config=$CONFIG;

		$action = input('action');
		switch ($action) {
			case 'config':
				$result =  json_encode($CONFIG);
				break;
		
				/* 上传图片 */
			case 'uploadimage':
				$result = $this->_upload();
				break;
				/* 上传涂鸦 */
			case 'uploadscrawl':
				$result = $this->_upload_scrawl();
				break;
				/* 上传视频 */
			case 'uploadvideo':
				$result = $this->_upload(array('maxSize' => 1073741824,/*1G*/'exts'=>array('mp4', 'avi', 'wmv','rm','rmvb','mkv')));
				break;
				/* 上传文件 */
			case 'uploadfile':
				$result = $this->_upload(array('exts'=>array('jpg', 'gif', 'png', 'jpeg','txt','pdf','doc','docx','xls','xlsx','zip','rar','ppt','pptx',)));
				break;
		
				/* 列出图片 */
			case 'listimage':
				/* 列出文件 */
			case 'listfile':
				$result = $this->_list($action);
				break;		
				/* 抓取远程文件 */
			case 'catchimage':
				$result = $this->_upload_catch();
				break;
		
			default:
				$result = json_encode(array('state'=> '请求地址出错'));
				break;
		}
		
		/* 输出结果 */
		if (isset($_GET["callback"]) && false ) {
			if (preg_match("/^[\w_]+$/", $_GET["callback"])) {
				echo htmlspecialchars($_GET["callback"]) . '(' . $result . ')';
			} else {
				echo json_encode(array(
						'state'=> 'callback参数不合法'
				));
			}
		} else {
			exit($result) ;
		}
	}
	//上传
	private function _upload($config=array())
	{
		$title = '';
		$url='';
		if(!empty($config)){
			$this->config=array_merge($this->config,$config);;
		}

			$file = request()->file('upfile');
			if($file){
				$validate=array(
					'size'=>10240000 ,// 设置附件上传大小
					'ext'=>array('jpg', 'gif', 'png', 'jpeg'),
				);
				$info = $file->validate($validate)->move(ROOT_PATH . 'public/' . $this->uploadfolder);
				if($info) {

					$img_url=$this->uploadfolder.$info->getSaveName();

					// 图片压缩
		            // $image = \think\Image::open('./'.$img_url);
		            // $image->thumb(700,1400)->save('./'.$img_url);

					$title =$info->getFilename();
					$state = 'SUCCESS';
					$url= $img_url;
				}else{
					$state = $file->getError();
				}
			}else{
				$state = '未接收到文件';
			}
		$response=array(
			"state" => $state,
			"url" => $url,
			"title" => $title,
			"original" =>$title,
		);
		return json_encode($response);
	}

	private function _upload_scrawl()
	{		
		$data = input('post.' . $this->config ['scrawlFieldName']);
        $url='';
        $title = '';
        $oriName = '';
		if (empty ($data)) {
			$state= 'Scrawl Data Empty!';
		} else {
			$savepath = $this->save_image('png', base64_decode($data), $this->scrawlfolder);
			if ($savepath) {
				$state = 'SUCCESS';
				$url = $savepath;
			} else {
				$state = 'Save scrawl file error!';
			}
		}
		$response=array(
		"state" => $state,
		"url" => $url,
		"title" => $title,
		"original" =>$oriName ,
		);
		return json_encode($response);
	}	

	//抓取远程文件
	private function _upload_catch()
	{
		set_time_limit(0);
		$sret = array(
			'state' => '',
			'list' => null
		);
		$savelist = array();
		$flist = input('post.' . $this->config ['catcherFieldName'].'/a');
		if (empty ($flist)) {
			$sret ['state'] = 'ERROR';
		} else {
			$sret ['state'] = 'SUCCESS';
			foreach ($flist as $f) {
				if (preg_match('/^(http|ftp|https):\\/\\//i', $f)) {
					$ext = strtolower(pathinfo($f, PATHINFO_EXTENSION));
					if (in_array('.' . $ext, $this->config ['catcherAllowFiles'])) {
						if ($img = file_get_contents($f)) {

							$savepath = $this->save_image($ext, $img, $this->catchfolder);
							if ($savepath) {
								$savelist [] = array(
									'state' => 'SUCCESS',
									'url' => '/'.$savepath,
									'size' => strlen($img),
									'title' => '',
									'original' => '',
									'source' => htmlspecialchars($f)
								);
							} else {
								$savelist [] = array(
									'state' => 'Save remote file error!',
									'url' => '',
									'size' => '',
									'title' => '',
									'original' => '',
									'source' => htmlspecialchars($f),
								);
							}
				
						} else {
							$savelist [] = array(
							'state' => 'Get remote file error',
							'url' => '',
							'size' => '',
							'title' => '',
							'original' => '',
							'source' => htmlspecialchars($f),
							);
						}
					} else {
						$sret ['state'] = 'File ext not allowed';
					}
				} else {
					$savelist [] = array(
						'state' => 'not remote image',
						'url' => '',
						'size' => '',
						'title' => '',
						'original' => '',
						'source' => htmlspecialchars($f),
					);
				}
			}
			$sret ['list'] = $savelist;
		}
		return json_encode($sret);
	}


	private function save_image($ext = null, $content = null, $path = null)
	{
		$newfile = '';
		$path=substr($path,0,2)=='./' ? substr($path,2) :$path;
		$path=substr($path,0,1)=='/' ? substr($path,1) :$path;
		if ($ext && $content) {
		    do {
		        $newfile = $path.str_replace("-","",date('Y-m-d/')) . uniqid() . '.' . $ext;
		    } while (file_exists($newfile));
		    $dir = dirname($newfile);
		    if (!is_dir($dir)) {
		        mkdir($dir, 0777, true);
		    }
		    file_put_contents($newfile, $content);

		    // 图片压缩
			// $img_url='./'.$newfile;    
			// $image = \think\Image::open('./'.$img_url);
			// $image->thumb(700,1400)->save('./'.$img_url);

		}
		return $newfile;
	}


	private function _list($action)
	{
		/* 判断类型 */
		switch ($action) {
			/* 列出文件 */
			case 'listfile':
				$allowFiles = $this->config['fileManagerAllowFiles'];
				$listSize = $this->config['fileManagerListSize'];
				$prefix='/';
				break;
			/* 列出图片 */
			case 'listimage':
			default:
				$allowFiles = $this->config['imageManagerAllowFiles'];
				$listSize = $this->config['imageManagerListSize'];
				$prefix='/';
		}
		$allowFiles = substr(str_replace(".", "|", join("", $allowFiles)), 1);
		/* 获取参数 */
		$size = isset($_GET['size']) ? htmlspecialchars($_GET['size']) : $listSize;
		$start = isset($_GET['start']) ? htmlspecialchars($_GET['start']) : 0;
		$end = intval($start) + intval($size);
        $path = $this->uploadfolder;
        $files = $this->getfiles($path, $allowFiles);
        if (!count($files)) {
            return json_encode(array(
                "state" => "no match file",
                "list" => array(),
                "start" => $start,
                "total" => count($files)
            ));
        }
        /* 获取指定范围的列表 */
        $len = count($files);
        for ($i = min($end, $len) - 1, $list = array(); $i < $len && $i >= 0 && $i >= $start; $i--){
            $list[] = $files[$i];
        }
		/* 返回数据 */
		$result = json_encode(array(
			"state" => "SUCCESS",
			"list" => $list,
			"start" => $start,
			"total" => count($files)
		));
		return $result;
	}
	/**
	 * 遍历获取目录下的指定类型的文件
	 * @param string $path
	 * @param string $allowFiles
	 * @param array $files
	 * @return array
	 */
	private function getfiles($path, $allowFiles, &$files = array())
	{

		dump($path);
		if (!is_dir($path)) return null;
		if(substr($path, strlen($path) - 1) != '/') $path .= '/';
		$handle = opendir($path);
		while (false !== ($file = readdir($handle))) {
			if ($file != '.' && $file != '..') {
				$path2 = $path . $file;
				if (is_dir($path2)) {
					$this->getfiles($path2, $allowFiles, $files);
				} else {
					if (preg_match("/\.(".$allowFiles.")$/i", $file)) {
						$files[] = array(
							'url'=> substr($path2,1),
							'mtime'=> filemtime($path2)
						);
					}
				}
			}
		}
		return $files;
	}




}