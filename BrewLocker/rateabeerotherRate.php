<?php
include 'database.php';
session_start();
$brewery= $_POST['brewery'];
$beer= $_POST['beer'];

$stmt= $db->prepare("SELECT beer_ID FROM beers WHERE beer_name='$beer'");
$stmt->execute();
$id=$stmt->fetchColumn();



if (isset($_SESSION['userID'])) {
    $type = $_SESSION['type'];
    $uname = $_SESSION['userName'];
}
?>


<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

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
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>Brew Locker | Rate A Beer</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="full-header">

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
                        <li><a href="index.php"><div>Home</div></a>



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

    <!-- Page Title
    ============================================= -->
    <section id="page-title" class="page-title-pattern">

        <div class="container clearfix">
            <h1>Rate A Beer</h1>
            <span><?php echo $brewery; ?><b> <?php echo $beer; ?></b></span>


            <span><b></b></span>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Rate a Beer</li>
            </ol>
        </div>

    </section><!-- #page-title end -->





    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Postcontent
                ============================================= -->
                <div class=" nobottommargin">




                        <form class="nobottommargin" id="template-contactform" name="template-contactform" action="rateabeerotherHandler.php" method="post">



                            <div class="col_one_third">
                                <label for="where">Where Did You Try <?php echo $beer;?>? <small></small></label>
                                <input type="text"  name="where" value="" class="required email sm-form-control" />
                            </div>

                            <div class="col_one_third col_last">
                                <label for="when">When Did You Try <?php echo $beer;?>? <small></small></label>
                                <input type="date"  name="when" value="" class="sm-form-control" />
                            </div>

                            <div class="clear"></div>

                            <div class="col_one_third">
                                <label for="rate">Rate <?php echo $beer;?> <small>*</small></label>
                                <select  name="rate" class="sm-form-control">
                                    <option value="1">&#9733;</option>
                                    <option value="2">&#9733;&#9733;</option>
                                    <option value="3">&#9733;&#9733;&#9733;</option>
                                    <option value="4">&#9733;&#9733;&#9733;&#9733;</option>
                                    <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                                </select>
                            </div>

                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="desc">Description</label>
                                <textarea class="required sm-form-control" name="desc" rows="6" cols="30"></textarea>
                            </div>

                            <input type="hidden" name="beerid" value="<?php echo $id; ?>">
                            <input type="hidden" name="brewery" value="<?php echo $brewery; ?>">
                            <input type="hidden" name="beer" value="<?php echo $beer; ?>">

                            <div class="col_full hidden">
                                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                            </div>

                            <div class="col_full">
                                <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Submit</button>
                            </div>

                        </form>


                </div><!-- .postcontent end -->



            </div>

        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">



        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">

            <div class="container clearfix">

                <div class="col_half">
                    Copyrights &copy; 2018 All Rights Reserved by Brew Locker Inc.<br>
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

<script type="text/javascript" src="https://maps.google.com/maps/api/js"></script>
<script type="text/javascript" src="js/jquery.gmap.js"></script>

<script type="text/javascript">

    $('#google-map').gMap({

        address: 'Melbourne, Australia',
        maptype: 'ROADMAP',
        zoom: 14,
        markers: [
            {
                address: "Melbourne, Australia",
                html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
                icon: {
                    image: "images/icons/map-icon-red.png",
                    iconsize: [32, 39],
                    iconanchor: [13,39]
                }
            }
        ],
        doubleclickzoom: false,
        controls: {
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: false,
            streetViewControl: false,
            overviewMapControl: false
        }
    });

</script>

</body>
</html>