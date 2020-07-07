var bnTop = $('.slider').offset().top;
var bnHeight = $('.slider').outerHeight();
var bnBottom = bnTop + bnHeight;
var didScroll;

$('.top-bar').addClass('removeBg');

$(window).scroll(function(){
    var st = $(this).scrollTop();

    if( st > bnBottom ) {
        $('.top-bar').addClass('addBg');
    }
    else {
        $('.top-bar').removeClass('addBg');
    }
});