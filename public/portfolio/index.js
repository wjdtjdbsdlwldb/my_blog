var $html = $('html');

function Page__logoAnimationPhase(no) {
  var lastNo = $html.attr('data-current-phase');
  $html.attr('data-last-phase', lastNo);
  $html.attr('data-current-phase', no);
  $html.removeClass('phase-' + lastNo);
  $html.addClass('phase-' + no);
}

$('.btn-0').click(function () {
  var no = 0;

});

var Page__introAnimationDuration = 1000;

function Page__init_() {
  new fullpage('#fullpage', {
    sectionsColor: [],
    verticalCentered: false,
    anchors: ['anchor1', 'anchor2', 'anchor3', 'anchor4', 'anchor5'],
    menu: '#menu',
    onLeave: function (origin, destination, direction) {
      Page__logoAnimationPhase(destination.index + 1);
    },
    navigation: true,
    navigationPosition: 'left',
  });
}

function Page__init() {
  Page__logoAnimationPhase(0);
  $('.line-box').css('visibility', 'visible');
  setTimeout(function () {
    Page__logoAnimationPhase(1);
  }, 600);
  setTimeout(Page__init_, Page__introAnimationDuration);
}


function slider() {
  $('.sliders1 > .owl-carousel').owlCarousel({
    navSpeed: 150,
    loop: false,
    margin: 10,
    nav: false,
    dots: false,
    slideBy: 4,
    mouseDrag: true,

    responsive: {
      0: {
        items: 5
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
  var kor = $el.attr('data-kor');

  $('.img-box-1').empty().append("<a href='" + link + "' target='_blank' style=\"background-image:url(\'" + url + "\')\"></a>");
  $('.txt-box-1').empty().append("<h1>" + no + "</h1>");
  $('.txt-box-2').empty().append("<h4>" + tx + "</h4>");
  $('.txt-box-3').empty().append("<h3>" + kor + "</h3>");
  $('.txt-box-4').empty().append("<h3>" + name + "</h3>");
  $('.txt-box-5').empty().append("<h3>" + site + "</h3>");
}

function Slider1__init() {
  $('.slider-1 > .owl-carousel').owlCarousel({
    dots: false,
    nav: false,
    mouseDrag: true,
    autoplay: true,
    autoplayTimeout: 10000,
    loop: true,
    margin: 2,
    stopOnHover: true,

    responsive: {
      0: {
        items: 4
      }
    }
  });
}

function border_1() {
  $('.slider .item').click(function () {
    var $border = $('.slider .item.border');

    $border.removeClass('border');
    $(this).addClass('border');
  })
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

function LightBox() {
  lightbox.option({
    resizeDuration: 200,
    wrapAround: true,
    disableScrolling: false,
    fitImagesInViewport: false
  })
}


$(function () {
  Page__init();

});

$(function () {
  slider();
  Slider1__init();
  border_1();
  Slider1__itemClick();
  $('.item-1').click();
  LightBox();
});
