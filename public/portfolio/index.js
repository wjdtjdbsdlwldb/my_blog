var $html = $('html');

function Page__logoAnimationPhase(no) {
  var lastNo = $html.attr('data-current-phase');
  $html.attr('data-last-phase', lastNo);
  $html.attr('data-current-phase', no);
  $html.removeClass('phase-' + lastNo);
  $html.addClass('phase-' + no);
}

$('.btn-0').click(function() {
  var no = 0;

});

var Page__introAnimationDuration = 2000;

function Page__init_() {  
  new fullpage('#fullpage', {
    sectionsColor: [],
    verticalCentered: false,
    anchors: ['anchor1', 'anchor2', 'anchor3', 'anchor4', 'anchor5'],
    menu: '#menu',
    onLeave: function(origin, destination, direction){
      Page__logoAnimationPhase(destination.index + 1);
    },
    navigation: true,
    navigationPosition: 'left',
  });
}

function Page__init() {
  Page__logoAnimationPhase(0);
  setTimeout(function() {
    Page__logoAnimationPhase(1);
  }, 100);
  setTimeout(Page__init_, Page__introAnimationDuration);
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

function border_1() {
  $('.slider .item').click(function(){
    var $border = $('.slider .item.border');

    $border.removeClass('border');
    $(this).addClass('border');
  })
}

function Lightbox() {
  lightbox.option({
    resizeDuration: 200,
    wrapAround: true,
    disableScrolling: false,
    fitImagesInViewport:false
  })
  
}

$(function(){
  Page__init();  
  Slider1__init();
  border_1();
});

$(function(){
  slider();
  Slider1__itemClick(el);
  $('.item-1').click();
});




