// 메인 비디오 슬라이드

$(document).ready(function () {
    var swiper = new Swiper('.swiper1', {
        slidesPerView: 1,
        loop: true,
        speed: 1000,
        navigation: false,
        // spaceBetween: 50,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 11000,
        },
    });
});


/* 발견되면 활성화시키는 라이브러리 시작 */
function ActiveOnVisible__init() {
    $(window).resize(_.debounce(ActiveOnVisible__initOffset, 500));
    ActiveOnVisible__initOffset();
  
    $(window).scroll(_.debounce(ActiveOnVisible__checkAndActive, 50));
    ActiveOnVisible__checkAndActive();
  }
  
  function ActiveOnVisible__initOffset() {
    $('.active-on-visible:not(.actived)').each(function(index, node) {
      var $node = $(node);
  
      var offsetTop = $node.offset().top;
      $node.attr('data-active-on-visible-offsetTop', offsetTop);
  
      if ( !$node.attr('data-active-on-visible-diff-y') ) {
        $node.attr('data-active-on-visible-diff-y', '0');
      }
      
      if ( !$node.attr('data-active-on-visible-delay') ) {
        $node.attr('data-active-on-visible-delay', '0');
      }
      
      var diffY = $node.attr('data-active-on-visible-diff-y');
      var delay = $node.attr('data-active-on-visible-delay');
      
      if ( diffY.substr(-2, 2) == 'vh' ) {
        diffY = parseInt(diffY);
        
        diffY = diffY * $(window).height() / 100;
      }
      else if ( diffY.substr(-1, 1) == '%' ) {
        diffY = parseInt(diffY);
        
        diffY = diffY * $node.height() / 100;
      }
      else {
        diffY = parseInt(diffY);
      }
      
      $node.data('data-active-on-visible-diff-y', diffY);
      $node.data('data-active-on-visible-delay', delay);
    });
  
    ActiveOnVisible__checkAndActive();
  }
  
  function ActiveOnVisible__checkAndActive() { 
    $('.active-on-visible:not(.actived)').each(function(index, node) {
      var $node = $(node);
  
      var offsetTop = $node.attr('data-active-on-visible-offsetTop') * 1;
      var diffY = parseInt($node.data('data-active-on-visible-diff-y'));
      var delay = parseInt($node.data('data-active-on-visible-delay'));
  
      var callbackFuncName = $node.attr('data-active-on-visible-callback-func-name');
  
      var scrollTop = $(window).scrollTop();
      var windowHeight = $(window).height();
      var nodeHeight = $node.height();
  
      if ( scrollTop + windowHeight + diffY > offsetTop ) {
        setTimeout(function() {
          $node.addClass('active');
          
          if ( $node.hasClass('active-only-one') ) {
            $node.addClass('actived');
          }
          
          if ( window[callbackFuncName] ) {
            window[callbackFuncName]($node);
          }
        }, delay);
      }
      else {
        $node.removeClass('active');
      }
    });
  }
  
  $(function() {
    ActiveOnVisible__init();
  })
  /* 발견되면 활성화시키는 라이브러리 끝 */
  


// 3페이지 -슬라이더

$(document).ready(function () {
    var swiper = new Swiper('.swiper2', {
        slidesPerView: 5,
        spaceBetween: 20,
        freeMode: true,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});

// 5페이지 -탭박스

function TabBox__init() {
    $('[data-tab-head-item-name]').click(function () {
        var $this = $(this);
        var tabName = $this.attr('data-tab-name');
        var itemName = $this.attr('data-tab-head-item-name');
        // [for]
        // 모든 것을 숨기고
        $('[data-tab-name="' + tabName + '"]').removeClass('active');

        $('[data-tab-name="' + tabName + '"][data-tab-head-item-name="' + itemName + '"]').addClass('active');
        $('[data-tab-name="' + tabName + '"][data-tab-body-item-name="' + itemName + '"]').addClass('active');
    });
}

$(function () {
    TabBox__init();
});