<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>고양아람누리</title>
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="/pf/gy/font/font.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.20/lodash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <!-- swiper 불러오기 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css">
    <script src="./index.js"></script>
</head>

<body>
    <div class="top-bar flex flex-ai-c con">
        <div class="side-btn flex-1-0-0">
            <a href="#" class="open-btn block">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </a>
        </div>
        <div class="logo flex-1-0-0">
            <a href="#">
                <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/logo.png" alt=""></a>
        </div>
        <nav class="menu-box flex">
            <ul class="flex login">
                <li><a href="#">로그인</a></li>
                <li><a href="#">회원가입</a></li>
            </ul>
            <ul class="flex icon">
                <li><a href="#"><img
                            src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/btn_search_main_show.png?dummy123123"
                            alt=""></a></li>
                <li><a href="#"><img
                            src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/btn_calendar_2.png?dummy123123"
                            alt=""></a></li>
                <li><a href="#">
                        <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/btn_lang_2.png?dummy123123"
                            alt=""></a>
                    <ul class="text-align-center">
                        <li><a href="#" class="block">ENG</a></li>
                        <li><a href="#" class="block">JPN</a></li>
                        <li><a href="#" class="block">CHN</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

    <div class="main">
        <div class="swiper-container swiper1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <video src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/dronevidoo_aram.mp4" id="video"
                        autoplay="" loop="" muted="" playsinline=""></video>
                    <div class="text-box text-align-center">
                        <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/txt_aram_slide.png?dummy123123"
                            alt="">

                        <h2 class="">고양아람누리</h2>
                        <div class="line-bt"></div>
                        <a href="#" class="view">VIEW</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <video src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/dronevidoo_oulim.mp4" id="video"
                        autoplay="" loop="" muted="" playsinline="">
                    </video>
                    <div class="text-box text-align-center">
                        <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/txt_oulim_slide.png?dummy123123"
                            alt="">
                        <h2 class="">고양어울림누리</h2>
                        <div class="line-bt2"></div>
                        <a href="#" class="view">VIEW</a>
                    </div>
                </div>
            </div>
            <div class="btn-1 con">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>

    <div class="page-2 side-con active-on-visible effect" data-active-on-visible-diff-y="-200">
        <nav class="infor">
            <ul class="flex text-align-center">
                <li><a href="#" class="block">
                        <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/a_link1.png?dummy123123" alt="">
                        <p>오시는길</p>
                    </a></li>
                <li><a href="#" class="block">
                        <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/a_link2.png?dummy123123" alt="">
                        <p>좌석배치도</p>
                    </a></li>
                <li><a href="#" class="block">
                        <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/a_link3.png?dummy123123" alt="">
                        <p>예매안내</p>
                    </a></li>
                <li><a href="#" class="block">
                        <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/a_link4_2.png?dummy123123"
                            alt="">
                        <p>공지사항</p>
                    </a></li>
                <li><a href="#" class="block">
                        <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/a_link5_2.png?dummy123123"
                            alt="">
                        <p>공연장<br>대관신청</p>
                    </a></li>
            </ul>
        </nav>
    </div>

    <div class="page-3 active-on-visible effect" data-active-on-visible-diff-y="-200">
        <h2 class="tit side-con">전체공연</h2>
        <div class="swiper-container swiper2">
            <ul class="swiper-wrapper">
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20200806_02.jpg?dummy123123" alt="">
                    <div class="pt-txt">
                        <span class="nuri">아람<br>누리</span>
                        <div class="pt-infor">
                            <p>새라새ON - 낙타상자</p>
                            <p>2020-11-13(금) ~ 2020-11-15(일)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>새라새ON - 낙타상자</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20200922_01.jpg?dummy123123" alt="">
                    <div class="pt-txt">
                        <span class="nuri">아람<br>누리</span>
                        <div class="pt-infor">
                            <p>새라새ON - 송영주 with Friends</p>
                            <p>2020-12-04(금) ~ 2020-12-05(토)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>새라새ON - 송영주 with Friends</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20200317_01.jpg?dummy123123" alt="">
                    <div class="pt-txt">
                        <span class="nuri">아람<br>누리</span>
                        <div class="pt-infor">
                            <p>2020 아람누리 마티네콘서트 1</p>
                            <p>2020-12-10(목)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>2020 아람누리 마티네콘서트 1</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20200219_15.jpg?dummy123123" alt="">
                    <div class="pt-txt">
                        <span class="nuri">아람<br>누리</span>
                        <div class="pt-infor">
                            <p>새라새on시리즈 패키지</p>
                            <p>2020-04-25(토) ~ 2020-12-05(토)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>새라새on시리즈 패키지</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20201012_06.jpg?dummy123123" alt="">
                    <div class="pt-txt">
                        <span class="nuri">아람<br>누리</span>
                        <div class="pt-infor">
                            <p>제 67회 정기연주회, 평화와 힐링 콘서트</p>
                            <p>2020-11-10(화)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>제 67회 정기연주회, 평화와 힐링 콘서트</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20201012_02.jpg?dummy123123" alt="">
                    <div class="pt-txt">
                        <span class="nuri">아람<br>누리</span>
                        <div class="pt-infor">
                            <p>2020 론 브랜튼의〈재즈 크리스마스! 〉- 20주년 기념</p>
                            <p>2020-12-25(금)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>2020 론 브랜튼의〈재즈 크리스마스! 〉- 20주년...</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20200831_02.jpg?dummy123123" alt="">
                    <div class="pt-txt">
                        <span class="nuri">아람<br>누리</span>
                        <div class="pt-infor">
                            <p>포레스텔라 콘서트[넬라 판타지아] - 고양</p>
                            <p>2020-11-14(토) ~ 2020-11-15(토)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>포레스텔라 콘서트[넬라 판타지아] - 고양</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20200803_05.jpg?dummy123123" alt="">
                    <div class="pt-txt">
                        <span class="nuri">아람<br>누리</span>
                        <div class="pt-infor">
                            <p>정미조X말로X박주원 The 3 LIVE</p>
                            <p>2020-11-07(토)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>정미조X말로X박주원 The 3 LIVE</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20200917_09.jpg?dummy123123" alt="">
                    <div class="pt-txt">
                        <span class="nuri">아람<br>누리</span>
                        <div class="pt-infor">
                            <p>거리두기좌석제 콘서트 <이십세기 이승환 +> 고양</p>
                            <p>2020-10-31(토)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>거리두기좌석제 콘서트 <이십세기 이승환 +> 고양</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20200928_02.jpg?dummy123123" alt="">
                    <div class="pt-txt">
                        <span class="nuri">아람<br>누리</span>
                        <div class="pt-infor">
                            <p>뮤직 퍼포먼스 '골목길'</p>
                            <p>2020-10-24(토) ~ 2020-10-25(일)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>뮤직 퍼포먼스 '골목길'</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20191230_09.jpg?dummy123123" alt="">
                    <div class="pt-txt">
                        <span class="nuri">아람<br>누리</span>
                        <div class="pt-infor">
                            <p>2020 아람누리 마티네콘서트 4</p>
                            <p>2020-10-29(목)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>2020 아람누리 마티네콘서트 4</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20200929_04.jpg?dummy1231231"
                        alt="">
                    <div class="pt-txt">
                        <span class="nuri2">어울림<br>누리</span>
                        <div class="pt-infor">
                            <p>고양시 어린이와 함께하는 "그림으로 듣는 음악회"</p>
                            <p>2020-10-25(일)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>고양시 어린이와 함께하는 "그림으로 듣는 음악회"</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20200616_08.jpg?dummy123123" alt="">
                    <div class="pt-txt">
                        <span class="nuri">아람<br>누리</span>
                        <div class="pt-infor">
                            <p>2020 아람누리 마티네콘서트 2</p>
                            <p>2020-11-05(목)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>2020 아람누리 마티네콘서트 2</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20200114_13(2).png?dummy123123"
                        alt="">
                    <div class="pt-txt">
                        <span class="nuri2">어울림<br>누리</span>
                        <div class="pt-infor">
                            <p>2020 아침음악나들이 - 박미경</p>
                            <p>2020-11-26(목)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>2020 아침음악나들이 - 박미경</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20201006_04.jpg?dummy123123" alt="">
                    <div class="pt-txt">
                        <span class="nuri">아람<br>누리</span>
                        <div class="pt-infor">
                            <p>초대거부:invitation Denied-part 1</p>
                            <p>2020-10-14(수) ~ 2020-11-28(토)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>초대거부:invitation Denied-part 1</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20200917_03.jpg?dummy123123" alt="">
                    <div class="pt-txt">
                        <span class="nuri">아람<br>누리</span>
                        <div class="pt-infor">
                            <p>김가은 댄스 컬렉티브 [모호한 경계 Ⅲ - SPACE: ‘Park']</p>
                            <p>2020-11-05(목) ~ 2020-11-06(금)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>김가은 댄스 컬렉티브 [모호한 경계 Ⅲ - SPACE:...</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20200917_01.jpg?dummy123123" alt="">
                    <div class="pt-txt">
                        <span class="nuri">아람<br>누리</span>
                        <div class="pt-infor">
                            <p>광개토 사물놀이 예술단 [국악 & 힙합 하이브리드 콘서트 ‘무브먼트 코리아’]</p>
                            <p>2020-12-13(일)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>광개토 사물놀이 예술단 [국악 & 힙합 하이브리드 콘서...</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20200924_01.jpg?dummy123123" alt="">
                    <div class="pt-txt">
                        <span class="nuri">아람<br>누리</span>
                        <div class="pt-infor">
                            <p>베이스바리톤 길병민 리사이틀</p>
                            <p>2020-11-12(목)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>베이스바리톤 길병민 리사이틀</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20200818_04.jpg?dummy123123" alt="">
                    <div class="pt-txt">
                        <span class="nuri2">어울림<br>누리</span>
                        <div class="pt-infor">
                            <p>뮤지컬 헬로카봇 시즌5 [별똥별을 지켜라!] - 고양</p>
                            <p>2020-12-12(토) ~ 2020-12-13(일)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>뮤지컬 헬로카봇 시즌5 [별똥별을 지켜라!] - 고양</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20200818_08.jpg?dummy123123" alt="">
                    <div class="pt-txt">
                        <span class="nuri2">어울림<br>누리</span>
                        <div class="pt-infor">
                            <p>뮤지컬[알사탕]</p>
                            <p>2020-12-04(금) ~ 2020-12-06(일)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>뮤지컬[알사탕]</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20200907_02.jpg?dummy123123" alt="">
                    <div class="pt-txt">
                        <span class="nuri">아람<br>누리</span>
                        <div class="pt-infor">
                            <p>목이 긴 메아리</p>
                            <p>2020-10-15(목)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>목이 긴 메아리</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20200820_06.jpg?dummy123123" alt="">
                    <div class="pt-txt">
                        <span class="nuri">아람<br>누리</span>
                        <div class="pt-infor">
                            <p>[취소] 김목경 공연</p>
                            <p>2020-10-18(일)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>[취소] 김목경 공연</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20200114_09.png?dummy123123" alt="">
                    <div class="pt-txt">
                        <span class="nuri2">어울림<br>누리</span>
                        <div class="pt-infor">
                            <p>2020 아침음악나들이 - 패키지 [웹표시용]</p>
                            <p>2020-03-26(목) ~ 2020-11-26(목)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>2020 아침음악나들이 - 패키지 [웹표시용]</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20191230_11.jpg?dummy123123" alt="">
                    <div class="pt-txt">
                        <span class="nuri">아람<br>누리</span>
                        <div class="pt-infor">
                            <p>2020 아람누리 마티네콘서트 패키지 [웹표시용]</p>
                            <p>2020-04-23(목) ~ 2020-11-05(목)</p>
                        </div>
                        <div class="hov row">
                            <a href="#" class="favor block cell-right"></a>
                            <p>2020 아람누리 마티네콘서트 패키지 [웹표시용]</p>
                            <a href="#" class="detail block">상세</a>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- Add Pagination -->
            <div class="swiper-pagination">
                <span class="swiper-pagination-progressbar-fill"></span>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <div class="page-4 active-on-visible effect" data-active-on-visible-diff-y="-200">
        <a href="#" class="banner">
            <img src="https://wjdtjdbsdlwldb.github.io/img1/blog/article/gy/20200624_11_1.jpg?dummy123123" alt="">
        </a>
    </div>

    <div class="page-5 active-on-visible effect" data-active-on-visible-diff-y="-200">
        <div class="box-list-1 side-con">
            <div class="flex box-1212 flex-ai-c">
                <h2 class="text flex flex-grow-1">
                    <a href="#">Notice</a></h2>
                <div class="head">
                    <ul class="flex">
                        <li class="flex-1-0-0 active" data-tab-name="box-1" data-tab-head-item-name="1"><a>전체</a></li>
                        <li class="flex-1-0-0" data-tab-name="box-1" data-tab-head-item-name="2"><a>공지</a></li>
                        <li class="flex-1-0-0" data-tab-name="box-1" data-tab-head-item-name="3"><a>공연</a></li>
                        <li class="flex-1-0-0" data-tab-name="box-1" data-tab-head-item-name="4"><a>전시</a></li>
                        <li class="flex-1-0-0" data-tab-name="box-1" data-tab-head-item-name="5"><a>교육</a></li>
                        <li class="flex-1-0-0" data-tab-name="box-1" data-tab-head-item-name="6"><a>채용</a></li>
                        <li class="flex-1-0-0" data-tab-name="box-1" data-tab-head-item-name="7"><a>입찰</a></li>
                        <li class="flex-1-0-0" data-tab-name="box-1" data-tab-head-item-name="8"><a>대관</a></li>

                    </ul>
                </div>
            </div>
            <div class="flex flex-row-wrap">
                <div class="box">
                    <div class="content tab-type-1">
                        <div class="body">
                            <ul class="flex">
                                <li class="active" data-tab-name="box-1" data-tab-body-item-name="1">
                                    <span>공연</span>
                                    <a href="#" class="block">[일정변경] 정미조X말로X박주원 The 3 LIVE</a>
                                    <p>2020-10-08</p>
                                </li>
                                <li class="active" data-tab-name="box-1" data-tab-body-item-name="1">
                                    <span>공지</span>
                                    <a href="#" class="block">2020년 추석연휴 서비스플라자 운영 안내</a>
                                    <p>2020-09-28</p>
                                </li>
                                <li class="active" data-tab-name="box-1" data-tab-body-item-name="1">
                                    <span>채용</span>
                                    <a href="#" class="block">공공미술 프로젝트 사업보조 단시간 근로자 채용공고</a>
                                    <p>2020-09-25</p>
                                </li>
                            </ul>
                            <ul class="flex">
                                <li data-tab-name="box-1" data-tab-body-item-name="2">
                                    <span>공지</span>
                                    <a href="#" class="block">2020년 추석연휴 서비스플라자 운영 안내</a>
                                    <p>2020-09-28</p>
                                </li>
                                <li data-tab-name="box-1" data-tab-body-item-name="2">
                                    <span>공지</span>
                                    <a href="#" class="block">2020년 지역 예술활동기획 공모 지원사업 <고양예술은행> 공모</a>
                                    <p>2020-09-21</p>
                                </li>
                                <li data-tab-name="box-1" data-tab-body-item-name="2">
                                    <span>공지</span>
                                    <a href="#" class="block">공연·전시·교육·축제·행사 등 취소 안내</a>
                                    <p>2020-09-03</p>
                                </li>
                            </ul>
                            <ul class="flex">
                                <li data-tab-name="box-1" data-tab-body-item-name="3">
                                    <span>공연</span>
                                    <a href="#" class="block">[일정변경] 정미조X말로X박주원 The 3 LIVE</a>
                                    <p>2020-10-08</p>
                                </li>
                                <li data-tab-name="box-1" data-tab-body-item-name="3">
                                    <span>공연</span>
                                    <a href="#" class="block">[취소] 아침음악나들이 3 <테이></a>
                                    <p>2020-09-08</p>
                                </li>
                                <li data-tab-name="box-1" data-tab-body-item-name="3">
                                    <span>공연</span>
                                    <a href="#" class="block">[취소] 새라새ON - 공연배달서비스 간다 [템플]</a>
                                    <p>2020-09-04</p>
                                </li>
                            </ul>
                            <ul class="flex">
                                <li class="" data-tab-name="box-1" data-tab-body-item-name="4">
                                    <span>전시</span>
                                    <a href="#" class="block">[운영중단] 이웃예술가와 함께하는 미술감상 커뮤니티 운영중단 안내</a>
                                    <p>2020-08-18</p>
                                </li>
                                <li class="" data-tab-name="box-1" data-tab-body-item-name="4">
                                    <span>전시</span>
                                    <a href="#" class="block">프렌치모던 : 모네에서 마티스까지 展 휴관 안내</a>
                                    <p>2020-08-18</p>
                                </li>
                                <li class="" data-tab-name="box-1" data-tab-body-item-name="4">
                                    <span>전시</span>
                                    <a href="#" class="block">[공모]2021고양우수작가공모전 ‘고양아티스트365’ 전시 작가 공모</a>
                                    <p>2020-08-04</p>
                                </li>
                            </ul>
                            <ul class="flex">
                                <li class="" data-tab-name="box-1" data-tab-body-item-name="5">
                                    <span>교육</span>
                                    <a href="#" class="block">어울림문화학교 3학기 잠정중단 안내</a>
                                    <p>2020-08-17</p>
                                </li>
                                <li class="" data-tab-name="box-1" data-tab-body-item-name="5">
                                    <span>교육</span>
                                    <a href="#" class="block">2020 아람문예아카데미 일시중단 안내</a>
                                    <p>2020-08-15</p>
                                </li>
                                <li class="" data-tab-name="box-1" data-tab-body-item-name="5">
                                    <span>교육</span>
                                    <a href="#" class="block">2020 아람문예아카데미 상반기 임시공휴일 휴강 안내</a>
                                    <p>2020-08-12</p>
                                </li>
                            </ul>

                            <ul class="flex">
                                <li class="" data-tab-name="box-1" data-tab-body-item-name="6">
                                    <span>채용</span>
                                    <a href="#" class="block">공공미술 프로젝트 사업보조 단시간 근로자 채용공고</a>
                                    <p>2020-09-25</p>
                                </li>
                                <li class="" data-tab-name="box-1" data-tab-body-item-name="6">
                                    <span>채용</span>
                                    <a href="#" class="block">2020년 제1차 고양문화재단 전문 기간제 및 정규직 채용 최종 합격자 공고</a>
                                    <p>2020-08-05</p>
                                </li>
                                <li class="" data-tab-name="box-1" data-tab-body-item-name="6">
                                    <span>채용</span>
                                    <a href="#" class="block">2020년 제2차 고양문화재단 기간제 직원 채용 최종 합격자 공고</a>
                                    <p>2020-08-04</p>
                                </li>
                            </ul>
                            <ul class="flex">
                                <li class="" data-tab-name="box-1" data-tab-body-item-name="7">
                                    <span>입찰</span>
                                    <a href="#" class="block">일제강점기 침탈의 현장, 30사단 내 항일음악회 행사 용역 개찰 결과</a>
                                    <p>2019-03-21</p>
                                </li>
                                <li class="" data-tab-name="box-1" data-tab-body-item-name="7">
                                    <span>입찰</span>
                                    <a href="#" class="block">2019년 시민과 함께하는 물놀이음악회 대행용역 입찰결과 안내</a>
                                    <p>2019-03-12</p>
                                </li>
                                <li class="" data-tab-name="box-1" data-tab-body-item-name="7">
                                    <span>입찰</span>
                                    <a href="#" class="block">공유재산(아람누리 해받이터) 사용.수익허가입찰공고</a>
                                    <p>2017-08-31</p>
                                </li>
                            </ul>
                            <ul class="flex">
                                <li class="" data-tab-name="box-1" data-tab-body-item-name="8">
                                    <span>대관</span>
                                    <a href="#" class="block">2021년 상반기 공연장 정기대관 신청 안내</a>
                                    <p>2020-08-07</p>
                                </li>
                                <li class="" data-tab-name="box-1" data-tab-body-item-name="8">
                                    <span>대관</span>
                                    <a href="#" class="block">2020 호수청소년생활문화센터 [호수마당] 9월 수시대관 공고</a>
                                    <p>2020-08-07</p>
                                </li>
                                <li class="" data-tab-name="box-1" data-tab-body-item-name="8">
                                    <span>대관</span>
                                    <a href="#" class="block">2020 아람생활문화센터 [아람마당] 9월 수시대관 공고</a>
                                    <p>2020-08-07</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <h1>daf</h1>
</body>

</html>