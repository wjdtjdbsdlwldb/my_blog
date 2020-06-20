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
        <a class="btn-toggle-mobile-side-bar flex-as-c" href="#">
            <div></div>
            <div></div>
            <div></div>
        </a>
    </div>
    
    <div class="side-bg-box visible-sm-down"></div>


    <!-- 모바일 메뉴박스 -->
    <div class="mobile-side-bar visible-sm-down">
        <nav class="side-menu-box-1">
            <ul>
                <li><a href="#" class="block">Home</a></li>
                <li><a href="#" class="block">Article</a>
                    <ul>
                        <li><a href="#">Notice</a></li>
                        <li><a href="#">Free</a></li>
                    </ul>
                </li>
                <li><a href="#" class="block">About Me</a></li>
                <li><a href="#" class="block">SNS</a>
                    <ul>
                        <li><a href="#">facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">twitter</a>
                            <ul>
                                <li><a href="#">Private</a></li>
                                <li><a href="#">Public</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

    <!-- 메뉴박스 -->
    <div class="top-bar visible-md-up">
        <div class="con height-100p flex">
            <a href="/" class="logo  flex flex-ai-c flex-grow-1">
                <img src="/resource/img/logo_1.png" alt="">
            </a>

            <nav class="menu-box-1 flex flex-1-0-0">
                <ul class="flex flex-1-0-0">
                    <li class="flex-1-0-0 flex"><a href="/" class="flex flex-1-0-0 flex-ai-c flex-jc-c">Home</a></li>
                    <li class="flex-1-0-0 flex"><a href="/list.php"
                            class="flex flex-1-0-0 flex-ai-c flex-jc-c">Articles</a>

                    </li>
                    <li class="flex-1-0-0 flex"><a href="/aboutMe.php" class="flex flex-1-0-0 flex-ai-c flex-jc-c">About
                            Me</a>
                    </li>
                    <li class="flex-1-0-0 flex"><a href="#" class="flex flex-1-0-0 flex-ai-c flex-jc-c">SNS</a>
                        <ul>
                            <li><a href="#">facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">twitter</a>

                            </li>
                        </ul>

                    </li>
                </ul>
            </nav>
        </div>
    </div>