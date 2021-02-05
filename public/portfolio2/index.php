<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SY Portfolio</title>
    <link rel="stylesheet" href="/portfolio2/index.css">
    <link rel="stylesheet" href="/portfolio2/font/font.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.20/lodash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        <div class="con2">
            <header class="header con">
                <div class="top-wrap">
                    <nav class="menu-box">
                        <ul class="flex flex-ai-c flex-jc-end">
                            <li><a href="#about" class="block">About</a></li>
                            <li><a href="#slide" class="block">Project</a></li>
                            <li><a href="#contact" class="block">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <section class="intro-bg con">
                <div class="figure">
                    <div class="square"></div>
                    <div class="long-sq">
                        <p class="line line1"></p>
                        <p class="line"></p>
                        <p class="line line3"></p>
                    </div>
                    <div class="circle"></div>
                </div>
                <div class="txt-box">
                    <p>Jung seo yun</p>
                    <div class="spec-txt flex">
                        <h2>S</h2>
                        <h2>p</h2>
                        <h2>e</h2>
                        <h2>c</h2>
                        <h2>i</h2>
                        <h2>a</h2>
                        <h2>l</h2>
                        <h2>i</h2>
                        <h2>z</h2>
                        <h2>e</h2>
                        <h2>d</h2>
                    </div>
                    <h3>Designer</h3>
                </div>
            </section>

            <section class="slide-box" id="slide">
                <div class="slide-wrap">
                    <div class="slider">
                        <div class="carousel-1">
                            <div class="owl-carousel owl-theme">
                                <div class="item" style="background-color:#EA6746;">
                                </div>
                                <div class="item" style="background-color:#03231b;">
                                </div>
                                <div class="item" style="background-color:#ffce32;">
                                </div>
                                <div class="item" style="background-color:#ec5317;">
                                </div>
                                <div class="item" style="background-color:#afcbff;">
                                </div>
                                <div class="item" style="background-color:#D1A8EA;">
                                </div>
                                <div class="item" style="background-color:#011C26;">
                                </div>
                                
                            </div>
                            <div class="copy">Copyright © 2020 by J. Seo Yun All Rights Reserved</div>
                        </div>

                        <div class="carousel-2 active-on-visible" data-active-on-visible-diff-y="-60%"
                            data-carousel-1-autoplay-status="Y">
                            <div class="owl-carousel owl-theme">
                                <div onclick="Carousel2__itemClicked(this);" class="item active"
                                    style="border:5px solid #EA6746; background-image:url(https://wjdtjdbsdlwldb.github.io/img1/blog/article/pf2/hd.png?dummy123123)">
                                    <div class="sd-text">
                                        <div class="border-top"></div>
                                        <h1>01</h1>
                                        <h2 class="inline-block">국립현대미술관</h2>
                                        <span>_ &ensp; Redesign</span>
                                        <p>기존 홈페이지의 단조로운 디자인을 탈피하고자 다양한 레이아웃을
                                            사용하였습니다.<br> 또한 더욱 효과적인 정보전달을 위하여 전체적으로
                                            모노톤을 사용하였고 <br>미술관의 시그니처 컬러를 포인트 색상으로
                                            사용하여 정보가 더욱 <br> 부곽 될 수 있도록 디자인하였습니다.</p>
                                        <div class="program active-on-visible" data-active-on-visible-diff-y="-600">
                                            <p>Program : Adobe Photoshop/illustrator</p>
                                            <p>size : 1920w</p>
                                        </div>
                                        <a href="/pf/hd/index.php" target="_blank" class="inline-block btn des">
                                            <span>Design</span>
                                            <div class="transition"></div>
                                        </a>
                                        <a href="/pf/hd_process/index.php" target="_blank" class="inline-block btn">
                                            <span>Process</span>
                                            <div class="transition"></div>
                                        </a>
                                    </div>
                                </div>

                                <div onclick="Carousel2__itemClicked(this);" class="item item-2"
                                    style="border: 4px solid #03231b;  background-image:url(https://wjdtjdbsdlwldb.github.io/img1/blog/article/pf2/inn2.png?dummy1231234)">
                                    <div class="sd-text">
                                        <div class="border-top"></div>
                                        <h1>02</h1>
                                        <h2 class="inline-block">이니스프리</h2>
                                        <span>_ &ensp; Redesign</span>
                                        <p>브랜드의 아이덴티티를 느낄 수 있는 이미지를 사용하고 다양한 레이아웃으로<br>
                                            제품을 더욱 부곽시키고 시각적 즐거움을 키웠습니다. 색상은 제품을 돋보이고자<br>
                                            모노톤으로 사용하였고 포인트 컬러로 이니스프리 고유의 색을 톤다운 하여<br>
                                            차분하고 모던한 느낌을 더했습니다.
                                        </p>
                                        <div class="program">
                                            <p>Program : Adobe Photoshop/illustrator</p>
                                            <p>size : 1920w</p>
                                        </div>
                                        <a href="/pf/inn/index.php" target="_blank" class="inline-block btn des">
                                            <span>Design</span>
                                            <div class="transition"></div>
                                        </a>
                                        <a href="/pf/inn_process/index.php" target="_blank" class="inline-block btn">
                                            <span>Process</span>
                                            <div class="transition"></div>
                                        </a>
                                    </div>
                                </div>

                                <div onclick="Carousel2__itemClicked(this);" class="item"
                                    style="border: 4px solid #ffce32; background-color:#009223; background-image:url(https://wjdtjdbsdlwldb.github.io/img1/blog/article/pf2/sb.png?dummy123123);">
                                    <div class="sd-text">
                                        <div class="border-top"></div>
                                        <h1>03</h1>
                                        <h2 class="inline-block">SUBWAY</h2>
                                        <span>_ &ensp; Emulate</span>
                                        <p>코딩 연습을 위하여 서브웨이를 모작하였습니다.
                                        </p>
                                        <div class="program">
                                            <p>size : 1920w</p>
                                        </div>
                                        <a href="/pf/subway/index.php" target="_blank" class="inline-block btn des">
                                            <span>Design</span>
                                            <div class="transition"></div>
                                        </a>
                                    </div>
                                </div>

                                <div onclick="Carousel2__itemClicked(this);" class="item item-2"
                                    style="border: 4px solid #ec5317; background-color:#66240A; background-image:url(https://wjdtjdbsdlwldb.github.io/img1/blog/article/pf2/hana.png?dummy123123);">
                                    <div class="sd-text">
                                        <div class="border-top"></div>
                                        <h1>04</h1>
                                        <h2 class="inline-block">HANA TI</h2>
                                        <span>_ &ensp; Emulate</span>
                                        <p>코딩 연습을 위하여 하나금융TI를 모작하였습니다.
                                        </p>
                                        <div class="program">
                                            <p>size : 1920w</p>
                                        </div>
                                        <a href="/pf/hana/index.php" target="_blank" class="inline-block btn des">
                                            <span>Design</span>
                                            <div class="transition"></div>
                                        </a>
                                    </div>
                                </div>

                                <div onclick="Carousel2__itemClicked(this);" class="item"
                                    style="border: 4px solid #afcbff; background-color:#283E66; background-image:url(https://wjdtjdbsdlwldb.github.io/img1/blog/article/pf2/si.png?dummy123123);">
                                    <div class="sd-text">
                                        <div class="border-top"></div>
                                        <h1>05</h1>
                                        <h2 class="inline-block">S.I.KOREA::</h2>
                                        <span>_ &ensp; Emulate</span>
                                        <p>코딩 연습을 위하여 신세계인터네셔날을 모작하였습니다.
                                        </p>
                                        <div class="program">
                                            <p>size : 1920w</p>
                                        </div>
                                        <a href="/pf/si/index.php" target="_blank" class="inline-block btn des">
                                            <span>Design</span>
                                            <div class="transition"></div>
                                        </a>
                                    </div>
                                </div>
                                
                                <div onclick="Carousel2__itemClicked(this);" class="item item-2"
                                    style="border: 4px solid #D1A8EA;  background-color:#4F2B66; background-image:url(https://wjdtjdbsdlwldb.github.io/img1/blog/article/pf2/gy.png?dummy123123);">
                                    <div class="sd-text">
                                        <div class="border-top"></div>
                                        <h1>06</h1>
                                        <h2 class="inline-block">GOYANG ARTS CENTER</h2>
                                        <span>_ &ensp; Emulate</span>
                                        <p>코딩 연습을 위하여 고양문화재단을 모작하였습니다.
                                        </p>
                                        <div class="program">
                                            <p>size : 1920w</p>
                                        </div>
                                        <a href="/pf/gy/index.php" target="_blank" class="inline-block btn des">
                                            <span>Design</span>
                                            <div class="transition"></div>
                                        </a>
                                    </div>
                                </div>

                                <div onclick="Carousel2__itemClicked(this);" class="item"
                                    style="border: 4px solid #011C26;  background-color:#173840; background-image:url(https://wjdtjdbsdlwldb.github.io/img1/blog/article/pf2/pa.png?dummy123123);">
                                    <div class="sd-text">
                                        <div class="border-top"></div>
                                        <h1>08</h1>
                                        <h2 class="inline-block">PEARL ABYSS</h2>
                                        <span>_ &ensp; Emulate</span>
                                        <p>코딩 연습을 위하여 펄어비스를 모작하였습니다.
                                        </p>
                                        <div class="program">
                                            <p>size : 1920w</p>
                                        </div>
                                        <a href="/pf/gy/index.php" target="_blank" class="inline-block btn des">
                                            <span>Design</span>
                                            <div class="transition"></div>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </section>

            <section class="about con" id="about">
                <div class="ab-wrap">
                    <div class="ab-bg"
                        style="background-image:url(https://wjdtjdbsdlwldb.github.io/img1/blog/article/pf2/about.jpg?dummy123123)">
                        <h2>About me</h2>
                    </div>
                    <div class="box-line flex active-on-visible" data-active-on-visible-diff-y="-600">
                        <div class="skill active-on-visible" data-active-on-visible-diff-y="-750">
                            <h3>Skills</h3>
                            <p class="first">Photoshop</p>
                            <p>Illustration</p>
                            <p>Html</p>
                            <p>Css</p>
                            <p>JQuary</p>
                        </div>
                        <div class="my-intro">
                            <div class="intro-txt">
                                <h3>The best way to predict<br>
                                    the future is to create it.</h3>
                                <div class="bar active-on-visible" data-active-on-visible-diff-y="-450"></div>
                                <div class="story">
                                    <p>저는 '어떠한 미래를 만들어 나갈것인가'는 본인에게 달렸다고 생각합니다.
                                        <br>디자인 또한 그렇습니다. </p>
                                    <p>디자이너는 새로운 것과 트렌드를 읽고 적용하는 것이 중요하다고 생각합니다.<br> 저는 다양한 장소에서 새로운 사람들을 만나는 것을
                                        좋아합니다.<br>
                                        모든
                                        사물, 사람을 긍정적으로 바라보고 새로운 생각을 끈임없이 시도합니다.
                                    </p>
                                    <p>인생에서도, 디자인에서도 끈임없이 시도하고 발전하여<br> 즐거운 미래를 만드는 에너지 넘치는 디자이너가 되고싶습니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="contact" id="contact">
                <div class="ct-wrap">
                    <div class="ct-box con text-align-center">
                        <div class="ct-tit">
                            <h1 class="active-on-visible" data-active-on-visible-diff-y="-700">CONTACT ME</h1>
                        </div>
                        <form action onsubmit="sendEmailFormSubmit(this); return false;" name="sendEmailForm">
                            <input type="hidden" name="receiverName" value="정서윤">
                            <input type="hidden" name="receiverEmail" value="jsy06101126@gmail.com">
                            <div class="input-box inline-block nm"><input class="name-sy in" type="text"
                                    name="senderName" placeholder="당신의 이름을 입력해주세요."></div>
                            <div class="input-box inline-block"><input class="mail-g in" type="email" name="senderEmail"
                                    placeholder="당신의 이메일을 입력해주세요."></div>
                            <div class="text-body">
                                <textarea name="body" placeholder="내용을 입력해주세요."></textarea>
                            </div>
                            <div class="button">
                                <input type="submit" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <footer class="icon-box">
                <nav class="ft-wrap con">
                    <ul class="flex">
                        <li class="email">
                            <p class="icon"></p>
                            <p>jsy06101126@gmail.com</p>
                        </li>
                        <li class="kakao">
                            <p class="icon"></p>
                            <p>wjdtjdbsdlwldb</p>
                        </li>
                    </ul>
                </nav>
                <h1 class="active-on-visible" data-active-on-visible-diff-y="-750">Thank you.</h1>
                <div class="remark">본 페이지는 상업적 목적이 아닌 개인 포트폴리오용으로 제작되었습니다.</div>
            </footer>
        </div>
    </main>
</body>

</html>