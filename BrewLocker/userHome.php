<?php
include 'database.php';
session_start();
if(isset($_SESSION['type'])) {
    if ($_SESSION['type'] != 'user')
        header("Location:role_error.html");
}
else
    header("Location:role_error.html");


if(isset($_SESSION['userName']))
    $uname = $_SESSION['userName'] ;

if(isset($_SESSION['fname']))
    $fname = $_SESSION['fname'] ;

if(isset($_SESSION['lname']))
    $lname = $_SESSION['lname'] ;

if(isset($_SESSION['pic']))
    $pic = $_SESSION['pic'] ;

$userID = $_SESSION['userID'];
$queryReviews = 'SELECT * FROM reviews
      WHERE user_ID = :id';
$statement3 = $db->prepare($queryReviews);
$statement3->execute([':id' => $userID]);
$reviews = $statement3->fetchAll();
$statement3->closeCursor();

$stmt= $db->prepare("SELECT COUNT(beer_ID) FROM reviews where user_ID = $userID;");
$stmt->execute();
$count=$stmt->fetchColumn();


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
    <title>Profile | BrewLocker</title>

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

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <div class="row clearfix">

                    <div>

                       <?php if($pic != null) { ?> <img src="images/avatars/<?php echo $pic; ?>" class="alignleft img-circle img-thumbnail notopmargin nobottommargin" alt="Avatar" style="max-width: 84px;"> <?php } ?>

                        <div class="heading-block noborder">
                            <h3><?php echo $fname; ?> <?php echo $lname; ?></h3>
                            <span>You Have Rated <?php echo $count ?> Beers</span>
                        </div>


                        <div class="clear"></div>

                        <div class="row clearfix">

                            <div class="col-md-12">

                                <div class="tabs tabs-alt clearfix" id="tabs-profile">

                                    <ul class="tab-nav clearfix">
                                        <li><a href="#tab-rate"><i class="icon-clipboard"></i> Ratings</a></li>
                                        <li><a href="#tab-edit"><i class="icon-cogs"></i> Edit Profile</a></li>
                                        <li><a href="#tab-rate-a-beer"><i class="icon-plus"></i> Rate A Beer</a></li>
                                    </ul>

                                    <div class="tab-container">

                                        <div class="tab-content clearfix" id="tab-rate">



                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped">
                                                    <colgroup>

                                                    </colgroup>
                                                    <thead>
                                                    <tr>
                                                        <th>Brewery</th>
                                                        <th>Beer Name</th>
                                                        <th>Rating</th>
                                                        <th>When Tried</th>
                                                        <th>Where Tried</th>
                                                        <th>Description</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($reviews as $review) : ?>
                                                    <tr>
                                                        <td><?php echo $review['brewery']; ?></td>
                                                        <td><?php echo $review['name']; ?></td>
                                                        <td><?php echo $review['rate']; ?></td>
                                                        <td><?php echo $review['when_tried']; ?></td>
                                                        <td><?php echo $review['where_tried']; ?></td>
                                                        <td><?php echo $review['description']; ?></td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>

                                        <div class="tab-content clearfix" id="tab-edit">


                                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                                Select A New Profile Image<br><br>
                                                <input type="file" accept=".jpg,.png" name="pic" id="pic"><br>
                                                <div class="col_full nobottommargin">
                                                    <button class="button button-3d button-black nomargin" id="submit" name="submit" type="submit" value="register">Upload</button>
                                                </div>
                                            </form>

                                        </div>

                                        <div class="tab-content clearfix" id="tab-rate-a-beer">


                                            <form action="rateabeerother.php" method="post" >
                                                <div class="col_full nobottommargin">
                                                    <button class="button button-3d button-black nomargin"  href="rateabeerother.php"  value="register">Rate A Beer</button>
                                                </div>
                                            </form>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="line visible-xs-block"></div>



                </div>

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

<script>
    jQuery( "#tabs-profile" ).on( "tabsactivate", function( event, ui ) {
        jQuery( '.flexslider .slide' ).resize();
    });
</script>

</body>
</html>