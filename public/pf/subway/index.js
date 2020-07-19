function TopBar__init() {
  var $topBar = $(".top-bar");
  var $MenuBox = $(".top-bar > .menu-box");
  var $ListBox = $(".top-bar .menu-box > ul");

  $topBar.find(".menu-box > ul").mouseenter(function () {
    $ListBox.addClass("bg-active");
    $MenuBox.addClass("bg-active");
  });

  $ListBox.mouseleave(function () {
    $ListBox.removeClass("bg-active");
    $MenuBox.removeClass("bg-active");
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
    $(".slider-menu > .btn-box > div:first-child").click();
  } else {
    $next.click();
  }
}, 5000);

function MiniBtn() {
  $(".subway-bottom >.mini-bn > .mini-slider > .button > .dots").click(function () {
    var $active2 = $(".subway-bottom > .mini-bn > .mini-slider > .button ").find(".active");
    var $click = $(this);
    var index = $click.index();
    var $next2 = $active2.next();

    $active2.removeClass("active");
    $click.addClass("active");

    $(".subway-bottom >.mini-bn > .mini-slider > .img-box >.box").css("margin-left", -270 * index);
  });
}

setInterval(function a() {
  var $active2 = $(".subway-bottom .mini-bn > .mini-slider > .button").find(".active");
  var $click = $(this);
  var index = $click.index();
  var $next2 = $active2.next();

});


function MenuSlider__init() {
  $(".menu-slider > .owl-carousel").owlCarousel({
    responsive: {
      0: {
        items: 4
      }
    },
    loop: false,
    dots: false,
    mouseDrag: false,
    nav: false
  });
}

function miniclick() {
  $(".mu-slider-btn > .next").click(function () {
    $(".owl-carousel").trigger("next.owl.carousel");
  });

  $(".mu-slider-btn > .prev").click(function () {
    $(".owl-carousel").trigger("prev.owl.carousel");
  });
}


$(function () {
  sliderBtn();
  TopBar__init();
  MenuSlider__init();
  MiniBtn();
  miniclick();
});
