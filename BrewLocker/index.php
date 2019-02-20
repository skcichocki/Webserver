<?php
session_start();
//require_once ('database.php');
if (isset($_SESSION['userID'])) {
    $type = $_SESSION['type'];
    $uname = $_SESSION['userName'];
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		 (adsbygoogle = window.adsbygoogle || []).push({
			  google_ad_client: "ca-pub-5164636214231514",
			  enable_page_level_ads: true
		 });
	</script>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
    <!--<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>-->
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>Home | Brew Locker</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="transparent-header dark full-header no-sticky">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="index.php" class="standard-logo" data-dark-logo="images/beerlogo.png"><img src="images/beerlogo.png" alt="Canvas Logo"></a>
                    <a href="index.php" class="retina-logo" data-dark-logo="images/beerlogo.png"><img src="images/beerlogo.png" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu">

                    <ul>
                        <li class="current"><a href="index.php"><div>Home</div></a>

                        <li><a href="about.php"><div>About</div></a></li>

                        <li class="mega-menu"><a href="#"><div>Local Breweries</div></a>
                            <div class="mega-menu-content style-2 clearfix">
                                <ul class="mega-menu-column col-md-3">
                                    <li class="mega-menu-title"><a href="#"><div>Charlotte</div></a>
                                        <ul>
                                            <li><a href="birdsong.php"><div>Birdsong Brewing Company</div></a></li>
                                            <li><a href="BlueBlaze.php"><div>Blue Blaze Brewing</div></a></li>
                                            <li><a href="FreeRangeBrewing.php"><div>Free Range Brewing</div></a></li>
                                            <li><a href="HeistBrewery.php"><div>Heist Brewery</div></a></li>
                                            <li><a href="LegionBrewing.php"><div>Legion Brewing</div></a></li>
                                            <li><a href="Noda.php"><div>NoDa Brewing Company</div></a></li>
                                            <li><a href="SugarCreek.php"><div>Sugar Creek Brewing Company</div></a></li>
                                            <li><a href="WoodenRobot.php"><div>Wooden Robot Brewery</div></a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="mega-menu-column col-md-3">
                                    <li class="mega-menu-title"><a href="#"><div>Concord</div></a>
                                        <ul>
                                            <li><a href="CBC.php"><div>Cabarrus Brewing Company</div></a></li>
                                            <li><a href="HighBranch.php"><div>High Branch Brewing Company</div></a></li>
                                            <li><a href="RedHill.php"><div>Red Hill Brewing Company</div></a></li>
                                            <li><a href="26Acres.php"><div>Twenty-Six Acres Brewing Company</div></a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="mega-menu-column col-md-3">
                                    <li class="mega-menu-title"><a href="#"><div>Cornelius/Huntersville</div></a>
                                        <ul>
                                            <li><a href="AssClown.php"><div>Ass Clown Brewing Company</div></a></li>
                                            <li><a href="Bayne.php"><div>Bayne Brewing Company</div></a></li>
                                            <li><a href="D9.php"><div>D9 Brewing Company</div></a></li>
                                            <li><a href="Primal.php"><div>Primal Brewery</div></a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="mega-menu-column col-md-3">
                                    <li class="mega-menu-title"><a href="#"><div>Asheville</div></a>
                                        <ul>
                                            <li><a href="Asheville.php"><div>Asheville Brewing Company</div></a></li>
                                            <li><a href="GreenMan.php"><div>Green Man Brewery</div></a></li>
                                            <li><a href="HiWire.php"><div>Hi-Wire Brewing</div></a></li>
                                            <li><a href="Highland.php"><div>Highland Brewing Company</div></a></li>
                                            <li><a href="TwinLeaf.php"><div>Twin Leaf Brewery</div></a></li>
                                            <li><a href="WickedWeed.php"><div>Wicked Weed Brewing</div></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li><a href="new_brewery.php"><div>New Brewery Application</div></a></li>

                    </ul>



                    <div id="top-account" class="dropdown">
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="icon-user"></i><i class="icon-angle-down"></i><?php if (isset($_SESSION['userID'])) { echo " "; echo $uname; }?></a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                     <?php if (isset($_SESSION['userID'])) { ?>   <li><a href="<?php if ($type == "user") {echo "userhome.php";} else {echo "brewhome.php";} ?>">Profile</a></li> <?php } ?>
                            <li><a href="<?php if (isset($_SESSION['userID'])) { echo "logout.php"; } else{echo "login.php";} ?>"><?php if (isset($_SESSION['userID'])) {echo "Logout";} else {echo "Login/Register";} ?><i class="icon-signout"></i></a></li>
                        </ul>
                    </div>

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->

    <section id="slider" class="force-full-screen full-screen">

        <div class="force-full-screen full-screen dark" style="background-image: url('images/beer.jpg');background-position: 50% 0;">

            <div class="container clearfix">
                <div class="slider-caption slider-caption-center">
                    <h2 data-animate="fadeInDown">Welcome To Brew Locker Charlotte</h2>
                    <p data-animate="fadeInUp" data-delay="400">Keep track of every local beer you have tried. Rate your favorites and see what others think about it as well. NEVER FORGET WHAT YOU HAVE TRIED!</p>
                    <?php if (!isset($_SESSION['userID'])) { ?> <a data-animate="fadeInUp" data-delay="600" href="login.php" class="button button-border button-light button-rounded button-large noleftmargin nobottommargin" style="margin-top: 30px;">Login</a><?php } ?>
                    <?php if (isset($_SESSION['userID']) && $type == "user") { ?> <a data-animate="fadeInUp" data-delay="800" href="rateabeerother.php" class="button button-3d button-teal button-large nobottommargin" style="margin: 30px 0 0 10px;">Rate a Beer</a> <?php } ?>
                </div>

            </div>

        </div>

    </section>

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">

            <div class="container clearfix">

                <div class="col_half">
                    Copyrights &copy; 2018 All Rights Reserved by Brew Locker<br>
                </div>


            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>