$(document).ready(function() {
    be.init();
    $('#select_box>ul>li>em>u>input').bind('input propertychange', function() {
        this.value = this.value.replace(/\D/g, '')
    });
    $('#select_box>ul>li>em>a').click(function() {
        $(this).attr('class', 'link u').siblings().removeClass('u');
        $(this).parent().find('input').val('');
        conditionals()
    });
    $('#select_box>ul>li>em>u>b').click(function() {
        conditionals()
    });
    $('#select_box>ul>li>em>select').change(function() {
        conditionals()
    });
    $('#lists_sort>b>a').click(function() {
        top.location.href = 'product_8_2.html'
    });
    // $('#lists_sort>s').eq(0).click(function() {
    //     $(this).attr('class', $(this).attr('class') == 'd' ? 'u' : 'd').siblings().removeClass();
    //     conditionals($(this).attr('class') == 'd' ? 0 : 1)
    // });
    // $('#lists_sort>s').eq(1).click(function() {
    //     $(this).attr('class', $(this).attr('class') == 'd' ? 'u' : 'd').siblings().removeClass();
    //     conditionals($(this).attr('class') == 'd' ? 2 : 3)
    // });
    // $('#lists_sort>s').eq(2).click(function() {
    //     $(this).attr('class', $(this).attr('class') == 'd' ? 'u' : 'd').siblings().removeClass();
    //     conditionals($(this).attr('class') == 'd' ? 4 : 5)
    // });
    // $.each(pages, function() {
    //     $('#pagination ul').append('<li class="' + (this[0] == 0 ? 'd' : (this[0] == 1 ? 'n' : 'm')) + '">' + ((this[0] == 2 ? '...' : this[1])) + '</li>')
    // });
    // $('#pagination li.d').click(function() {
    //     conditionals(($('#lists_sort>s').eq(0).attr('class') == 'd' ? 0 : ($('#lists_sort>s').eq(0).attr('class') == 'u' ? 1 : ($('#lists_sort>s').eq(1).attr('class') == 'd' ? 2 : ($('#lists_sort>s').eq(1).attr('class') == 'u' ? 3 : ($('#lists_sort>s').eq(2).attr('class') == 'd' ? 4 : 5))))), $(this).text())
    // });
    $('#items>li>div>p').click(function() {

    });
    $('#items>li>em>s>b').click(function() {
        window.open('http://wpa.qq.com/msgrd?v=3&uin=' + $(this).attr('id').split('_')[1] + '&site=qq&menu=yes')
    });
    be.checkImgs();
    $(document).scroll(function() {
        be.checkImgs()
    })
});

function conditionals(a, b) {
    var c = $('#select_box>ul>li:nth-child(1)>em>a').index($('#select_box>ul>li:nth-child(1)>em>a.u')) > 0 ? ($('#select_box>ul>li:nth-child(1)>em>a').index($('#select_box>ul>li:nth-child(1)>em>a.u')) - 1) : '';
    c += '|' + $('#select_box>ul>li:nth-child(2)>em>a.u').attr('id').split('_')[1];
    c += '|' + ($('#select_box>ul>li:nth-child(3)>em>a').index($('#select_box>ul>li:nth-child(3)>em>a.u')) > 0 ? ($('#select_box>ul>li:nth-child(3)>em>a').index($('#select_box>ul>li:nth-child(3)>em>a.u')) - 1) : '');
    c += '|' + $('#select_box>ul>li>em>u>input').eq(0).val() + '|' + $('#select_box>ul>li>em>u>input').eq(1).val();
    c += '|' + ($('#select_box>ul>li:nth-child(4)>em>a').index($('#select_box>ul>li:nth-child(4)>em>a.u')) > 0 ? ($('#select_box>ul>li:nth-child(4)>em>a').index($('#select_box>ul>li:nth-child(4)>em>a.u')) - 1) : '');
    c += '|' + $('#select_box>ul>li>em>u>input').eq(2).val() + '|' + $('#select_box>ul>li>em>u>input').eq(3).val();
    c += '|' + ($('#select_box>ul>li:nth-child(5)>em>a').index($('#select_box>ul>li:nth-child(5)>em>a.u')) > 0 ? ($('#select_box>ul>li:nth-child(5)>em>a').index($('#select_box>ul>li:nth-child(5)>em>a.u')) - 1) : '');
    c += '|' + $('#select_box>ul>li>em>select').eq(0).val() + '|' + $('#select_box>ul>li>em>select').eq(1).val() + '|' + $('#select_box>ul>li>em>select').eq(2).val() + '|' + $('#select_box>ul>li>em>select').eq(3).val() + '|' + $('#select_box>ul>li>em>select').eq(4).val() + '|' + $('#select_box>ul>li>em>select').eq(5).val() + '|' + $('#select_box>ul>li>em>select').eq(6).val();
    c = c == '|||||||||||||||' ? '' : ('?c=' + c);
    var t = (a != null && a > 0 && a < 6) ? ((c == '' ? '?' : '&') + 't=' + a) : '';
    var p = b != null && b > 1 ? ((c == '' && t == '' ? '?' : '&') + 'p=' + b) : '';
    var s = search.length > 0 ? ((c == '' && t == '' && p == '' ? '?' : '&') + 's=' + encodeURIComponent(be.strDeT(search))) : '';
    top.location.href = '/WeChat.aspx' + c + t + p + s
}