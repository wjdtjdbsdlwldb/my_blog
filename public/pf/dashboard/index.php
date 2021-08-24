<!DOCTYPE html>
<html lang="kor">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="./index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./index.js"></script>

</head>

<body>

    <div class="top-box">
        <div class="top-wrap row">
            <div class="log-box">
                <ul class="log-wrap">
                    <li><a href="#"><img src="./resource/images/search.png" alt=""></a></li>
                    <li><a href="#">
                            <img src="./resource/images/ring.png" alt="">
                            <ul class="ale">
                                <li>
                                    <p>Alerts Center</p>
                                </li>
                                <li><a href="#">
                                        <span>August 08, 2021</span>
                                        <span>
                                            A new article has been registered.</span>
                                    </a></li>
                                <li><a href="#">
                                        <span>June 06, 2021</span>
                                        <span>
                                            Spending Alert: We've noticed unusually high spending for your account.
                                        </span>
                                    </a></li>
                                <li><a href="#"><span>February 02, 2021</span>
                                        <span>
                                            A new article has been registered.</span></a></li>
                                <li><a href="#">Show All Alerts</a></li>
                            </ul>
                        </a></li>
                    <li><a href="#" id="login-img">Elizabeth Brown
                            <img src="./resource/images/login.png" alt=""></a>
                        <ul class="log1">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">History</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="mobile-btn visible-md-up cell">
        <div class="mb-wrap">
            <p class="line"></p>
            <p class="line"></p>
            <p class="line"></p>
        </div>
    </div>

    <div class="background"></div>

    <section class="main">
        <div class="main-wrap">
            <nav class="menu-box visible-sm-down">
                <ul class="mu-wrap">
                    <a href="#" class="logo">
                        <img src="./resource/images/logo.png" alt="" class="sm-down">
                        <img src="./resource/images/logo_mb.png" alt="" class="md-up">
                    </a>
                    <li class="active"><a href="#"><img src="./resource/images/1menu.png" alt="">Dashboard</a>
                    </li>
                    <li><a href="#" id="m02"><img src="./resource/images/2menu.png" alt="">Components</a>
                        <ul>
                            <li><a href="#">design</a></li>
                            <li><a href="#">coding</a></li>
                            <li><a href="#">responsive</a></li>
                            <li><a href="#">Other</a></li>
                        </ul>
                    </li>
                    <li><a href="#" id="m03"><img src="./resource/images/3menu.png" alt="">Utilities</a></li>
                    <li><a href="#" id="m04"><img src="./resource/images/4menu.png" alt="">Information</a></li>
                    <li><a href="#" id="m05"><img src="./resource/images/5menu.png" alt="">Pages</a>
                        <ul>
                            <li><a href="#">design</a></li>
                            <li><a href="#">coding</a></li>
                            <li><a href="#">responsive</a></li>
                            <li><a href="#">Other</a></li>
                        </ul>
                    </li>
                    <li><a href="#" id="m06"><img src="./resource/images/6menu.png" alt="">Charts</a>
                        <ul>
                            <li><a href="#">design</a></li>
                            <li><a href="#">coding</a></li>
                            <li><a href="#">responsive</a></li>
                            <li><a href="#">Other</a></li>
                        </ul>
                    </li>
                    <li><a href="#" id="m07"><img src="./resource/images/7menu.png" alt="">Tables</a></li>

                </ul>
            </nav>

        </div>

        <div class="contents">
            <div class="ct-wrap">
                <h2>Dashboard</h2>
                <div class="date-box">
                    <div class="dt-wrap row">
                        <div class="cell dt dt1">
                            <div>
                                <p>EARNINGS (MONTHLY)</p>
                                <p id="t01">$40,000</p>
                                <p id="t01"><img src="./resource/images/icon1.png" alt=""></p>
                            </div>
                        </div>
                        <div class="cell dt dt2">
                            <div>
                                <p>EARNINGS (ANNUAL)</p>
                                <p id="t01">$215,000</p>
                                <p id="t01"><img src="./resource/images/icon2.png" alt=""></p>
                            </div>
                        </div>
                        <div class="cell dt dt3">
                            <div>
                                <p>TASKS</p>
                                <p id="t01" class="three">50%</p>
                                <p id="t01"><img src="./resource/images/icon3.png" alt=""></p>
                            </div>
                        </div>
                        <div class="cell dt dt2">
                            <div>
                                <p>PENDING REQUESTS</p>
                                <p id="t01">18</p>
                                <p id="t01"><img src="./resource/images/icon4.png" alt=""></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-box row">
                    <div class="tx-wrap">
                        <div class="cell tx">
                            <div id="tx-top" class="txt-top">
                                <div class="tx-tit tit1">Illustrations</div>
                                <div class="tx-body">
                                    <img src="./resource/images/Illustrations.png" alt="">
                                    <div class="ill-infor">
                                        Add some quality, svg illustrations to your project courtesy of unDraw, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!
                                    </div>
                                    <a href="#">Browse Illustrations on unDraw →</a>
                                </div>
                            </div>
                            <div id="scheduler" class="txt-top2">
                                <div class="sc-tit tit1">
                                    <span>Scheduler</span>
                                    <span>Veiw all</span>
                                </div>
                                <div class="sc-body">
                                    <ul>
                                        <li>
                                            <span>SUN</span>
                                            <span class="after-eff">Playing</span>
                                            <span><img src="./resource/images/dots.png" alt=""></span>
                                        </li>
                                        <li>
                                            <span>MON</span>
                                            <span class="after-eff m01">Listen to lecture</span>
                                            <span><img src="./resource/images/dots.png" alt=""></span>
                                        </li>
                                        <li>
                                            <span>TUE</span>
                                            <span class="after-eff m02">Go to park</span>
                                            <span><img src="./resource/images/dots.png" alt=""></span>
                                        </li>
                                        <li>
                                            <span>WED</span>
                                            <span class="after-eff m03">Dog walking</span>
                                            <span><img src="./resource/images/dots.png" alt=""></span>
                                        </li>
                                        <li>
                                            <span>THU</span>
                                            <span class="after-eff m04">Send documents</span>
                                            <span><img src="./resource/images/dots.png" alt=""></span>
                                        </li>
                                        <li>
                                            <span>FRI</span>
                                            <span class="after-eff m05">Go to post office</span>
                                            <span><img src="./resource/images/dots.png" alt=""></span>
                                        </li>
                                        <li>
                                            <span>SAT</span>
                                            <span class="after-eff m06">To work</span>
                                            <span><img src="./resource/images/dots.png" alt=""></span>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                            <div id="tx-top" class="txt-top2">
                                <div class="tx-tit tit1">emopty</div>
                                <div class="tx-body tx-body2">
                                    <div class="emoty e01">Lorem ipsum dolor sit amet consectetur adipisicing elit. A
                                        nesciunt
                                        officia mollitia sed et possimus repellendus modi veniam nihil, laboriosam
                                        cupiditate
                                        ullam quos hic nemo reiciendis nostrum iusto ut voluptatem!
                                        Dolore voluptas quis praesentium, fuga, et quam inventore odio consectetur ullam
                                        quidem,
                                        perferendis qui aut explicabo aspernatur quos quia? Qui accusamus nemo minus
                                        quidem
                                        soluta libero vero? Eaque, rem a.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cell tx tx2">
                            <div id="graph" class="txt-top">
                                <div class="gp-tit tit1">Projects</div>
                                <div class="gp-body">
                                    <ul>
                                        <li>
                                            <p>Server Migration</p>
                                            <span>20%</span>
                                            <p class="gp-bar"></p>
                                        </li>
                                        <li>
                                            <p>Sales Tracking</p>
                                            <span>40%</span>
                                            <p class="gp-bar"></p>
                                        </li>
                                        <li>
                                            <p>Customer Database</p>
                                            <span>60%</span>
                                            <p class="gp-bar"></p>
                                        </li>
                                        <li>
                                            <p>Payout Details</p>
                                            <span>80%</span>
                                            <p class="gp-bar"></p>
                                        </li>
                                        <li>
                                            <p>Account Setup</p>
                                            <span>Complete!</span>
                                            <p class="gp-bar"></p>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div id="tx-top" class="txt-top2">
                                <div class="tx-tit tit1">Illustrations</div>
                                <div class="tx-body tx-body2">
                                    <img src="./resource/images/img2.png" alt="">
                                    <div class="ill-infor">
                                        Why would that happen? I'll tell you why. <br><br>
                                        If a person has ugly thoughts, it begins to show on the face.
                                        And when that person has ugly thoughts every day, every week, every year, the
                                        face gets uglier and uglier until it gets so ugly you can hardly bear to look at
                                        it.<br>
                                        A person who has good thoughts cannot ever be ugly. You can have a wonky nose
                                        and a crooked
                                        mouth and a double chin and stick-out teeth, but if you have good thoughts they
                                        will shine out of your face like sunbeams and you will always look lovely.

                                    </div>
                                    <a href="#">More view →</a>
                                </div>
                            </div>

                            <div id="tx-top" class="txt-top2">
                                <div class="tx-tit tit1">emopty</div>
                                <div class="tx-body tx-body2">
                                    <div class="emoty e02">Lorem ipsum dolor sit amet consectetur adipisicing elit. A
                                        nesciunt
                                        officia mollitia sed et possimus repellendus modi veniam nihil, laboriosam
                                        cupiditate
                                        ullam quos hic nemo reiciendis nostrum iusto ut voluptatem!
                                        Dolore voluptas quis praesentium, fuga, et quam inventore odio consectetur ullam
                                        quidem,
                                        perferendis qui aut explicabo aspernatur quos quia? Qui accusamus nemo minus
                                        quidem
                                        soluta libero vero? Eaque, rem a.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="ft-wrap">
            <p>Copyright © 2020 by J. Seo Yun All Rights Reserved</p>
        </div>
    </footer>
</body>

</html>