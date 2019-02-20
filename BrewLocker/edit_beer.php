<?php
session_start();
include 'database.php';
$id = $_POST['id'];
$name = $_POST['name'];
$desc = $_POST['desc'];
$abv = $_POST['abv'];


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
    <title>Edit <?php echo $name; ?></title>

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

    <!-- Page Title
    ============================================= -->
    <section id="page-title" class="page-title-pattern">

        <div class="container clearfix">
            <h1>Edit <?php echo $name; ?></h1>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Edit <?php echo $name; ?></li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">


                <div class="nobottommargin">




                    <form id="register" name="register" class="nobottommargin" action="edit_beer_action.php" method="post">

                        <div class="col_half">
                            <label>* Beer Name:</label>
                            <input required type="text" id="name" name="name" value="<?php echo $name; ?>" class="form-control" />
                        </div>

                        <div class="col_half col_last">
                            <label>* ABV:</label>
                            <input required type="text" id="abv" name="abv" value="<?php echo $abv; ?>" class="form-control" />
                        </div>

                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div class="clear"></div>

                        <div>
                            <label>* Description:</label><br>
                            <textarea rows="4" cols="100" name="desc" id="desc"><?php echo $desc; ?></textarea>
                        </div>

                        <div class="col_full nobottommargin">
                            <button class="button button-3d button-black nomargin" id="submit" name="submit" type="submit" value="register">Update</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

        <div class="container">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap clearfix">

                <div class="col_two_third">

                    <div class="col_one_third">

                        <div class="widget clearfix">

                            <img src="images/footer-widget-logo.png" alt="" class="footer-logo">

                            <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

                            <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                                <address>
                                    <strong>Headquarters:</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                                <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                                <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                            </div>

                        </div>

                    </div>

                    <div class="col_one_third">

                        <div class="widget widget_links clearfix">

                            <h4>Blogroll</h4>

                            <ul>
                                <li><a href="http://codex.wordpress.org/">Documentation</a></li>
                                <li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
                                <li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
                                <li><a href="http://wordpress.org/support/">Support Forums</a></li>
                                <li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
                                <li><a href="http://wordpress.org/news/">WordPress Blog</a></li>
                                <li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>
                            </ul>

                        </div>

                    </div>

                    <div class="col_one_third col_last">

                        <div class="widget clearfix">
                            <h4>Recent Posts</h4>

                            <div id="post-list-footer">
                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col_one_third col_last">

                    <div class="widget clearfix" style="margin-bottom: -20px;">

                        <div class="row">

                            <div class="col-md-6 bottommargin-sm">
                                <div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
                                <h5 class="nobottommargin">Total Downloads</h5>
                            </div>

                            <div class="col-md-6 bottommargin-sm">
                                <div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
                                <h5 class="nobottommargin">Clients</h5>
                            </div>

                        </div>

                    </div>

                    <div class="widget subscribe-widget clearfix">
                        <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                        <div class="widget-subscribe-form-result"></div>
                        <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                            <div class="input-group divcenter">
                                <span class="input-group-addon"><i class="icon-email2"></i></span>
                                <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                <span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
                            </div>
                        </form>
                    </div>

                    <div class="widget clearfix" style="margin-bottom: -20px;">

                        <div class="row">

                            <div class="col-md-6 clearfix bottommargin-sm">
                                <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                            </div>
                            <div class="col-md-6 clearfix">
                                <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>
                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
                            </div>

                        </div>

                    </div>

                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">

            <div class="container clearfix">

                <div class="col_half">
                    Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
                    <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                </div>

                <div class="col_half col_last tright">
                    <div class="fright clearfix">
                        <a href="#" class="social-icon si-small si-borderless si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-gplus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-pinterest">
                            <i class="icon-pinterest"></i>
                            <i class="icon-pinterest"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-vimeo">
                            <i class="icon-vimeo"></i>
                            <i class="icon-vimeo"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-github">
                            <i class="icon-github"></i>
                            <i class="icon-github"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-yahoo">
                            <i class="icon-yahoo"></i>
                            <i class="icon-yahoo"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-linkedin">
                            <i class="icon-linkedin"></i>
                            <i class="icon-linkedin"></i>
                        </a>
                    </div>

                    <div class="clear"></div>

                    <i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
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
