function MobileSideBar__toggle() {
    var $btn = $('.btn-toggle-mobile-side-bar');

    if ($btn.hasClass('active')) {
        $btn.removeClass('active');
        $('.mobile-side-bar').removeClass('active');
        $('.side-bg-box').removeClass('active');
        $('html').removeClass('active');
        $('.mobile-side-bar .side-menu-box-1 > ul > li').removeClass('active');


    } else {
        $btn.addClass('active');
        $('.mobile-side-bar').addClass('active');
        $('.side-bg-box').addClass('active');
        $('html').addClass('active');

    }
}

function MobileSideBar__init() {
    $('.btn-toggle-mobile-side-bar,.side-bg-box').click(MobileSideBar__toggle);

    $('.mobile-side-bar .side-menu-box-1 ul > li').click(function (e) {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).addClass('active');
            $(this).siblings('.active').find('li.active').removeClass('active');
            $(this).siblings('.active').removeClass('active');

        }
        e.stopPropagation();
    });
}

$(function () {
    MobileSideBar__init();

    $('.btn-toggle-mobile-side-bar').click();
    $('.mobile-side-bar .menu-box-1 > ul > li:last-child').click();


    $('.slider > .side-bars > div').click(function () {
        var $clickedBtn = $(this);
        var $slider = $clickedBtn.closest('.slider');

        var isLeft = $clickedBtn.index() == 0;

        var $currnet = $slider.find('.slides > .active');
        var $post = null;

        if (isLeft) {
            $post = $currnet.prev();
        } else {
            $post = $currnet.next();
        }

        if ($post.length == 0) {
            if (isLeft) {
                $post = $slider.find('.slides > div:last-child');
            } else {
                $post = $slider.find('.slides > div:first-child');
            }
        }

        $currnet.removeClass('active');
        $post.addClass('active');
    });
   
});

function a () {
    $('.slider > .side-bars > :last-child').click();
  }
  
  setInterval (a,5000);
