var nowcontent = window.location.href;

$(document).ready(function() {
    be.init();
    $('#detail>div>div>p>s').click(function() {
        $(this).attr('class', 'u').siblings().removeClass();
        $('#detail>div>div>em').eq($('#detail>div>div>p>s').index(this)).attr('class', 'u').siblings().removeClass()
    });
    $('#detail>em>div>b').click(function() {
        window.open('http://wpa.qq.com/msgrd?v=3&uin=' + qq + '&site=qq&menu=yes')
    });
    $('#detail>em>u>em').click(function() {
        top.location.href = '/MediaDetail.aspx?id=' + $(this).attr('id').split('_')[1]
    });
    $('#detail>em>div>em>s:nth-child(2)').click(function() {
        window.open('http://service.weibo.com/share/share.php?url=' + encodeURIComponent(document.URL) + '&title=' + encodeURIComponent(document.querySelector('meta[name="description"]').getAttribute('content')) + '&pic=http://www.wanyiyun.com/images/' + lablePic + '&appkey=&searchPic=false')
    });
    $('#detail>em>div>em>s:nth-child(3)').click(function() {
        be.showalert('<a style="font-weight:700">分享到微信</a><br><div class="mh-x"></div>')
        $('#alert s').qrcode({
            width: 200,
            height: 200,
            render: "img",
            correctLevel: 0,
            text: nowcontent
        });
    });
    $('#detail>em>div>em>s:nth-child(4)').click(function() {
        window.open('https://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=' + encodeURIComponent(document.URL) + '&title=' + encodeURIComponent(document.title) + '&pics=http://www.wanyiyun.com/images/' + lablePic + '&summary=' + encodeURIComponent(document.querySelector('meta[name="description"]').getAttribute('content')) + '&desc=' + encodeURIComponent(document.querySelector('meta[name="description"]').getAttribute('content')) + '')
    });
    $('#detail>em>div>em>s:nth-child(5)').click(function() {
        window.open('http://share.v.t.qq.com/index.php?c=share&a=index&title=' + encodeURIComponent(document.querySelector('meta[name="description"]').getAttribute('content')) + '&url=' + encodeURIComponent(document.URL) + '&appkey=ce15e084124446b9a612a5c29f82f080&site=www.jiathis.com&pic=' + encodeURIComponent('http://www.wanyiyun.com/images/' + lablePic) + '')
    });
    $('#detail>div>div>em>ul>li').click(function() {
        $(this).attr('class', 'u').siblings().removeClass();
        $('#detail>div>div>em>p>img').attr('src', '/images/' + $(this).attr('src'))
    });
    be.checkImgs();
    $(document).scroll(function() {
        be.checkImgs()
    })


});