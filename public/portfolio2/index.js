$(document).ready(function () {
    var select = function (s) {
            return document.querySelector(s);
        },
        liquidFront = select('.liquidFront'),
        liquidMaskGroup = select('.liquidMaskGroup'),
        liquidBack = select('.liquidBack'),
        bubble0 = select('.bubble0'),
        bubble1 = select('.bubble1'),
        bubble2 = select('.bubble2'),
        bubble3 = select('.bubble3'),
        bubble4 = select('.bubble4'),
        pop = select('.pop'),
        bubblePop0 = select('.bubblePop0'),
        bubblePop1 = select('.bubblePop1'),
        bubblePop2 = select('.bubblePop2'),
        liquidBubblesGroup = select('.liquidBubblesGroup');
    var xLink = "http://www.w3.org/1999/xlink";
    var pop1 = pop.cloneNode(true);
    var pop2 = pop.cloneNode(true);
    liquidMaskGroup.appendChild(pop1);
    liquidMaskGroup.appendChild(pop2);

    var isDevice = (/android|webos|iphone|ipad|ipod|blackberry/i.test(navigator.userAgent.toLowerCase()));

    if (!isDevice) {

        TweenMax.set(liquidBubblesGroup, {
            filter: 'url(#goo)',
            '-webkit-filter': 'url(#goo)'
        })
    }


    var mainTimeline = new TimelineMax();

    var frontLiquidTimeline = new TimelineMax({
        repeat: -1
    });
    frontLiquidTimeline.to(liquidFront, 4, {
        x: -600,
        ease: Linear.easeNone
    })

    var backLiquidTimeline = new TimelineMax({
        repeat: -1
    });
    backLiquidTimeline.from(liquidBack, 4, {
        x: -700,
        ease: Linear.easeNone
    })


    function getBetweenVal(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }
});

function Carousel1__onTranslated() {
    $('.carousel-1 > .owl-carousel').trigger('play.owl.autoplay');

    $('.carousel-1').data('carousel-1-autoplay-status', 'Y');

    var no = $('.carousel-1 .owl-item.active.center > .item').attr('data-no') * 1;

    $('.carousel-2 > .owl-carousel').trigger('to.owl.carousel', [no - 1]);
    $('.carousel-2 .owl-item > .item.active').removeClass('active');
    $('.carousel-2 .owl-item > .item[data-no="' + no + '"]').addClass('active');
}

function Carousel1__init() {
    // 데이터 개수 적어두기
    var totalItemNo = $('.carousel-1 .item').length;
    $('.carousel-1').data('total-items', totalItemNo);

    // 각 아이템에 번호 매기기
    $('.carousel-1 .item').each(function (index, node) {
        $(node).attr('data-no', index + 1);
    });

    $('.carousel-1 > .owl-carousel').owlCarousel({
        autoplay: false, // 오토 플레이
        loop: false, // 끝에서 다시 처음으로 시작
        dots: false,
        margin: 0,
        center: true,
        mouseDrag:false,
        nav: true,
        navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            }
        },
        autoplayHoverPause: false,
        /* 필수 */
        onTranslated: Carousel1__onTranslated,
    });

    $('.carousel-1 .play').on('click', function () {
        $('.carousel-1 > .owl-carousel').trigger('play.owl.autoplay');

        $('.carousel-1').data('carousel-1-autoplay-status', 'Y');
    });

    $('.carousel-1 .stop').on('click', function () {
        $('.carousel-1 > .owl-carousel').trigger('stop.owl.autoplay');

        $('.carousel-1').data('carousel-1-autoplay-status', 'N');
    });
}



/* 캐러셀 2 */
function Carousel2__itemClicked(el) {
    var $el = $(el);

    var no = $el.attr('data-no') * 1;
    var currentNo = $('.carousel-1 .owl-item.active > .item').attr('data-no') * 1;

    console.log('no : ' + no);
    console.log('currentNo : ' + currentNo);

    if (no != currentNo) {
        $('.carousel-1 > .owl-carousel').trigger('to.owl.carousel', [no - 1, 100]);
    }
}

function Carousel2__onTranslated() {
    $('.carousel-2 > .owl-carousel').trigger('play.owl.autoplay');

    $('.carousel-2').data('carousel-2-autoplay-status', 'Y');
}

function Carousel2__init() {
    // 데이터 개수 적어두기
    var totalItemNo = $('.carousel-2 .item').length;
    $('.carousel-2').data('total-items', totalItemNo);

    // 각 아이템에 번호 매기기
    $('.carousel-2 .item').each(function (index, node) {
        $(node).attr('data-no', index + 1);
    });

    $('.carousel-2 > .owl-carousel').owlCarousel({
        autoplay: false, // 오토 플레이
        loop: false, // 끝에서 다시 처음으로 시작
        margin: 0,
        dots: false,
        nav: false,
        mouseDrag:false,
        center: true,
        // navText:['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            }
        },
        autoplayHoverPause: false,
        /* 필수 */
        onTranslated: Carousel2__onTranslated,
    });

    $('.carousel-2 .play').on('click', function () {
        $('.carousel-2 > .owl-carousel').trigger('play.owl.autoplay');

        $('.carousel-2').data('carousel-2-autoplay-status', 'Y');
    });

    $('.carousel-2 .stop').on('click', function () {
        $('.carousel-2 > .owl-carousel').trigger('stop.owl.autoplay');

        $('.carousel-2').data('carousel-2-autoplay-status', 'N');
    });
}


// $(document).ready(function () {
//     var $aboutMe = $(".about-me");

//     var windowHeight = $(window).height();

//     $(window).resize(function () {
//         windowHeight = $(window).height();
//     });

//     $(window).scroll(function () {
//         var scrollTop = $(window).scrollTop();

//         if (scrollTop > windowHeight + 300) {
//             $aboutMe.addClass("opc");
//         } else {
//             $aboutMe.removeClass("opc");
//         }
//     });
// });


$(function () {
    Carousel1__init();
    Carousel2__init();
});