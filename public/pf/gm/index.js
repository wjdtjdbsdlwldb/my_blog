function Slider1__init() {
    $('.slider-1 > .owl-carousel').owlCarousel({
        dots: false,
        nav: false,
        responsive: {
            0: {
                items: 5
            }
        }
    });
}

$(function(){
    Slider1__init();
})