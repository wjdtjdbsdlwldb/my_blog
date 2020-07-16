console.clear();


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

function sliderBtn() {
  $(".btn-box > .dot").click(function () {
    var $active = $(".slider > .btn-box").find(".active");
    var $click = $(this);
    var index = $click.index();
    var $next = $active.next();


    $active.removeClass("active");
    $click.addClass("active");

    $(".slider > .slides > li > a >div").css("margin-left", -1920 * index);
  });
}

setInterval(function a() {
  var $active = $(".slider-menu > .btn-box").find(".active");
  var $click = $(this);
  var index = $click.index();
  var $next = $active.next();

  if ($next.length == 0) {
    $('.slider-menu > .btn-box > div:first-child').click();
  } else {
    $next.click();
  }
}, 5000);

function MySlider1__init() {
  $('.menu-slider > .owl-carousel').owlCarousel({
    responsive:{
      0:{
        items:4
      }
    },
    loop:false,
    dots:false,
    mouseDrag:false,
    nav:true
  });
}



$(function () {
  sliderBtn();
  TopBar__init();
  MySlider1__init();
})
