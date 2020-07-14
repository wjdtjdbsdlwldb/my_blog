function TopBar__init() {
    var $topBar = $('.top-bar');
    var $MenuBox = $('.top-bar > .menu-box');
    var $ListBox = $('.top-bar .menu-box > ul');


    $topBar.find('.menu-box > ul').mouseenter(function () {
        $ListBox.addClass('bg-active');
        $MenuBox.addClass('bg-active');
    });

    $ListBox.mouseleave(function () {
        $ListBox.removeClass('bg-active');
        $MenuBox.removeClass('bg-active');
    });

}


$(function () {
    TopBar__init();
})