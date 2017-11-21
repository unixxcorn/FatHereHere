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
    <title>calories calculator</title>

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
                            <li><a href="index.php">Home</a></li>
                            <li><a href="article_home.php">บทความสุขภาพ</a></li>
                            <li><a href="calories.php">โปรแกรมคำนวณแคลรอรี่ต่อวัน</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- Nav Bar End
        ============================================= -->
        <?php
            include('backend.php');
        ?>
        <section class="login-page">
            <div class="row row-fluid">
                <div class="col-xl-6 col-xl-offset-3 col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Result</h3>
                            <table>
                                <tr>
                                    <td>ค่า BMR </td>
                                    <td>
                                        <?php
                                            food::counter_add($_POST['weight'], $_POST['height']);
                                            echo food::BMR($_POST['sex'], $_POST['age'], $_POST['weight'], $_POST['height']);
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ค่า TDEE</td>
                                    <td>
                                        <?php
                                            echo food::TDEE(food::BMR($_POST['sex'], $_POST['age'], $_POST['weight'], $_POST['height']), $_POST['level']);
                                        ?>
                                        แคลโลรี่ ต่อวัน
                                    </td>
                                </tr>
                                <?php if(!($_POST['breakfast']=='' && $_POST['lunch']=='' && $_POST['dinner']=='')){ ?>
                                    <tr>
                                        <td>อาหารที่รับประทาน</td>
                                        <td>
                                            <?php
                                                echo food::inputfood($_POST['breakfast'], $_POST['lunch'], $_POST['dinner']);
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>พลังงานที่ได้รับ</td>
                                        <td>
                                            <?php
                                                echo food::calorie($_POST['breakfast'], $_POST['lunch'], $_POST['dinner']);
                                            ?>
                                            แคลโลรี่ 
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                            <h1 align="center">
                                <?php
                                    food::result();
                                ?>
                            </h1>
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