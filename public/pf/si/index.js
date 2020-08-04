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




/* 기능 */
function SliderK__show($slider, index) {
    var $currentSlide = $slider.find('.slides > div.active');
    var $postSlide = $slider.find('.slides > div').eq(index);
    
    $currentSlide.removeClass('active');
    $postSlide.addClass('active');
    
    $slider.find('.page-nav > div.active').removeClass('active');
    $slider.find('.page-nav > div').eq(index).addClass('active');
}

function SliderK__showPrev($slider) {
    SliderK__showPost($slider, -1);
}

function SliderK__showNext($slider) {
    SliderK__showPost($slider, 1);
}

function SliderK__showPost($slider, change) {
    var $currentSlide = $slider.find('.slides > div.active');
    var $postSlide = null;
    var $firstSlide = $slider.find('.slides > div:first-child');
    var $lastSlide = $slider.find('.slides > div:last-child');
    
    if ( change == 1 ) {
        $postSlide = $currentSlide.next();
        
        if ( $postSlide.length == 0 ) {
            $postSlide = $firstSlide;
        }
    }
    else if ( change == -1 ) {
        $postSlide = $currentSlide.prev();
        
        if ( $postSlide.length == 0 ) {
            $postSlide = $lastSlide;
        }
    }
    
    SliderK__show($slider, $postSlide.index());
}

/* 초기화 */
function SliderK__init() {
    $('.slider-k').each(function(index, node) {
        var $slider = $(node);
        
        SliderK__initPageNav($slider);
        SliderK__initSideBtns($slider);
        SliderK__initAutoplay($slider);
    });
}

// 페이지 내비를 자동으로 만들어줍니다.
function SliderK__initPageNav($slider) {
    var currentIndex = $slider.find('.slides > div.active').index();
    var slidesCount = $slider.find('.slides > div').length;
    
    var html = '';
        
    for ( var i = 0; i < slidesCount; i++ ) {
        if ( i == currentIndex ) {
            html += '<div class="active"></div>';
        }
        else {
            html += '<div></div>';
        }
    }

    html = '<div class="page-nav">' + html + '</div>';
    $slider.append(html);
    
    $slider.find('.page-nav > div').click(function() {
        SliderK__show($slider, $(this).index());
    });
}

// 사이드 버튼에 이벤트를 겁니다.
function SliderK__initSideBtns($slider) {
    $slider.find('.side-btns > div').click(function() {
        var index = $(this).index();
        
        if ( index == 0 ) {
            SliderK__showPrev($slider);
        }
        else {
            SliderK__showNext($slider);
        }
    });
}

function SliderK__initAutoplay($slider) {
    var autoplay = $slider.data('autoplay');
    
    $slider.data('autoplay-now-work', 'Y');
    
    $slider.mouseenter(function() {
        $slider.data('autoplay-now-work', 'N');
    });
    
    $slider.mouseleave(function() {
        $slider.data('autoplay-now-work', 'Y');
    });
    
    if ( autoplay != 'Y' ) {
        return false;
    }
    
    var autoplayInterval = $slider.data('autoplay-interval');
    
    if ( typeof autoplayInterval == 'undefined' ) {
        autoplayInterval = 3000;
    }
    else {
        // 문자열을 숫자화
        autoplayInterval = autoplayInterval * 1;
    }
    
    var autoplayDirIsLeft = $slider.data('autoplay-dir') == 'left';
    
    setInterval(function() {
        if ( $slider.data('autoplay-now-work') == 'Y' ) {
            if ( autoplayDirIsLeft ) {
                SliderK__showPrev($slider);
            }
            else {
                SliderK__showNext($slider);
            }
        }
    }, autoplayInterval);
}

/*
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
*/

function menuHeight__init(){

    $(".main > .header > .menu-box > ul > li > ul").each(function(){
        var $this = $(this);
        var $parent = $this.parent();
        $(document).ready(function($parent){
            $parent.data('data-sub-menu-height', $this.outerHeight());
            $this.css('height',0);
        });
        //$this.css('height',0);
        console.log($this.parent().data('data-sub-menu-height'));
        
    })

    $(".main>.header> .menu-box > ul > li").click(function(){
        var $this = $(this);
        var menuHeight = $this.data('data-sub-menu-height');
        var hasClass = $this.hasClass("active");

        $(".main>.header> .menu-box > ul > li > ul").css('height', 0);

        $this.find('> ul').css('height', menuHeight);
    })
}

$(function(){
    FullPage();
    SliderK__init();
});

$(function(){
    HoverEffect__init();
    menuHeight__init();
});
