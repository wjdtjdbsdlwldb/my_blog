function Slider1__init() {
    $('.slider-1 > .owl-carousel').owlCarousel({
        responsive: {
            0: {
                items: 5
            }
        },
        dots: false,
        nav: true
    });
}
Slider1__init();