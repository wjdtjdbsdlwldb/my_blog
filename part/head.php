<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>블로그</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="icon" href="./resource/img/favicon.png">
    <link rel="stylesheet" href="/resource/common.css">
    <link rel="stylesheet" href="/resource/index.css">
    <link rel="stylesheet" href="/resource/mywork.css">
    <link rel="stylesheet" href="/resource/list.css">
    <link rel="stylesheet" href="/resource/detail.css">
    <link rel="stylesheet" href="/resource/web-coding.css">
    <link rel="stylesheet" href="/resource/aboutme.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/resource/common.js"></script>
</head>

<body>
    <div class="mobile-top-bar visible-sm-down flex">
        <div class="flex-1-0-0 flex-as-c">
            <a class="btn-toggle-mobile-side-bar flex-as-c flex flex-1-0-0" href="#">
                <div></div>
                <div></div>
                <div></div>
            </a>
        </div>
        <div class="mobile-logo"><img src="/resource/img/logo_1.png" alt=""></div>
        <div class="empty flex flex-1-0-0"></div>
    </div>

    <div class="side-bg-box visible-sm-down"></div>


    <!-- 모바일 메뉴박스 -->
    <div class="mobile-side-bar visible-sm-down">
        <nav class="side-menu-box-1">
            <ul>
                <li><a href="#" class="block">HOME</a></li>
                <li><a href="#" class="block">ABOUT ME</a>
                </li>
                <li><a href="#" class="block">MY WORK</a>
                    <ul>
                        <li><a href="#">WEB CODING</a></li>
                        <li><a href="#">DESIGN</a></li>
                    </ul>
                </li>
                <li><a href="#" class="block">DAILY</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- 메뉴박스 -->
    <div class="top-bar visible-md-up">
        <div class="con height-100p flex">
            <a href="/" class="logo con flex flex-ai-c">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 100 50" style="enable-background:new 0 0 100 50;" xml:space="preserve">
                    <path class="st0" d="M91.67,15.72H79.94l-0.04,0.04l-0.01,0l0,0.01l-6.38,6.79l12.36,11.73l11.88-11.69L91.67,15.72z M97.22,22.44
                        h-3.67v0.3h3.64l-9.83,9.68l5.53-9.48l0.03-0.05l-1.25-6.73L97.22,22.44z M80.16,16.02h5.32l-6.25,6.74L80.16,16.02z M78.92,22.85
                        l5.69,9.81l-10.54-10l3.77,0v-0.3l-3.74,0l5.72-6.09L78.92,22.85z M85.88,33.87l-0.59-0.56L79.23,22.8h8.76v-0.31H79.9l5.95-6.44
                        l6.04,6.47H89.2v0.3h3.4l-6.38-6.81h5.11l1.28,6.81l-5.9,10.22L85.88,33.87z"/>
                    <g>
                        <path class="st1" d="M3.28,32.51v-15.3h9.2l1.08,1.34v12.62l-1.07,1.34H3.28z M10.87,19.83h-4.7v10.06h4.7V19.83z"/>
                        <path class="st1" d="M19.13,32.51h-2.88v-15.3h2.88V32.51z"/>
                        <path class="st1" d="M29.4,26.11h-4.7v6.4h-2.88v-15.3H32.1v15.3h-2.7V26.11z M24.69,19.83v3.78h4.7v-3.78H24.69z"/>
                        <path class="st1" d="M37.66,29.89h7.41v2.62H34.78v-15.3h2.88V29.89z"/>
                        <path class="st1" d="M58.03,17.21v15.3H47.75v-15.3H58.03z M55.33,19.83h-4.7v10.06h4.7V19.83z"/>
                        <path class="st1" d="M65.32,23.61H71v8.9H60.72v-15.3H71v2.62h-7.4v10.06h4.7v-3.78h-2.98V23.61z"/>
                    </g>
                </svg>
            </a>

            <nav class="menu-box-1 flex con">
                <ul class="flex">
                    <li class="flex"><a href="/" class="flex flex-ai-c flex-jc-c">HOME</a></li>
                    <li class="flex"><a href="/aboutMe.php" class="flex flex-ai-c flex-jc-c">ABOUT
                            ME</a></li>
                    <li class="flex"><a href="#" class="flex flex-ai-c flex-jc-c">MY
                            WORK</a>
                        <ul>
                            <li><a href="web-coding.php">WEB CODING</a></li>
                            <li><a href="/list.php?cateItemId=2">DESIGN</a></li>
                            <li><a href="/list.php?cateItemId=4">IT</a></li>
                        </ul>
                    </li>
                    <li class="flex"><a href="/list.php?cateItemId=3" class="flex flex-ai-c flex-jc-c">DAILY</a></li>
                </ul>
            </nav>
            <nav class="login-box flex flex-jc-end flex-1-0-0 con">
                <ul class="flex">
                    <li class="flex"><a href="#" class="flex flex-ai-c flex-jc-c">LOGIN</a></li>
                    <li class="flex"><a href="#" class="flex flex-ai-c flex-jc-c">Join in</a></li>
                </ul>
            </nav>
        </div>
    </div>

    