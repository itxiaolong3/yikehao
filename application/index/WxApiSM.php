<?php
namespace app\index;
//微信支付公共接口
class WxApiSM{
	private $wxApi = '';

	public function __construct(){
		include ROOT_PATH . 'extend/WxpayAPI_php_v3.0.1/lib/WxPay.Api.php';
		include ROOT_PATH . 'extend/WxpayAPI_php_v3.0.1/example/WxPay.NativePay.php';
		$this->wxApi = new \WxPayApi();
	}

	//统一下单
	public function UnifiedOrder($body,$attach,$price,$productid,$tz_url){
		if(!$tz_url){
			$tz_url = request()->domain().'/yikehao/TZ';
		}else{
            $tz_url = request()->domain().'/yikehao/TZSm';
        }

		$inputObj = new \WxPayUnifiedOrder();
		$payurlobj=new \NativePay();

		$inputObj->SetBody($body);											//设置商品描述
        $inputObj->SetAttach($attach);                                      //设置商品备注
		$inputObj->SetOut_trade_no(\WxPayConfig::$MCHID.date("YmdHis"));//设置订单号   date("YmdHis").mt_rand ()
		$inputObj->SetTotal_fee($price);									//设置订单总金额
        $inputObj->SetTime_start(date("YmdHis"));
        $inputObj->SetTime_expire(date("YmdHis", time() + 600));
        $inputObj->SetGoods_tag("test");
		$inputObj->SetNotify_url($tz_url);			//通知地址
		$inputObj->SetTrade_type('NATIVE');									//设置交易类型
        $inputObj->SetProduct_id($productid);										//设置产品id
        $result = $payurlobj->GetPayUrl($inputObj);
        if (empty($result["code_url"])){
            $url2='';
        }else{
            $url2 = $result["code_url"];
        }
        return $url2;
	}
    //根据通知的xml生成签名
    public function makeSign($xml){
        $WxPayDataBase = new \WxPayDataBase();
        $reArr = $WxPayDataBase->FromXml($xml);
        return $sign = $WxPayDataBase->MakeSign();
        print_r($sign);
    }

    //根据通知的xml转换成 数组
    public function fromXml($xml){
        $WxPayDataBase = new \WxPayDataBase();
        return $reArr = $WxPayDataBase->FromXml($xml);
    }
}