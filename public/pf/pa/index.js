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

function Slider1__init() {
    $('.slider-1 > .owl-carousel').owlCarousel({
        dots: true,
        nav: true,
        mouseDrag: false,
        autoplay: true,
        loop: true,
        autoplayTimeout: 6000,

        responsive: {
            0: {
                items: 1
            }

        }
    });
}


function Text_slide() {
    $('.container .owl-carousel').owlCarousel({
        dots: false,
        nav: false,
        mouseDrag: false,
        autoplay: true,
        loop: false,
        autoWidth: false,
        autoplayTimeout: 6000,

        responsive: {
            0: {
                items: 4
            }

        }
    });
}


// 탑바 스크롤 색상변화

$(document).ready(function () {
    var $topBar = $(".top-wrap");

    var windowHeight = $(window).height();

    $(window).resize(function () {
        windowHeight = $(window).height();
    });

    $(window).scroll(function () {
        var scrollTop = $(window).scrollTop();

        if (scrollTop > windowHeight - 700) {
            $topBar.addClass("white");
        } else {
            $topBar.removeClass("white");
        }
    });
});


/* 발견되면 활성화시키는 라이브러리 시작 */
function ActiveOnVisible__init() {
    $(window).resize(ActiveOnVisible__initOffset);
    ActiveOnVisible__initOffset();

    $(window).scroll(ActiveOnVisible__checkAndActive);
    ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__initOffset() {
    $(".active-on-visible").each(function (index, node) {
        var $node = $(node);

        var offsetTop = $node.offset().top;
        var offsetBottom = offsetTop + $node.outerHeight();
        $node.attr("data-active-on-visible-offsetTop", offsetTop);
        $node.attr("data-active-on-visible-offsetBottom", offsetBottom);

        if (!$node.attr("data-active-on-visible-diff-y")) {
            $node.attr("data-active-on-visible-diff-y", "-100");
        }

        if (!$node.attr("data-active-on-visible-delay")) {
            $node.attr("data-active-on-visible-delay", "100");
        }
    });

    ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__checkAndActive() {
    $(".active-on-visible").each(function (index, node) {
        var $node = $(node);

        var offsetTop = parseInt($node.attr("data-active-on-visible-offsetTop"));
        var offsetBottom = parseInt(
            $node.attr("data-active-on-visible-offsetBottom")
        );
        var diffY = parseInt($node.attr("data-active-on-visible-diff-y"));
        var delay = parseInt($node.attr("data-active-on-visible-delay"));

        if ($(window).scrollTop() + diffY > offsetBottom == false) {
            if ($(window).scrollTop() + $(window).height() - diffY > offsetTop) {
                setTimeout(function () {
                    $node.addClass("active");
                }, delay);
            }
        }
    });

    $(".active-on-visible.active").each(function (index, node) {
        var $node = $(node);

        var offsetTop = $node.attr("data-active-on-visible-offsetTop");
        var offsetBottom = $node.attr("data-active-on-visible-offsetBottom");
        var diffY = parseInt($node.attr("data-active-on-visible-diff-y"));
        var delay = parseInt($node.attr("data-active-on-visible-delay"));

        if (
            $(window).scrollTop() + $(window).height() < offsetTop ||
            $(window).scrollTop() > offsetBottom
        ) {
            setTimeout(function () {
                $node.removeClass("active");
            }, delay);
        }
    });
}




$(function () {
    MenuEffect__init();
    hoverBar__init();
    Slider1__init();
    Text_slide();
    ActiveOnVisible__init();
});