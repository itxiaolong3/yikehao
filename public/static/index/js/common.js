/*限制字符个数*/
function limit(classname, maxlength) {
    $(classname).each(function () {
        var lengthtext = $(this).text().length;
        if (maxlength < lengthtext) {
            var newtext = $(this).text().substring(0, maxlength) + "...";
            $(this).html(newtext);
        }
    })
};

/*回到顶部*/
function backtop(classname) {
    $(classname).click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 300);
        return false;
    });
};

/*关闭弹窗*/
function shutdiv(btn, div) {
    $(btn).css("cursor", "pointer");
    $(document).on("click", btn, function () {
        $(this).parents(div).hide();
    })
};

/*获取a标签跳转*/
function aclick(btn) {
    $(btn).css("cursor", "pointer");
    $(document).on("click", btn, function () {
        var a = $(this).find("a").attr("href");
        if (a) {
            window.location = a;
        }
    })
};