function FullPage() {
    var myFullpage = new fullpage('#fullpage', {
        scrollingSpeed: 1000,
        scrollBar: true,
        verticalCentered: false
    });
}

function HoverEffect__init() {
    var $Hover = $('.main > .header > .top-bar >.lan-box > .lan');

    $Hover.mouseenter(function(){
        $Hover.addClass('active');
    });

    $Hover.mouseleave(function(){
        $Hover.removeClass('active');
    });
}


function ListClick() {
    $(".main>.header> .menu-box > ul > li").click(function (e) {
        var $this = $(this);
        var hasClass = $this.hasClass("active");

        if (hasClass) {
            $this.removeClass("active");
        } else {
            $this.siblings(".active").find("li.active").removeClass("active");
            $this.siblings(".active").removeClass("active");
            $this.addClass("active");
        }
    });
    e.stopPropagation();
}


$(function(){
    FullPage();
});

$(function(){
    HoverEffect__init();
    ListClick();
});
