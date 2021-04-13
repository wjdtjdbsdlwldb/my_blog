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
    <script src="/portfolio2/index.js"></script>
</head>

<body>
    <main class="main con-min-width">
        <div class="main-wrap">
            <section class="page-1 con">
                <div class="pg1-wrap flex">
                    <div class="top-line line1"></div>
                    <div class="left-txt">
                        <p class="name1">Seo Yun Jung</br>Portfolio</p>
                        <p class="mul-des">Multiplex</br>Designer</p>
                        <p class="intro">다양한 색감을 가진 디자이너 정서윤입니다.</p>
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
                    <p class="port sy">SY Portfolio</p>
                    <p class="ui sy">UX/UI</p>
                    <div class="bottom-line line1"></div>
                </div>
            </section>
            <section class="page-2">
            </section>
        </div>
    </main>
</body>

</html>