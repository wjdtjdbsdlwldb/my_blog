function FullPage() {
  var myFullpage = new fullpage('#fullpage', {
      scrollingSpeed: 1000,
      scrollBar: false,
      anchors: ['anchor1', 'anchor2', 'anchor3', 'anchor4', 'anchor5'],
      verticalCentered: false,
      navigation: true,
      navigationPosition: 'left'
  });
}

function slider() {
  $('.carousel-1 > .owl-carousel').owlCarousel({
    navSpeed:150,
    loop:false,
    margin:10,
    nav:false,
    dots:false,
    slideBy:4,
    mouseDrag:true,
  
    responsive:{
        0:{
            items:5
        }
    }
  });
}
 
function Slider1__itemClick(el) {
  var $el = $(el);
  var url = $el.attr('data-img-url');
  var link = $el.attr('data-link-url');
  var no = $el.attr('data-no');
  var tx = $el.attr('data-tx');
  var name = $el.attr('data-name');
  var site = $el.attr('data-site');
  
  $('.img-box-1').empty().append("<a href='" + link + "' target='_blank'><img src='" + url + "'></a>");
  $('.txt-box-1').empty().append("<h1>" + no + "</h1>");
  $('.txt-box-2').empty().append("<h4>" + tx + "</h4>");
  $('.txt-box-3').empty().append("<h3>" + name + "</h3>");
  $('.txt-box-4').empty().append("<h3>" + site + "</h3>");
}

function Slider1__init() {
  $('.slider-1 > .owl-carousel').owlCarousel({
    dots: false,
    nav: false,
    mouseDrag:true,
    autoplay:false,
    autoplayTimeout:false,
    margin:43,
    
    responsive: {
      0: {
        items: 3
      }
    }
  });
}


$(function(){
  FullPage();
  slider();
  Slider1__itemClick(el);
});

$(function(){
  Slider1__init();
})