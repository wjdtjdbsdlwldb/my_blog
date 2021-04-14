<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SY Portfolio</title>
    <link rel="stylesheet" href="/portfolio2/index.css">
    <link rel="stylesheet" href="/portfolio2/font/font.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- owl 캐러셀 불러오기 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
    <!-- 폰트어썸 불러오기 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="/portfolio2/index.js"></script>
</head>

<body>
    <main class="main con-min-width">
        <div class="main-wrap con-min-width">
            <section class="page-1 con">
                <div class="pg1-wrap flex">
                    <div class="top-line line1"></div>
                    <div class="left-txt">
                        <p class="name1">Seo Yun Jung</br>Portfolio</p>
                        <p class="mul-des">Multiplex</br>Designer</p>
                        <p class="intro">끊임없이 변화하는 디자이너 정서윤입니다.</p>
                        <span class="character1 cht">Challenging</span>
                        <span class="cn-bar"></span>
                        <span class="character2 cht">Developing</span></br>
                        <span class="character3 cht">Responsible</span>
                        <span class="cn-bar"></span>
                        <span class="character4 cht">Positive</span>
                        <span class="block charater5 cht">Communication</span>
                    </div>
                    <div class="center-img">
                        <div class="wave">
                            <svg class="labSVG" xmlns="http://www.w3.org/2000/svg" viewBox="150 200 280 280">
                                <defs>
                                    <linearGradient id="frontGrad" gradientUnits="userSpaceOnUse" x1="300" y1="100"
                                        x2="300" y2="600">
                                        <stop offset="0.5" style="stop-color:blue" />
                                        <stop offset="0.8" style="stop-color:red" />
                                    </linearGradient>
                                    <mask id="liquidMask">
                                        <path class="liquidMask" fill="#FFFFFF"
                                            d="M337,273.9V129h-74v144.8c-37,14.7-63.1,50.8-63.1,93c0,55.2,44.8,100,100,100s100-44.8,100-100C400,324.7,373.9,288.6,337,273.9z" />
                                    </mask>
                                    <clipPath id="sphereMask">
                                        <circle fill="red" stroke="none" stroke-width="0.4957" stroke-miterlimit="10"
                                            cx="300" cy="367" r="100" />
                                    </clipPath>
                                    <filter id="goo" color-interpolation-filters="sRGB">
                                        <feGaussianBlur in="SourceGraphic" stdDeviation="7 7" result="blur" />
                                        <feColorMatrix in="blur" mode="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -7" result="cm" />

                                        <feComposite in="SourceGraphic" in2="cm" />
                                    </filter>
                                </defs>
                                <g class="liquidMaskGroup" clip-path="url(#sphereMask)">
                                    <path class="liquidBack" fill="none"
                                        d="M1199.9,365.1c-41.8,0-79.4,9.8-107.4,8.1c-38.9-2.3-54.5-16.4-83.6-19.9
                                              c-29.1-3.5-71.5,3.4-110.4,1c-28-1.7-56.4-13.7-98.2-13.7c-41.8,0-70.2,12-98.2,13.7c-38.9,2.3-81.4-4.6-110.4-1
                                              c-29.1,3.5-44.7,17.5-83.6,19.9c-28,1.7-65.7-8.2-107.5-8.2c-41.8,0-79.5,9.9-107.5,8.2c-38.9-2.3-54.5-16.3-83.6-19.9
                                              c-29.1-3.5-72,3.4-110.9,1c-28-1.7-56.7-13.7-98.7-13.7V438h1200L1199.9,365.1z" />
                                    <g class="liquidBubblesGroup" fill="url(#frontGrad)" clip-path="url(#sphereMask)">
                                        <path class="liquidFront" fill="url(#frontGrad)"
                                            d="M1199.9,329.6c-44,0-70.6,29.4-96.4,33c-36.1,5.1-70.7-14.5-106.8-9.4	c-25.8,3.7-52.4,33.3-96.4,33.3c-44,0-70.7-29.7-96.4-33.4c-36.1-5.1-70.7,14.4-106.8,9.2c-25.8-3.7-52.4-33.3-96.5-33.3	c-44,0-70.7,29.7-96.5,33.3c-36.1,5.1-70.7-14.4-106.8-9.3c-25.8,3.7-52.4,33.3-96.5,33.3c-44,0-70.7-29.7-96.5-33.3	c-36.1-5.1-71.2,14.4-107.3,9.3c-25.8-3.7-52-33.3-97-33.3V533h1200L1199.9,329.6z" />
                                        <circle class="bubble0" cx="350" cy="400" r="8" />
                                        <circle class="bubble1" cx="320" cy="400" r="6" />
                                        <circle class="bubble2" cx="300" cy="400" r="12" />
                                        <circle class="bubble3" cx="276" cy="400" r="3" />
                                        <circle class="bubble4" cx="244" cy="400" r="4" />
                                        <circle class="bubblePop0" cx="280" cy="400" r="5" />
                                        <circle class="bubblePop1" cx="310" cy="390" r="5" />
                                        <circle class="bubblePop2" cx="350" cy="410" r="5" />
                                    </g>
                                    <g class="darkBubbleGroup" fill="none" stroke="none">
                                        <circle class="darkBubble" cx="310" cy="480" r="7" />
                                        <circle class="darkBubble" cx="360" cy="480" r="5" />
                                        <circle class="darkBubble" cx="230" cy="480" r="6" />
                                        <circle class="darkBubble" cx="345" cy="480" r="3" />
                                        <circle class="darkBubble" cx="290" cy="480" r="8" />
                                        <circle class="darkBubble" cx="320" cy="480" r="2" />
                                        <circle class="darkBubble" cx="260" cy="480" r="9" />
                                    </g>
                                    <path class="pop" fill="none" stroke="none" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-miterlimit="10"
                                        d="M37.4,9c2.1-2.1,4.2-4.2,6.3-6.3 M2,44.4c2.2-2.2,4.5-4.5,6.7-6.7 M37.4,37.4c2.1,2.1,4.2,4.2,6.3,6.3 M2,2c2.2,2.2,4.5,4.5,6.7,6.7" />
                                </g>

                                <radialGradient id="shine" cx="280" cy="337" r="100" gradientUnits="userSpaceOnUse">

                                    <stop offset="0.02" style="stop-color:#fff;stop-opacity:0.2" />

                                    <stop offset="1" style="stop-color:#1B52D4;stop-opacity:0.1" />
                                </radialGradient>

                                <circle opacity="0.9" fill="url(#shine)" stroke="none" stroke-width="0.4957"
                                    stroke-miterlimit="10" cx="300" cy="367" r="100" />

                            </svg>
                        </div>
                        <div class="circle-box">
                            <div class="cir"></div>
                        </div>
                    </div>
                    <div class="shadow">
                        <div class="sha-cir"></div>
                    </div>
                    <div class="bt-txt">
                        <p class="port sy">SY Portfolio</p>
                        <p class="ui sy">UX/UI</p>
                    </div>
                    <div class="bottom-line line1"></div>
                    <div class="right-txt">
                        <p class="uni">UNI-</p>
                        <p class="side-mu side1">Multiplex</p>
                        <p class="side-ux side1">UX / UI Designer</p>
                        <p class="side-na side1">Seo Yun. J</p>
                        <p class="wise">The best way </br>
                            to predict the future is </br>
                            to create it.</p>
                    </div>
                </div>
            </section>

            <section class="page-2">
                <div class="pg2-wrap">
                    <div class="slide-box con">
                        <div class="sd-line"></div>
                        <div class="carousel-1">
                            <div class="owl-carousel owl-theme">

                                <div class="item">
                                    <div class="des-name">
                                        <h3 style="letter-spacing: -3.8px;">01</h3>
                                        <p class="sd-name">국립</br>
                                            현대미술관</br>
                                            리디자인
                                        </p>

                                        <span class="type-bar"></span>
                                        <span class="des-type">Redesign</span>
                                    </div>
                                    <span class="tool">Program : Adobe Photoshop / illustrator</span>
                                    <p class="tool">size : 1920w</p>
                                    <p class="work-infor">
                                        기존 홈페이지의 단조로운 디자인을 탈피하고자 다양한 레이아웃을
                                        사용하였습니다. 또한 더욱 효과적인 정보전달을 위하여 전체적으로
                                        모노톤을 사용하였고 미술관의 시그니처 컬러를 포인트 색상으로
                                        사용하여 정보가 더욱 부곽 될 수 있도록 디자인하였습니다.
                                    </p>
                                </div>

                                <div class="item">
                                    <div class="des-name">
                                        <h3>02</h3>
                                        <p class="sd-name">이니스프리</p>
                                        <span class="type-bar"></span>
                                        <span class="des-type">Redesign</span>
                                    </div>
                                    <span class="tool tool2">Program : Adobe Photoshop / illustrator</span>
                                    <p class="tool tool2">size : 1920w</p>
                                    <p class="work-infor work-infor2">
                                        브랜드의 아이덴티티를 느낄 수 있는 이미지를 사용하고 다양한 레이아웃으로
                                        제품을 더욱 부곽시키고 시각적 즐거움을 키웠습니다. 색상은 제품을 돋보이고자
                                        모노톤으로 사용하였고 포인트 컬러로 이니스프리 고유의 색을 톤다운 하여
                                        차분하고 모던한 느낌을 더했습니다.
                                    </p>
                                </div>

                                <div class="item">
                                    <div class="des-name">
                                        <h3>03</h3>
                                        <p class="sd-name">SUBWAY</p>
                                        <span class="type-bar"></span>
                                        <span class="des-type">Emulate</span>
                                    </div>
                                    <span class="tool tool3">Program : Adobe Photoshop / illustrator</span>
                                    <p class="tool tool3">size : 1920w</p>
                                    <p class="work-infor work-infor3">
                                        <p>코딩 연습을 위하여 서브웨이를 모작하였습니다.
                                        </p>
                                </div>

                                <div class="item">
                                    <div class="des-name">
                                        <h3>04</h3>
                                        <p class="sd-name">HANA TI</p>
                                        <span class="type-bar"></span>
                                        <span class="des-type">Emulate</span>
                                    </div>
                                    <span class="tool tool3">Program : Adobe Photoshop / illustrator</span>
                                    <p class="tool tool3">size : 1920w</p>
                                    <p class="work-infor work-infor3">
                                        <p>코딩 연습을 위하여 하나금융TI를 모작하였습니다.
                                        </p>
                                </div>

                                <div class="item">
                                    <div class="des-name">
                                        <h3>05</h3>
                                        <p class="sd-name">S.I.KOREA::</p>
                                        <span class="type-bar"></span>
                                        <span class="des-type">Emulate</span>
                                    </div>
                                    <span class="tool tool3">Program : Adobe Photoshop / illustrator</span>
                                    <p class="tool tool3">size : 1920w</p>
                                    <p class="work-infor work-infor">
                                        <p>코딩 연습을 위하여 신세계인터네셔날을 모작하였습니다.
                                        </p>
                                </div>

                                <div class="item">
                                    <div class="des-name">
                                        <h3>06</h3>
                                        <p class="sd-name">GOYANG</br> ARTS</br> CENTER</p>
                                        <span class="type-bar"></span>
                                        <span class="des-type">Emulate</span>
                                    </div>
                                    <span class="tool">Program : Adobe Photoshop / illustrator</span>
                                    <p class="tool">size : 1920w</p>
                                    <p class="work-infor">
                                        <p>코딩 연습을 위하여 고양문화재단을 모작하였습니다.
                                        </p>
                                </div>

                                <div class="item">
                                    <div class="des-name">
                                        <h3>07</h3>
                                        <p class="sd-name">PEARL</br> ABYSS</p>
                                        <span class="type-bar"></span>
                                        <span class="des-type">Emulate</span>
                                    </div>
                                    <span class="tool tool4">Program : Adobe Photoshop / illustrator</span>
                                    <p class="tool tool4">size : 1920w</p>
                                    <p class="work-infor work-infor4">
                                        <p>코딩 연습을 위하여 펄어비스를 모작하였습니다.
                                        </p>
                                </div>
                            </div>
                        </div>

                        <!-- 목업박스 슬라이드 -->
                        <div class="carousel-2" data-carousel-1-autoplay-status="Y">
                            <div class="owl-carousel owl-theme">
                                <div onclick="Carousel2__itemClicked(this);" class="item active"
                                    style="background-color:#f0f0f0;">
                                    <div class="mockup">
                                        <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/pf2/hd.png?dummy123123"
                                            alt="현대목업">
                                        <div class="mockup-txt" style="margin-left:145px;">
                                            <p>Work</p>
                                            <p>현대국립박물관 웹사이트 디자인</p>
                                            <p>Participation in work</p>
                                            <p>기획 100% / 디자인 100% / 코딩 100%</p>
                                        </div>
                                        <div class="mk-btn">
                                            <a href="/pf/hd/index.php" target="_blank" class="des-btn">Desgin</a>
                                            <a href="/pf/hd_process/index.php" target="_blank"
                                                class="pro-btn">Process</a>
                                        </div>
                                    </div>
                                </div>

                                <div onclick="Carousel2__itemClicked(this);" class="item"
                                    style="background-color:#f0f0f0;">
                                    <div class="mockup">
                                        <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/pf2/inn2.png?dummy1231234"
                                            alt="이니목업" style="width:640px; padding-top:50px;">
                                        <div class="mockup-txt" style="margin-top:10px;">
                                            <p>Work</p>
                                            <p>이니스프리 웹사이트 디자인</p>
                                            <p>Participation in work</p>
                                            <p>기획 100% / 디자인 100% / 코딩 100%</p>
                                        </div>
                                        <div class="mk-btn" style="margin-left:100px;">
                                            <a href="/pf/inn/index.php" target="_blank" class="des-btn">Desgin</a>
                                            <a href="/pf/inn_process/index.php" target="_blank"
                                                class="pro-btn">Process</a>
                                        </div>
                                    </div>
                                </div>

                                <div onclick="Carousel2__itemClicked(this);" class="item"
                                    style="background-color:#f0f0f0;">
                                    <div class="mockup">
                                        <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/pf2/sb.png?dummy123123"
                                            alt="서브웨이목업" style="width:720px;">
                                        <div class="mockup-txt" style="margin-left:145px;">
                                            <p>Work</p>
                                            <p>서브웨이 모작연습</p>
                                            <p>Participation in work</p>
                                            <p>코딩 100%</p>
                                        </div>
                                        <div class="mk-btn">
                                            <a href="/pf/subway/index.php" target="_blank" class="des-btn">Desgin</a>
                                        </div>
                                    </div>
                                </div>

                                <div onclick="Carousel2__itemClicked(this);" class="item"
                                    style="background-color:#f0f0f0;">
                                    <div class="mockup">
                                        <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/pf2/hana.png?dummy123123"
                                            alt="하나금융목업" style="width:650px; padding-top:40px;">
                                        <div class="mockup-txt" style="margin-top:10px;">
                                            <p>Work</p>
                                            <p>하나금융 모작연습</p>
                                            <p>Participation in work</p>
                                            <p>코딩 100%</p>
                                        </div>
                                        <div class="mk-btn" style="margin-left:100px;">
                                            <a href="/pf/hana/index.php" target="_blank" class="des-btn">Desgin</a>
                                        </div>
                                    </div>
                                </div>

                                <div onclick="Carousel2__itemClicked(this);" class="item"
                                    style="background-color:#f0f0f0;">
                                    <div class="mockup">
                                        <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/pf2/si.png?dummy123123"
                                            alt="신세계목업" style="width:720px;">
                                        <div class="mockup-txt" style="margin-left:145px;">
                                            <p>Work</p>
                                            <p>신세계 인터네셔날 모작연습</p>
                                            <p>Participation in work</p>
                                            <p>코딩 100%</p>
                                        </div>
                                        <div class="mk-btn">
                                            <a href="/pf/si/index.php" target="_blank" class="des-btn">Desgin</a>
                                        </div>
                                    </div>
                                </div>

                                <div onclick="Carousel2__itemClicked(this);" class="item"
                                    style="background-color:#f0f0f0;">
                                    <div class="mockup">
                                        <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/pf2/gy.png?dummy123123"
                                            alt="고양아람누리목업" style="width:650px; padding-top:40px;">
                                        <div class="mockup-txt" style="margin-top:10px;">
                                            <p>Work</p>
                                            <p>고양아람누리 모작연습</p>
                                            <p>Participation in work</p>
                                            <p>코딩 100%</p>
                                        </div>
                                        <div class="mk-btn" style="margin-left:100px;">
                                            <a href="/pf/gy/index.php" target="_blank" class="des-btn">Desgin</a>
                                        </div>
                                    </div>
                                </div>

                                <div onclick="Carousel2__itemClicked(this);" class="item"
                                    style="background-color:#f0f0f0;">
                                    <div class="mockup">
                                        <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/pf2/pa.png?dummy123123"
                                            alt="펄어비스목업" style="width:720px;">
                                        <div class="mockup-txt" style="margin-left:145px;">
                                            <p>Work</p>
                                            <p>펄어비스 모작연습</p>
                                            <p>Participation in work</p>
                                            <p>코딩 100%</p>
                                        </div>
                                        <div class="mk-btn">
                                            <a href="/pf/pa/index.php" target="_blank" class="des-btn">Desgin</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page-3 con-min-width">
                <div class="pg3-wrap">
                    <div class="about">
                        <div class="ab-left">
                            <div class="ab-title">
                                <h3 class="about-me">About me</h3>
                                <div class="ab-bar"></div>
                            </div>
                            <p class="say-box">
                                ‘어떠한 미래를 만들어 나갈것인가' 는</br>
                                본인에게 달렸다고 생각합니다.</br>
                                디자인 또한 그렇습니다.
                            </p>
                            <div class="photo-me">
                                <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/pf2/photo.png?dummy1231233"
                                    alt="">
                            </div>
                        </div>
                        <div class="ab-txt flex flex-ai-c">
                            <ul class="cht-box text-align-center">
                                <li class="nb-1">
                                    <p>01</p>
                                    <p>책임감있는</p>
                                </li>
                                <li class="nb-2">
                                    <p>02</p>
                                    <p>노력하는</p>
                                </li>
                                <li class="nb-3">
                                    <p>03</p>
                                    <p>긍정적인</p>
                                </li>
                                <li class="nb-4">
                                    <p>04</p>
                                    <p>커뮤니케이션</p>
                                </li>
                            </ul>
                            <ul>
                                <li><span class="inline-block">주어진 일을 수행함에 있어 잘 마무리 할수 있도록 끝까지 책임지고</br>
성실히 임합니다.</span></li>
                                <li><span class="inline-block">새로움과 배움에 대한 호기심과 욕심을 버리지 않고 도전하며 </br>
어제보다 오늘, 오늘보다 내일, 매일 더 나아질 수 있도록 노력합니다.</span></li>
                                <li><span class="inline-block">모든 사물과 사람을 긍정적으로 바라보려 노력하며 새로운 생각을</br>
끈임없이 시도합니다. </span></li>
                                <li><span class="inline-block">공감과 경청을 통한 원활한 커뮤니케이션으로 다양한 사람들과</br>
소통하는것을 좋아합니다. </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="footer">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, quibusdam. Recusandae nisi voluptas
                saepe! Veniam, eligendi officia voluptatum temporibus quasi sapiente commodi excepturi numquam fugit
                unde quod ipsum mollitia nobis!
                Laudantium in illum magni, mollitia repudiandae iusto non, quo sed, error omnis rerum! Inventore,
                temporibus et? Hic rem ea ipsam dolor unde magnam quia suscipit, nostrum, possimus assumenda culpa
                velit.
                Minus aut quisquam molestias ipsam voluptate in recusandae facilis quia, dolorem, ad magnam illum
                doloribus alias aperiam voluptatibus nisi quae ullam, id eum voluptatem facere deleniti nulla nobis!
                Cum, quia.
                Nesciunt suscipit aut placeat temporibus aperiam itaque laboriosam provident mollitia sit, in aliquid,
                consectetur totam fugiat inventore autem exercitationem accusantium dicta ipsa corrupti. Exercitationem
                ipsa dolore, dolores totam delectus natus?
                Aspernatur laudantium similique sequi. Officia accusamus aut corporis labore unde dolorem cumque
                inventore laudantium fugiat harum magni praesentium, cupiditate eligendi fugit sed excepturi minus
                deserunt vel. Corporis eum beatae totam!
                Dolore amet nam cupiditate eligendi. Sapiente fugit maxime corporis modi distinctio officia illum sunt
                expedita sint deleniti libero nulla pariatur, culpa eveniet? Fugit quis accusantium, ipsam quos nulla
                eligendi at!
                Perferendis omnis pariatur asperiores eos veniam corporis voluptatem quibusdam explicabo provident
                inventore unde odio voluptatibus minima quisquam laborum in laboriosam illum ipsum aspernatur, minus
                voluptate? Aspernatur ut et veritatis recusandae?
                Rerum culpa tempora excepturi vel quod maiores doloribus at possimus nesciunt voluptatem. Aspernatur at
                enim est repellat incidunt sequi, numquam eos consequuntur dignissimos! Ut eius corporis quaerat minima,
                tenetur perspiciatis.
                Ab, architecto reprehenderit? Velit culpa sapiente itaque debitis mollitia! Obcaecati quod aliquid
                dolore fugiat omnis debitis deleniti labore ex reprehenderit placeat dolorem tempora, dolores eius odit
                ipsa, voluptates doloribus ullam.
                Tempora, sed saepe. Iure, qui voluptates nulla nisi totam eligendi possimus. Corrupti, eveniet quam
                quasi magni enim nostrum. Illum reiciendis quod impedit minima consequuntur, nulla dicta commodi itaque
                incidunt obcaecati?
                Quisquam aut officia asperiores earum beatae animi cupiditate dolorum eius quos maxime dolorem aliquid
                cumque numquam vitae assumenda corporis, temporibus nemo? Dolorem doloribus officiis incidunt suscipit
                voluptas facilis aspernatur repellat!
                Quo ad debitis rerum cum possimus tempora dolores dolor, quasi distinctio quaerat impedit, veniam fuga
                ratione? Accusamus repellendus, recusandae ad quos, eius earum necessitatibus voluptas id error,
                repellat nam tenetur!
                Mollitia quae veniam earum sed laudantium perspiciatis placeat accusantium iusto animi. Doloremque
                perspiciatis pariatur, voluptatem ipsa hic delectus et debitis voluptatibus amet ipsam ea, quisquam unde
                quae alias excepturi minima.
                Minima non ut totam soluta harum illum corrupti nulla esse ipsam eaque reiciendis similique in magnam
                quos error iste perspiciatis, temporibus iusto quidem deleniti architecto. Sint nam voluptatibus laborum
                repellat.
                Dolor quia tempore facilis error labore eligendi aperiam placeat neque? Laudantium, animi deserunt
                voluptas, aliquam veritatis veniam consectetur exercitationem deleniti quibusdam sunt distinctio. Amet
                laudantium aliquid veniam dolorum delectus accusamus.
                Aut molestias, quae ipsum optio pariatur eveniet, at perferendis earum, laborum sunt quaerat sequi?
                Eaque, velit recusandae! Aliquid voluptatum quidem quia voluptate pariatur id! Tempore debitis
                repellendus commodi eos nam.
                Eveniet laudantium saepe fuga fugit rem vitae inventore velit. Explicabo nulla quasi voluptas, sequi
                voluptatum similique nam molestias sunt odit doloribus pariatur ex in iure tempore dignissimos aperiam
                nesciunt. Reiciendis!
                Nihil error expedita quidem nulla eveniet accusantium reprehenderit sequi fuga, facilis a at possimus,
                amet consectetur suscipit veniam incidunt soluta laboriosam? Distinctio laborum obcaecati exercitationem
                iusto asperiores beatae facilis nemo.
                Sed incidunt ullam aut illum saepe animi, totam dignissimos cumque dolorem nisi. Laboriosam numquam
                temporibus, placeat, rem harum, est fugit consectetur error veniam modi architecto delectus doloremque
                impedit ad libero.
                Rerum aperiam maxime, blanditiis doloremque consequuntur nam laboriosam vitae eveniet quidem nihil eius
                deserunt repellat, veniam inventore omnis ratione tempora natus incidunt facilis enim esse temporibus.
                Unde deserunt illo maxime.
            </footer>
        </div>
    </main>
</body>

</html>