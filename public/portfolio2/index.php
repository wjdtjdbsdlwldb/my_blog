<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sy Portfolio</title>
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
                            <li><a href="#" class="block">Contact</a></li>
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
                                <div class="item" style="background-color:#0BA36C;">
                                    <!-- <div class="sd-text">
                                        <div class="border-top"></div>
                                        <h1>01</h1>
                                        <h2 class="inline-block">국립현대미술관</h2>
                                        <span>_ &ensp; Redesign</span>
                                        <p>기존 홈페이지의 단조로운 디자인을 탈피하고자 다양한 레이아웃을
                                            사용하였습니다.<br> 또한 더욱 효과적인 정보전달을 위하여 전체적으로
                                            모노톤을 사용하였고 <br>미술관의 시그니처 컬러를 포인트 색상으로
                                            사용하여 정보가 더욱 <br> 부곽 될 수 있도록 디자인하였습니다.</p>
                                        <div class="border-bt"></div>
                                        <a href="/pf/hd/index.php" class="inline-block des">Design</a>
                                        <a href="#" class="inline-block">Process</a>

                                    </div> -->
                                </div>
                                <div class="item" style="background-color:green;">
                                    <h1>2</h1>
                                </div>
                                <div class="item" style="background-color:blue;">
                                    <h1>3</h1>
                                </div>
                                <div class="item" style="background-color:pink;">
                                    <h1>4</h1>
                                </div>
                                <div class="item" style="background-color:darkred;">
                                    <h1>5</h1>
                                </div>
                                <div class="item" style="background-color:darkgreen;">
                                    <h1>6</h1>
                                </div>
                                <div class="item" style="background-color:darkblue;">
                                    <h1>7</h1>
                                </div>
                                <div class="item" style="background-color:gold;">
                                    <h1>8</h1>
                                </div>
                            </div>
                            <div class="deco">Design by Jung Seo yun</div>
                        </div>

                        <div class="carousel-2 " data-carousel-1-autoplay-status="Y">
                            <div class="owl-carousel owl-theme">
                                <div onclick="Carousel2__itemClicked(this);" class="item active"
                                    style="border:5px solid #0BA36C; background-image:url(https://wjdtjdbsdlwldb.github.io/img1/blog/article/pf2/hd.png?dummy123123)">
                                    <div class="sd-text">
                                        <div class="border-top"></div>
                                        <h1>01</h1>
                                        <h2 class="inline-block">국립현대미술관</h2>
                                        <span>_ &ensp; Redesign</span>
                                        <p>기존 홈페이지의 단조로운 디자인을 탈피하고자 다양한 레이아웃을
                                            사용하였습니다.<br> 또한 더욱 효과적인 정보전달을 위하여 전체적으로
                                            모노톤을 사용하였고 <br>미술관의 시그니처 컬러를 포인트 색상으로
                                            사용하여 정보가 더욱 <br> 부곽 될 수 있도록 디자인하였습니다.</p>
                                        <div class="border-bt"></div>
                                        <a href="/pf/hd/index.php" target="_blank" class="inline-block btn des">
                                            <span>Design</span>
                                            <div class="transition"></div>
                                        </a>
                                        <a href="#" target="_blank" class="inline-block btn">
                                            <span>Process</span>
                                            <div class="transition"></div>

                                        </a>

                                    </div>
                                </div>
                                <div onclick="Carousel2__itemClicked(this);" class="item"
                                    style="border: 4px solid pink;">
                                    <h1>2</h1>
                                </div>
                                <div onclick="Carousel2__itemClicked(this);" class="item"
                                    style="border: 4px solid blue;">
                                    <h1>3</h1>
                                </div>
                                <div onclick="Carousel2__itemClicked(this);" class="item"
                                    style="border: 4px solid puple;">
                                    <h1>4</h1>
                                </div>
                                <div onclick="Carousel2__itemClicked(this);" class="item"
                                    style="border: 4px solid orange;">
                                    <h1>5</h1>
                                </div>
                                <div onclick="Carousel2__itemClicked(this);" class="item"
                                    style="border: 4px solid green;">
                                    <h1>6</h1>
                                </div>
                                <div onclick="Carousel2__itemClicked(this);" class="item"
                                    style="background-color:darkblue;">
                                    <h1>7</h1>
                                </div>
                                <div onclick="Carousel2__itemClicked(this);" class="item"
                                    style="background-color:gold;">
                                    <h1>8</h1>
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
                    <div class="box-line flex">
                        <div class="skill active-on-visible" data-active-on-visible-diff-y="-400">
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
                                <div class="bar active-on-visible" data-active-on-visible-diff-y="-400"></div>
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


            <section class="contact con active-on-visible" data-active-on-visible-diff-y="-400">
                <div class="ct-wrap">
                    <div class="ct-box">
                        <div class="ct-tit">
                            <h1>CONTACT ME</h1>
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
                        <div class="remark">본 페이지는 상업적 목적이 아닌 개인 포트폴리오용으로 제작되었습니다.</div>
                    </div>

                </div>
            </section>

        </div>
    </main>
</body>

</html>