function MobileSideBar__toggle() {
    var $btn = $('.btn-toggle-mobile-side-bar');

    if ($btn.hasClass('active')) {
        $btn.removeClass('active');
        $('.mobile-side-bar').removeClass('active');
        $('.side-bg-box').removeClass('active');
        $('html').removeClass('active');
        
    } else {
        $btn.addClass('active');
        $('.mobile-side-bar').addClass('active');
        $('.side-bg-box').addClass('active');
        $('html').addClass('active');
        
    }
}

function MobileSideBar__init() {
    $('.btn-toggle-mobile-side-bar, .side-bg-box').click(MobileSideBar__toggle);
}

$(function () {
    MobileSideBar__init();

});

