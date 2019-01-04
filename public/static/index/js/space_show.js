$(".wemedia-xq-fourr-bgr").click(function(){
    $(".wemedia-xq-fourr-bgm ul").animate({left:"-303px"},function(){
        $(".wemedia-xq-fourr-bgm ul li:eq(0)").appendTo($(".wemedia-xq-fourr-bgm ul"));//appendTo鍚戠洰鏍囩粨灏炬彃鍏ュ尮閰嶅厓绱犻泦鍚堛€�
        $(".wemedia-xq-fourr-bgm ul").css("left","0px");
    });
});
$(".wemedia-xq-fourr-bgl").click(function(){
    $(".wemedia-xq-fourr-bgm ul").animate({left:"303px"},function(){
        $(".wemedia-xq-fourr-bgm ul li:last").insertBefore($(".wemedia-xq-fourr-bgm ul li:first"));//insertBefore瀹氫箟浠庡綋鍓嶅厓绱犵Щ璧帮紝鐒跺悗琚坊鍔犺閫夊厓绱犱箣鍓�
        $(".wemedia-xq-fourr-bgm ul").css("left","0px");
    });
});


$(function(){
	// 浮动体
	var toTopHeight = $("#tab_fxd").offset().top;
	$(window).scroll(function() {
		if($(document).scrollTop()>=$(document).height()-$(window).height()-145){
			$("#tab_fxd").hide();
		}
		else{
			$("#tab_fxd").show();
		}
		if( $(document).scrollTop() > toTopHeight){
				$("#tab_fxd").addClass("fxd");

		}else{
				$("#tab_fxd").removeClass("fxd");
		}
	});
	
	// 滚动定位
	function h(id){
		var arr = [];
		id.each(function(i){
			arr.push(id.eq(i).offset().top-$('#tab_fxd').height()-1);
		});
		for(var i = 0;i<arr.length;i++){
			if($(document).scrollTop() > arr[i]){
				tab1(i,'on');
			}
		}
	}
	function tab1(index,clas){
		$('#tab_fxd li').removeClass(clas).eq(index).addClass(clas);
	}
	$(window).scroll(function(){
		h($('.sectionBox .section'));
	});
	$("#tab_fxd li").click(function(e){

		e.preventDefault();
		var index = ($("#tab_fxd li")).index($(this));
		var goTo;

		if($('#tab_fxd').is('.fxd')){
		        goTo = $('.sectionBox .section').eq(index).offset().top-$('#tab_fxd').height();
			}
			else{
		        goTo = $('.sectionBox .section').eq(index).offset().top-$('#tab_fxd').height()-$('#tab_fxd').height();
				}


		$("html, body").animate({
			scrollTop: goTo
		}, 500);
	});
});

