function getpw() { return $(window).width(); }
function setfontsize() {
    wiw = getpw();
    fz = (wiw / 750);
    $('html').css('font-size', fz * 30);
}
function loads() {
    setfontsize();
    $(window).on("resize", function () {
        setfontsize();
        setTimeout(function () { setfontsize(); }, 300);
    })
}
loads();