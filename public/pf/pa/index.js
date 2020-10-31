function MenuEffect__init() {
    var $Enter = $(".main > .header");

    $Enter.mouseenter(function () {
        $Enter.addClass("active");
    });

    $Enter.mouseleave(function () {
        $Enter.removeClass("active");
    });
}

function hoverBar__init() {
    $(".hover-bar-nav .hover-bar-menu").mouseenter(function () {
        var $this = $(this);

        var menuWidth = $this.width();
        var menuPadding = ($this.innerWidth() - $this.width()) / 2;
        var menuPosition = $this.position().left;

        var $hoverBar = $(".hover-bar");

        $hoverBar.css("width", menuWidth + "px");
        $hoverBar.css("left", menuPosition + menuPadding + "px");
    });

    $(".hover-bar-nav").mouseleave(function () {
        var $this = $(this);
        var $hoverBar = $(".hover-bar");
        $hoverBar.css("width", "");
        $hoverBar.css("left", "");
    });
}


$(function () {
    MenuEffect__init();
    hoverBar__init();
});