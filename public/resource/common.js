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

});
