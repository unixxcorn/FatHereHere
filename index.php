<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="author" content="FTI ITF PROJECT">
    <meta name="description" content=" พันธกิจของพวกเราคือการส่งเสริมสุขภาพที่ดีให้กับคนไทยทุกคน">
    <!-- Your Stylesheets, Scripts & Title
    ============================================= -->
    <link rel="icon" href="./img/favicon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/swiper.css" type="text/css">
    <link rel="stylesheet" href="css/dark.css" type="text/css">
    <link rel="stylesheet" href="css/font-icons.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/new.css" type="text/css">
    <link rel="stylesheet" href="css/new-responsive.css" type="text/css">
    <link rel="stylesheet" href="css/responsive.css" type="text/css">
    <link rel="stylesheet" href="css/popup.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" href="./img/favicon.png">
    <!-- Document Title
    ============================================= -->
    <title>FAT HEREHERE</title>

<body class="stretched device-lg">
    <!-- The Main Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix" style="animation-duration: 1.5s; opacity: 1;">
        <!-- Header
        ============================================= -->
        <header id="header" class="dark">
            <div id="header-wrap" class="">
                <div class="container clearfix">
                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="index.php" class="standard-logo"><img src="./img/logo.png" alt=""></a>
                        <a href="index.php" class="retina-logo"><img src="./img/logo.png" alt=""></a>
                    </div>
                    <!-- #logo end -->
                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu">
                        <ul class="sf-js-enabled" style="touch-action: pan-y;">
                            <li><a href="article_home.php">บทความสุขภาพ</a></li>
                            <li><a href="calories.php">โปรแกรมคำนวณแคลรอรี่ต่อวัน</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- Nav Bar End
        ============================================= -->
        <body>
        <!-- One Big Banner  -->
            <section class="big-banner">
                <img src="img/big-banner-01.jpg" alt="" style="width: 100%">
            </section>
            <section class="rc-section">
                <div class="container">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2 class="rc-title text-center">พันธกิจของพวกเรา</h2> 
                        <p class="rc-sub text-center">คือการสร้างเสริมสุขภาพที่ดีให้กับคนไทย
                                และเป็นเพื่อนซี้ที่ปรึกษาด้านสุขภาพให้กับคุณ</p>
                    </div>
                </div>
            </section>
        </body>
    </div>
    <section class="rc-section rc-stats">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="rc-title">Statistics</h2> 
                    <p class="rc-sub">What we are currently managing around the globe</p>
                </div>
            </div>
            <div class="rc-stats-count">
                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-15 col-xs-offset-2 col-md-offset-4">
                        <div class="panel"><div class="rc-stat-icon">
                            <img src="./img/git-commit-icon.svg" alt="Git Commit Icon">
                        </div>
                        <div class="panel-body">
                            <h5>แสดงผลข้อมูลสถิติตรงนี้</h5>
                            <h4 class="js-countup">
                                <?php
                                    include('backend.php');
                                    food::counter_show();
                                ?>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nav Fotter
    ============================================= -->
    <section class="rc-footer">
        <footer class="footer-nav">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 addspacebut col-sm-6 addspacebut col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <li><img class="" src="./img/logobig.png" /></li>
                            <li>
                                <p>FatHereHere เป็นเว็บไซต์สำหรับคนรักสุขภาพ <br>
                                    ที่มีเป้าหมายในการส่งเสริมสุขภาพของคนไทย</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 addspacebut col-sm-6  addspacebut col-md-3 addspacebut2 col-lg-3">
                        <h4>Resources</h4>
                        <ul class="list-unstyled">
                            <li><a href="http://themes.semicolonweb.com/html/canvas">Semicolon Web: Canvas</a></li>
                            <li><a href="https://runcloud.io/">Roundcloud.io</a></li>                            
                        </ul>
                    </div>
                    <div class="col-xs-12 addspacebut col-sm-6 addspacebut col-md-3 col-lg-3">
                        <h4>Our Team</h4>
                        <ul class="list-unstyled">
                            <li><div class="name">Badin Nhoorak 60070043</div></li>
                            <li><div class="name">Phaguymart Phaguymart 60070054</div></li>                            
                            <li><div class="name">Pasit Promrach 60070060</div></li>
                            <li><div class="name">Pakorn Supanimitvasana 60070071</div></li>
                            <li><div class="name">Phuree Kanusont 60070075</div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <footer class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <h5>Copyright 2017 © FatHereHere. All rights reserved</h5>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <ul class="list-unstyled list-inline">
                            <li>
                                <a href="https://www.facebook.com/phureek" target="_blank" rel="nofollow">
                                    <span class="icon-holder">
                                        <img src="https://cf1.cdn.runcloud.io/img/facebook.svg?rccbt=1" alt="Facebook Social Icon">
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/GdYora" target="_blank" rel="nofollow">
                                    <span class="icon-holder">
                                        <img src="https://cf1.cdn.runcloud.io/img/twitter.svg?rccbt=1" alt="Twitter Social Icon">
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/user/keimakhun" target="_blank" rel="nofollow">
                                    <span class="icon-holder">
                                        <img src="https://cf1.cdn.runcloud.io/img/youtube.svg?rccbt=1" alt="Youtube Social Icon">
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </section>
        </div>
    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>
    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" async="" src="js/analytics.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="js/functions.js"></script>
</body>
</html>