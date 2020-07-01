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
                <img src="/resource/img/logo_1.png" alt="">
            </a>

            <nav class="menu-box-1 flex con">
                <ul class="flex">
                    <li class="flex"><a href="/" class="flex flex-ai-c flex-jc-c">HOME</a></li>
                    <li class="flex"><a href="/aboutMe.php" class="flex flex-ai-c flex-jc-c">ABOUT
                            ME</a></li>
                    <li class="flex"><a href="/list.php" class="flex flex-ai-c flex-jc-c">MY
                            WORK</a>
                        <ul>
                            <li><a href="/list.php?cateitemId=1">WEB CODING</a></li>
                            <li><a href="/list.php?cateitemId=2">DESIGN</a></li>
                        </ul>
                    </li>
                    <li class="flex"><a href="daily.php" class="flex flex-ai-c flex-jc-c">DAILY</a></li>
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

    