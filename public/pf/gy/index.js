// 메인 비디오 슬라이드

$(document).ready(function() {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        loop:true,
        // spaceBetween: 50,
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', },
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});
