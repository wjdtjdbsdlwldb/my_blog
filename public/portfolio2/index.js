function ActiveOnVisible__init() {
    $(window).resize(_.debounce(ActiveOnVisible__initOffset, 500));
    ActiveOnVisible__initOffset();

    $(window).scroll(_.debounce(ActiveOnVisible__checkAndActive, 50));
    ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__initOffset() {
    $('.active-on-visible:not(.actived)').each(function (index, node) {
        var $node = $(node);

        var offsetTop = $node.offset().top;
        $node.attr('data-active-on-visible-offsetTop', offsetTop);

        if (!$node.attr('data-active-on-visible-diff-y')) {
            $node.attr('data-active-on-visible-diff-y', '0');
        }

        if (!$node.attr('data-active-on-visible-delay')) {
            $node.attr('data-active-on-visible-delay', '0');
        }

        var diffY = $node.attr('data-active-on-visible-diff-y');
        var delay = $node.attr('data-active-on-visible-delay');

        if (diffY.substr(-2, 2) == 'vh') {
            diffY = parseInt(diffY);

            diffY = diffY * $(window).height() / 100;
        } else if (diffY.substr(-1, 1) == '%') {
            diffY = parseInt(diffY);

            diffY = diffY * $node.height() / 100;
        } else {
            diffY = parseInt(diffY);
        }

        $node.data('data-active-on-visible-diff-y', diffY);
        $node.data('data-active-on-visible-delay', delay);
    });

    ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__checkAndActive() {
    $('.active-on-visible:not(.actived)').each(function (index, node) {
        var $node = $(node);

        var offsetTop = $node.attr('data-active-on-visible-offsetTop') * 1;
        var diffY = parseInt($node.data('data-active-on-visible-diff-y'));
        var delay = parseInt($node.data('data-active-on-visible-delay'));

        var callbackFuncName = $node.attr('data-active-on-visible-callback-func-name');

        var scrollTop = $(window).scrollTop();
        var windowHeight = $(window).height();
        var nodeHeight = $node.height();

        if (scrollTop + windowHeight + diffY > offsetTop) {
            setTimeout(function () {
                $node.addClass('active');

                if ($node.hasClass('active-only-one')) {
                    $node.addClass('actived');
                }

                if (window[callbackFuncName]) {
                    window[callbackFuncName]($node);
                }
            }, delay);
        } else {
            $node.removeClass('active');
        }
    });
}


// 슬라이드

function Carousel1__onTranslated() {
    $('.carousel-1 > .owl-carousel').trigger('play.owl.autoplay');

    $('.carousel-1').data('carousel-1-autoplay-status', 'Y');

    var no = $('.carousel-1 .owl-item.active.center > .item').attr('data-no') * 1;

    $('.carousel-2 > .owl-carousel').trigger('to.owl.carousel', [no - 1]);
    $('.carousel-2 .owl-item > .item.active').removeClass('active');
    $('.carousel-2 .owl-item > .item[data-no="' + no + '"]').addClass('active');
}

function Carousel1__init() {
    // 데이터 개수 적어두기
    var totalItemNo = $('.carousel-1 .item').length;
    $('.carousel-1').data('total-items', totalItemNo);

    // 각 아이템에 번호 매기기
    $('.carousel-1 .item').each(function (index, node) {
        $(node).attr('data-no', index + 1);
    });

    $('.carousel-1 > .owl-carousel').owlCarousel({
        autoplay: false, // 오토 플레이
        loop: true, // 끝에서 다시 처음으로 시작
        dots: false,
        margin: 0,
        center: true,
        nav: true,
        navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            }
        },
        autoplayHoverPause: false,
        /* 필수 */
        onTranslated: Carousel1__onTranslated,
    });

    $('.carousel-1 .play').on('click', function () {
        $('.carousel-1 > .owl-carousel').trigger('play.owl.autoplay');

        $('.carousel-1').data('carousel-1-autoplay-status', 'Y');
    });

    $('.carousel-1 .stop').on('click', function () {
        $('.carousel-1 > .owl-carousel').trigger('stop.owl.autoplay');

        $('.carousel-1').data('carousel-1-autoplay-status', 'N');
    });
}

/* 캐러셀 2 */
function Carousel2__itemClicked(el) {
    var $el = $(el);

    var no = $el.attr('data-no') * 1;
    var currentNo = $('.carousel-1 .owl-item.active > .item').attr('data-no') * 1;

    console.log('no : ' + no);
    console.log('currentNo : ' + currentNo);

    if (no != currentNo) {
        $('.carousel-1 > .owl-carousel').trigger('to.owl.carousel', [no - 1, 500]);
    }
}

function Carousel2__onTranslated() {
    $('.carousel-2 > .owl-carousel').trigger('play.owl.autoplay');

    $('.carousel-2').data('carousel-2-autoplay-status', 'Y');
}

function Carousel2__init() {
    // 데이터 개수 적어두기
    var totalItemNo = $('.carousel-2 .item').length;
    $('.carousel-2').data('total-items', totalItemNo);

    // 각 아이템에 번호 매기기
    $('.carousel-2 .item').each(function (index, node) {
        $(node).attr('data-no', index + 1);
    });

    $('.carousel-2 > .owl-carousel').owlCarousel({
        autoplay: false, // 오토 플레이
        loop: true, // 끝에서 다시 처음으로 시작
        margin: 0,
        dots: false,
        nav: false,
        mouseDrag: false,
        center: true,
        navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            }
        },
        autoplayHoverPause: false,
        /* 필수 */
        onTranslated: Carousel2__onTranslated,
    });

    $('.carousel-2 .play').on('click', function () {
        $('.carousel-2 > .owl-carousel').trigger('play.owl.autoplay');

        $('.carousel-2').data('carousel-2-autoplay-status', 'Y');
    });

    $('.carousel-2 .stop').on('click', function () {
        $('.carousel-2 > .owl-carousel').trigger('stop.owl.autoplay');

        $('.carousel-2').data('carousel-2-autoplay-status', 'N');
    });
}


function sendEmailFormSubmit(form) {
    if (form.receiverName.value.length == 0) {
        alert('폼안에 receiverName 의 value 를 입력해주세요.');
        return false;
    }

    if (form.receiverEmail.value.length == 0) {
        alert('폼안에 receiverEmail 의 value 를 입력해주세요.');
        return false;
    }

    form.senderName.value = form.senderName.value.trim();

    if (form.senderName.value.length == 0) {
        alert('당신의 이름을 입력해주세요.');
        form.senderName.focus();
        return false;
    }

    form.senderEmail.value = form.senderEmail.value.trim();

    if (form.senderEmail.value.length == 0) {
        alert('당신의 이메일을 입력해주세요.');
        form.senderEmail.focus();
        return false;
    }

    form.body.value = form.body.value.trim();

    if (form.body.value.length == 0) {
        alert('내용을 입력해주세요.');
        form.body.focus();
        return false;
    }

    var senderName = form.senderName.value;
    var senderEmail = form.senderEmail.value;
    var title = '[이력서 보고 연락 드립니다]';
    var body = nl2br(form.body.value);
    var receiverName = form.receiverName.value;
    var receiverEmail = form.receiverEmail.value;

    var url = 'https://email.oa.gg/doSendEmail2.php?senderName=' + senderName + '&senderEmail=' + senderEmail + '&receiverName=' + receiverName + '&receiverEmail=' + receiverEmail + '&title=' + title + '&body=' + body;

    //console.log("URL : " + url);

    var head = document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = url;
    head.appendChild(script);
}

function nl2br(str) {
    return str.replace(/\n/g, "<br />");
}

function Email__callback(data) {
    if (data.resultCode.substr(0, 2) == 'S-') {
        document.sendEmailForm.reset();
    }

    alert(data.msg);
}



$(function () {
    ActiveOnVisible__init();

})

$(function () {
    Carousel1__init();
    Carousel2__init();
})