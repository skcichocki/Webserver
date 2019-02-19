<?php
session_start();
include 'database.php';
$location = "Primal.php";
if (isset($_SESSION['userID'])) {
    $type = $_SESSION['type'];
    $uname = $_SESSION['userName'];
}



//Statements that send data to an array. Only thing that needs to be changed is the WHERE clause to map brewery_ID to page

$stmt= $db->prepare("SELECT beer_name FROM beers WHERE brewery_ID=890566");
$stmt->execute();

$stmt2= $db->prepare("SELECT abv FROM beers WHERE brewery_ID=890566");
$stmt2->execute();

$stmt3= $db->prepare("SELECT beer_description FROM beers WHERE brewery_ID=890566");
$stmt3->execute();

$stmt4= $db->prepare("SELECT beer_ID FROM beers WHERE brewery_ID=890566");
$stmt4->execute();

/* Fetch all of the values of the first column */
$name = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
$abv = $stmt2->fetchAll(PDO::FETCH_COLUMN, 0);
$desc = $stmt3->fetchAll(PDO::FETCH_COLUMN, 0);
$id = $stmt4->fetchAll(PDO::FETCH_COLUMN, 0);

$brewery = "Primal Brewery";

// Statements that give average ratings for beer with index 0 in the id array

if (!empty($name[0])) {
    $stmt5 = $db->prepare("SELECT rating FROM ratings WHERE beer_ID='$id[0]'");
    $stmt5->execute();
    $id0 = $stmt5->fetchAll(PDO::FETCH_COLUMN, 0);
    if (count($id0) >= 1) {
        $average0 = array_sum($id0) / count($id0);
        $star0 = null;

        if ($average0 >= 0 && $average0 < .5) {
            $star0 = null;
        } elseif ($average0 >= .5 && $average0 < 1.5) {
            $star0 = "&#9733;";
        } elseif ($average0 >= 1.5 && $average0 < 2.5) {
            $star0 = "&#9733;&#9733;";
        } elseif ($average0 >= 2.5 && $average0 < 3.5) {
            $star0 = "&#9733;&#9733;&#9733;";
        } elseif ($average0 >= 3.5 && $average0 < 4.5) {
            $star0 = "&#9733;&#9733;&#9733;&#9733;";
        } elseif ($average0 >= 4.5) {
            $star0 = "&#9733;&#9733;&#9733;&#9733;&#9733;";
        }

    }
}

// Statements that give average ratings for beer with index 1 in the id array

if (!empty($name[1])) {
    $stmt6 = $db->prepare("SELECT rating FROM ratings WHERE beer_ID='$id[1]'");
    $stmt6->execute();
    $id1 = $stmt6->fetchAll(PDO::FETCH_COLUMN, 0);
    if (count($id1) >= 1) {
        $average1 = array_sum($id1) / count($id1);
        $star1 = null;

        if ($average1 >= 0 && $average1 < .5) {
            $star1 = null;
        } elseif ($average1 >= .5 && $average1 < 1.5) {
            $star1 = "&#9733;";
        } elseif ($average1 >= 1.5 && $average1 < 2.5) {
            $star1 = "&#9733;&#9733;";
        } elseif ($average1 >= 2.5 && $average1 < 3.5) {
            $star1 = "&#9733;&#9733;&#9733;";
        } elseif ($average1 >= 3.5 && $average1 < 4.5) {
            $star1 = "&#9733;&#9733;&#9733;&#9733;";
        } elseif ($average1 >= 4.5) {
            $star1 = "&#9733;&#9733;&#9733;&#9733;&#9733;";
        }

    }
}

// Statements that give average ratings for beer with index 2 in the id array

if (!empty($name[2])) {
    $stmt7 = $db->prepare("SELECT rating FROM ratings WHERE beer_ID='$id[2]'");
    $stmt7->execute();
    $id2 = $stmt7->fetchAll(PDO::FETCH_COLUMN, 0);
    if (count($id2) >= 1) {
        $average2 = array_sum($id2) / count($id2);
        $star2 = null;

        if ($average2 >= 0 && $average2 < .5) {
            $star2 = null;
        } elseif ($average2 >= .5 && $average2 < 1.5) {
            $star2 = "&#9733;";
        } elseif ($average2 >= 1.5 && $average2 < 2.5) {
            $star2 = "&#9733;&#9733;";
        } elseif ($average2 >= 2.5 && $average2 < 3.5) {
            $star2 = "&#9733;&#9733;&#9733;";
        } elseif ($average2 >= 3.5 && $average2 < 4.5) {
            $star2 = "&#9733;&#9733;&#9733;&#9733;";
        } elseif ($average2 >= 4.5) {
            $star2 = "&#9733;&#9733;&#9733;&#9733;&#9733;";
        }

    }
}

// Statements that give average ratings for beer with index 3 in the id array

if (!empty($name[3])) {
    $stmt8 = $db->prepare("SELECT rating FROM ratings WHERE beer_ID='$id[3]'");
    $stmt8->execute();
    $id3 = $stmt8->fetchAll(PDO::FETCH_COLUMN, 0);
    if (count($id3) >= 1) {
        $average3 = array_sum($id3) / count($id3);
        $star3 = null;

        if ($average3 >= 0 && $average3 < .5) {
            $star3 = null;
        } elseif ($average3 >= .5 && $average3 < 1.5) {
            $star3 = "&#9733;";
        } elseif ($average3 >= 1.5 && $average3 < 2.5) {
            $star3 = "&#9733;&#9733;";
        } elseif ($average3 >= 2.5 && $average3 < 3.5) {
            $star3 = "&#9733;&#9733;&#9733;";
        } elseif ($average3 >= 3.5 && $average3 < 4.5) {
            $star3 = "&#9733;&#9733;&#9733;&#9733;";
        } elseif ($average3 >= 4.5) {
            $star3 = "&#9733;&#9733;&#9733;&#9733;&#9733;";
        }

    }
}

// Statements that give average ratings for beer with index 4 in the id array

if (!empty($name[4])) {
    $stmt9 = $db->prepare("SELECT rating FROM ratings WHERE beer_ID='$id[4]'");
    $stmt9->execute();
    $id4 = $stmt9->fetchAll(PDO::FETCH_COLUMN, 0);


    if (count($id4) >= 1) {
        $average4 = array_sum($id4) / count($id4);
        $star4 = null;

        if ($average4 >= 0 && $average4 < .5) {
            $star4 = null;
        } elseif ($average4 >= .5 && $average4 < 1.5) {
            $star4 = "&#9733;";
        } elseif ($average4 >= 1.5 && $average4 < 2.5) {
            $star4 = "&#9733;&#9733;";
        } elseif ($average4 >= 2.5 && $average4 < 3.5) {
            $star4 = "&#9733;&#9733;&#9733;";
        } elseif ($average4 >= 3.5 && $average4 < 4.5) {
            $star4 = "&#9733;&#9733;&#9733;&#9733;";
        } elseif ($average4 >= 4.5) {
            $star4 = "&#9733;&#9733;&#9733;&#9733;&#9733;";
        }

    }
}


// Statements that give average ratings for beer with index 5 in the id array

if (!empty($name[5])) {
    $stmt10 = $db->prepare("SELECT rating FROM ratings WHERE beer_ID='$id[5]'");
    $stmt10->execute();
    $id5 = $stmt10->fetchAll(PDO::FETCH_COLUMN, 0);


    if (count($id5) >= 1) {
        $average5 = array_sum($id5) / count($id5);
        $star5 = null;

        if ($average5 >= 0 && $average5 < .5) {
            $star5 = null;
        } elseif ($average5 >= .5 && $average5 < 1.5) {
            $star5 = "&#9733;";
        } elseif ($average5 >= 1.5 && $average5 < 2.5) {
            $star5 = "&#9733;&#9733;";
        } elseif ($average5 >= 2.5 && $average5 < 3.5) {
            $star5 = "&#9733;&#9733;&#9733;";
        } elseif ($average5 >= 3.5 && $average5 < 4.5) {
            $star5 = "&#9733;&#9733;&#9733;&#9733;";
        } elseif ($average5 >= 4.5) {
            $star5 = "&#9733;&#9733;&#9733;&#9733;&#9733;";
        }

    }
}


// Statements that give average ratings for beer with index 6 in the id array

if (!empty($name[6])) {
    $stmt11 = $db->prepare("SELECT rating FROM ratings WHERE beer_ID='$id[6]'");
    $stmt11->execute();
    $id6 = $stmt11->fetchAll(PDO::FETCH_COLUMN, 0);


    if (count($id6) >= 1) {
        $average6 = array_sum($id6) / count($id6);
        $star6 = null;

        if ($average6 >= 0 && $average6 < .5) {
            $star6 = null;
        } elseif ($average6 >= .5 && $average6 < 1.5) {
            $star6 = "&#9733;";
        } elseif ($average6 >= 1.5 && $average6 < 2.5) {
            $star6 = "&#9733;&#9733;";
        } elseif ($average6 >= 2.5 && $average6 < 3.5) {
            $star6 = "&#9733;&#9733;&#9733;";
        } elseif ($average6 >= 3.5 && $average6 < 4.5) {
            $star6 = "&#9733;&#9733;&#9733;&#9733;";
        } elseif ($average6 >= 4.5) {
            $star6 = "&#9733;&#9733;&#9733;&#9733;&#9733;";
        }

    }
}

// Statements that give average ratings for beer with index 7 in the id array

if (!empty($name[7])) {
    $stmt12 = $db->prepare("SELECT rating FROM ratings WHERE beer_ID='$id[7]'");
    $stmt12->execute();
    $id7 = $stmt12->fetchAll(PDO::FETCH_COLUMN, 0);


    if (count($id7) >= 1) {
        $average7 = array_sum($id7) / count($id7);
        $star7 = null;

        if ($average7 >= 0 && $average7 < .5) {
            $star7 = null;
        } elseif ($average7 >= .5 && $average7 < 1.5) {
            $star7 = "&#9733;";
        } elseif ($average7 >= 1.5 && $average7 < 2.5) {
            $star7 = "&#9733;&#9733;";
        } elseif ($average7 >= 2.5 && $average7 < 3.5) {
            $star7 = "&#9733;&#9733;&#9733;";
        } elseif ($average7 >= 3.5 && $average7 < 4.5) {
            $star7 = "&#9733;&#9733;&#9733;&#9733;";
        } elseif ($average7 >= 4.5) {
            $star7 = "&#9733;&#9733;&#9733;&#9733;&#9733;";
        }

    }
}

// Statements that give average ratings for beer with index 8 in the id array

if (!empty($name[8])) {
    $stmt13 = $db->prepare("SELECT rating FROM ratings WHERE beer_ID='$id[8]'");
    $stmt13->execute();
    $id8 = $stmt13->fetchAll(PDO::FETCH_COLUMN, 0);


    if (count($id8) >= 1) {
        $average8 = array_sum($id8) / count($id8);
        $star8 = null;

        if ($average8 >= 0 && $average8 < .5) {
            $star8 = null;
        } elseif ($average8 >= .5 && $average8 < 1.5) {
            $star8 = "&#9733;";
        } elseif ($average8 >= 1.5 && $average8 < 2.5) {
            $star8 = "&#9733;&#9733;";
        } elseif ($average8 >= 2.5 && $average8 < 3.5) {
            $star8 = "&#9733;&#9733;&#9733;";
        } elseif ($average8 >= 3.5 && $average8 < 4.5) {
            $star8 = "&#9733;&#9733;&#9733;&#9733;";
        } elseif ($average8 >= 4.5) {
            $star8 = "&#9733;&#9733;&#9733;&#9733;&#9733;";
        }

    }
}


// Statements that give average ratings for beer with index 9 in the id array

if (!empty($name[9])) {
    $stmt14 = $db->prepare("SELECT rating FROM ratings WHERE beer_ID='$id[9]'");
    $stmt14->execute();
    $id9 = $stmt14->fetchAll(PDO::FETCH_COLUMN, 0);


    if (count($id9) >= 1) {
        $average9 = array_sum($id9) / count($id9);
        $star9 = null;

        if ($average9 >= 0 && $average9 < .5) {
            $star9 = null;
        } elseif ($average9 >= .5 && $average9 < 1.5) {
            $star9 = "&#9733;";
        } elseif ($average9 >= 1.5 && $average9 < 2.5) {
            $star9 = "&#9733;&#9733;";
        } elseif ($average9 >= 2.5 && $average9 < 3.5) {
            $star9 = "&#9733;&#9733;&#9733;";
        } elseif ($average9 >= 3.5 && $average9 < 4.5) {
            $star9 = "&#9733;&#9733;&#9733;&#9733;";
        } elseif ($average9 >= 4.5) {
            $star9 = "&#9733;&#9733;&#9733;&#9733;&#9733;";
        }

    }
}

// Statements that give average ratings for beer with index 9 in the id array

if (!empty($name[10])) {
    $stmt15 = $db->prepare("SELECT rating FROM ratings WHERE beer_ID='$id[10]'");
    $stmt15->execute();
    $id10 = $stmt15->fetchAll(PDO::FETCH_COLUMN, 0);


    if (count($id10) >= 1) {
        $average10 = array_sum($id10) / count($id10);
        $star10 = null;

        if ($average10 >= 0 && $average10 < .5) {
            $star10 = null;
        } elseif ($average10 >= .5 && $average10 < 1.5) {
            $star10 = "&#9733;";
        } elseif ($average10 >= 1.5 && $average10 < 2.5) {
            $star10 = "&#9733;&#9733;";
        } elseif ($average10 >= 2.5 && $average10 < 3.5) {
            $star10 = "&#9733;&#9733;&#9733;";
        } elseif ($average10 >= 3.5 && $average10 < 4.5) {
            $star10 = "&#9733;&#9733;&#9733;&#9733;";
        } elseif ($average10 >= 4.5) {
            $star10 = "&#9733;&#9733;&#9733;&#9733;&#9733;";
        }

    }
}

// Statements that give average ratings for beer with index 9 in the id array

if (!empty($name[11])) {
    $stmt16 = $db->prepare("SELECT rating FROM ratings WHERE beer_ID='$id[11]'");
    $stmt16->execute();
    $id11 = $stmt16->fetchAll(PDO::FETCH_COLUMN, 0);


    if (count($id11) >= 1) {
        $average11 = array_sum($id11) / count($id11);
        $star11 = null;

        if ($average11 >= 0 && $average11 < .5) {
            $star11 = null;
        } elseif ($average11 >= .5 && $average11 < 1.5) {
            $star11 = "&#9733;";
        } elseif ($average11 >= 1.5 && $average11 < 2.5) {
            $star11 = "&#9733;&#9733;";
        } elseif ($average11 >= 2.5 && $average11 < 3.5) {
            $star11 = "&#9733;&#9733;&#9733;";
        } elseif ($average11 >= 3.5 && $average11 < 4.5) {
            $star11 = "&#9733;&#9733;&#9733;&#9733;";
        } elseif ($average11 >= 4.5) {
            $star11 = "&#9733;&#9733;&#9733;&#9733;&#9733;";
        }

    }
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
    <title>Primal Brewery | Brew Locker</title>

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

                        <li class="mega-menu current"><a href="#"><div>Local Breweries</div></a>
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
            <img src="images/brewery/primal.png" class="alignleft  img-thumbnail notopmargin nobottommargin" alt="Avatar" style="max-width: 84px;">
            <h1>Primal Brewery</h1>
            <span>16432 Old Statesville Rd, Huntersville, NC 28078</span>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Primal Brewery</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap nobottompadding">

            <div class="container clearfix">


                <!-- First Row
                ============================================= -->

                <div class="row">

                    <div class="col-md-3 col-sm-6 bottommargin">

                        <div class="team">
                            <div class="team-desc">
                                <div class="team-title"><h4><?php if (!empty($name[0])) { echo $name[0]; };?></h4><span><?php if (!empty($abv[0])) { echo $abv[0]; echo "% ABV"; };?></span><?php if (!empty($name[0])) { if (count($id0) > 0) {echo $star0;}} ?></div>

                                <p><?php if (!empty($desc[0])) { echo $desc[0]; };?></p>
                                <form method="post" action="rateabeer.php">
                                    <input type="hidden" name="id" value="<?php echo $id[0];?>">
                                    <input type="hidden" name="name" value="<?php echo $name[0];?>">
                                    <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                    <input type="hidden" name="location" value="<?php echo $location;?>">
                                    <?php if (isset($_SESSION['userID']) && $type == "user") { ?>  <?php if (!empty($name[0])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" name=\"submitRate\" value=\"Rate\">Rate</button>"; };?> <?php } ?>
                                </form>
                                <form action="reviews.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id[0];?>">
                                    <input type="hidden" name="name" value="<?php echo $name[0];?>">
                                    <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                    <?php if (!empty($name[0])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" name=\"submitReview\" value=\"Reviews\">View Reviews</button>"; };?>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-3 col-sm-6 bottommargin">

                        <div class="team">
                            <div class="team-desc">
                                <div class="team-title"><h4><?php if (!empty($name[1])) { echo $name[1]; };?></h4><span><?php if (!empty($abv[1])) { echo $abv[1]; echo "% ABV"; };?></span><?php if (!empty($name[1])) { if (count($id1) > 0) {echo $star1;}} ?></div>
                                <p><?php if (!empty($desc[1])) { echo $desc[1]; };?></p>
                                <form method="post" action="rateabeer.php">
                                    <input type="hidden" name="id" value="<?php echo $id[1];?>">
                                    <input type="hidden" name="name" value="<?php echo $name[1];?>">
                                    <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                    <input type="hidden" name="location" value="<?php echo $location;?>">
                                    <?php if (isset($_SESSION['userID']) && $type == "user") { ?> <?php if (!empty($name[1])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"Rate\">Rate</button>"; };?><?php } ?>
                                </form>
                                <form action="reviews.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id[1];?>">
                                    <input type="hidden" name="name" value="<?php echo $name[1];?>">
                                    <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                    <?php if (!empty($name[1])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" name=\"submitReview\" value=\"Reviews\">View Reviews</button>"; };?>
                                </form>

                            </div>
                        </div>

                    </div>

                    <div class="col-md-3 col-sm-6 bottommargin">

                        <div class="team">
                            <div class="team-desc">
                                <div class="team-title"><h4><?php if (!empty($name[2])) { echo $name[2]; };?></h4><span><?php if (!empty($abv[2])) { echo $abv[2]; echo "% ABV"; };?></span><?php if (!empty($name[2])) { if (count($id2) > 0) {echo $star2;}} ?></div>
                                <p><?php if (!empty($desc[2])) { echo $desc[2]; };?></p>
                                <form method="post" action="rateabeer.php">
                                    <input type="hidden" name="id" value="<?php echo $id[2];?>">
                                    <input type="hidden" name="name" value="<?php echo $name[2];?>">
                                    <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                    <input type="hidden" name="location" value="<?php echo $location;?>">
                                    <?php if (isset($_SESSION['userID']) && $type == "user") { ?> <?php if (!empty($name[2])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"Rate\">Rate</button>"; };?><?php } ?>
                                </form>
                                <form action="reviews.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id[2];?>">
                                    <input type="hidden" name="name" value="<?php echo $name[2];?>">
                                    <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                    <?php if (!empty($name[2])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" name=\"submitReview\" value=\"Reviews\">View Reviews</button>"; };?>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-3 col-sm-6 bottommargin">

                        <div class="team">
                            <div class="team-desc">
                                <div class="team-desc">
                                    <div class="team-title"><h4><?php if (!empty($name[3])) { echo $name[3]; };?></h4><span><?php if (!empty($abv[3])) { echo $abv[3]; echo "% ABV"; };?></span><?php if (!empty($name[3])) { if (count($id3) > 0) {echo $star3;}} ?></div>
                                    <p><?php if (!empty($desc[3])) { echo $desc[3]; };?></p>
                                    <form method="post" action="rateabeer.php">
                                        <input type="hidden" name="id" value="<?php echo $id[3];?>">
                                        <input type="hidden" name="name" value="<?php echo $name[3];?>">
                                        <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                        <input type="hidden" name="location" value="<?php echo $location;?>">
                                        <?php if (isset($_SESSION['userID']) && $type == "user") { ?><?php if (!empty($name[3])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"Rate\">Rate</button>"; };?><?php } ?>
                                    </form>
                                    <form action="reviews.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $id[3];?>">
                                        <input type="hidden" name="name" value="<?php echo $name[3];?>">
                                        <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                        <?php if (!empty($name[3])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" name=\"submitReview\" value=\"Reviews\">View Reviews</button>"; };?>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


                <!-- Second Row
                ============================================= -->

                <div class="row">

                    <div class="col-md-3 col-sm-6 bottommargin">

                        <div class="team">
                            <div class="team-desc">
                                <div class="team-title"><h4><?php if (!empty($name[4])) { echo $name[4]; };?></h4><span><?php if (!empty($abv[4])) { echo $abv[4]; echo "% ABV"; };?></span><?php if (!empty($name[4])) { if (count($id4) > 0) {echo $star4;}} ?></div>
                                <p><?php if (!empty($desc[4])) { echo $desc[4]; };?></p>
                                <form method="post" action="rateabeer.php">
                                    <input type="hidden" name="id" value="<?php echo $id[4];?>">
                                    <input type="hidden" name="name" value="<?php echo $name[4];?>">
                                    <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                    <input type="hidden" name="location" value="<?php echo $location;?>">
                                    <?php if (isset($_SESSION['userID']) && $type == "user") { ?><?php if (!empty($name[4])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"Rate\">Rate</button>"; };?><?php } ?>
                                </form>
                                <form action="reviews.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id[4];?>">
                                    <input type="hidden" name="name" value="<?php echo $name[4];?>">
                                    <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                    <?php if (!empty($name[4])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" name=\"submitReview\" value=\"Reviews\">View Reviews</button>"; };?>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-3 col-sm-6 bottommargin">

                        <div class="team">
                            <div class="team-desc">
                                <div class="team-title"><h4><?php if (!empty($name[5])) { echo $name[5]; };?></h4><span><?php if (!empty($abv[5])) { echo $abv[5]; echo "% ABV"; };?></span><?php if (!empty($name[5])) { if (count($id5) > 0) {echo $star5;}} ?></div>
                                <p><?php if (!empty($desc[5])) { echo $desc[5]; };?></p>
                                <form method="post" action="rateabeer.php">
                                    <input type="hidden" name="id" value="<?php echo $id[5];?>">
                                    <input type="hidden" name="name" value="<?php echo $name[5];?>">
                                    <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                    <input type="hidden" name="location" value="<?php echo $location;?>">
                                    <?php if (isset($_SESSION['userID']) && $type == "user") { ?><?php if (!empty($name[5])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"Rate\">Rate</button>"; };?><?php } ?>
                                </form>
                                <form action="reviews.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id[5];?>">
                                    <input type="hidden" name="name" value="<?php echo $name[5];?>">
                                    <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                    <?php if (!empty($name[5])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" name=\"submitReview\" value=\"Reviews\">View Reviews</button>"; };?>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-3 col-sm-6 bottommargin">

                        <div class="team">
                            <div class="team-desc">
                                <div class="team-title"><h4><?php if (!empty($name[6])) { echo $name[6]; };?></h4><span><?php if (!empty($abv[6])) { echo $abv[6]; echo "% ABV"; };?></span><?php if (!empty($name[6])) { if (count($id6) > 0) {echo $star6;}} ?></div>
                                <p><?php if (!empty($desc[6])) { echo $desc[6]; };?></p>
                                <form method="post" action="rateabeer.php">
                                    <input type="hidden" name="id" value="<?php echo $id[6];?>">
                                    <input type="hidden" name="name" value="<?php echo $name[6];?>">
                                    <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                    <input type="hidden" name="location" value="<?php echo $location;?>">
                                    <?php if (isset($_SESSION['userID']) && $type == "user") { ?><?php if (!empty($name[6])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"Rate\">Rate</button>"; };?><?php } ?>
                                </form>
                                <form action="reviews.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id[6];?>">
                                    <input type="hidden" name="name" value="<?php echo $name[6];?>">
                                    <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                    <?php if (!empty($name[6])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" name=\"submitReview\" value=\"Reviews\">View Reviews</button>"; };?>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-3 col-sm-6 bottommargin">

                        <div class="team">
                            <div class="team-desc">
                                <div class="team-title"><h4><?php if (!empty($name[7])) { echo $name[7]; };?></h4><span><?php if (!empty($abv[7])) { echo $abv[7]; echo "% ABV"; };?></span><?php if (!empty($name[7])) { if (count($id7) > 0) {echo $star7;}} ?></div>
                                <p><?php if (!empty($desc[7])) { echo $desc[7]; };?></p>
                                <form method="post" action="rateabeer.php">
                                    <input type="hidden" name="id" value="<?php echo $id[7];?>">
                                    <input type="hidden" name="name" value="<?php echo $name[7];?>">
                                    <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                    <input type="hidden" name="location" value="<?php echo $location;?>">
                                    <?php if (isset($_SESSION['userID']) && $type == "user") { ?><?php if (!empty($name[7])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"Rate\">Rate</button>"; };?><?php } ?>
                                </form>
                                <form action="reviews.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id[7];?>">
                                    <input type="hidden" name="name" value="<?php echo $name[7];?>">
                                    <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                    <?php if (!empty($name[7])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" name=\"submitReview\" value=\"Reviews\">View Reviews</button>"; };?>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Third Row
                ============================================= -->

                <div class="row">

                    <div class="col-md-3 col-sm-6 bottommargin">

                        <div class="team">
                            <div class="team-desc">
                                <div class="team-title"><h4><?php if (!empty($name[8])) { echo $name[8]; };?></h4><span><?php if (!empty($abv[8])) { echo $abv[8]; echo "% ABV"; };?></span><?php if (!empty($name[8])) { if (count($id8) > 0) {echo $star8;}} ?></div>
                                <p><?php if (!empty($desc[8])) { echo $desc[8]; };?></p>
                                <form method="post" action="rateabeer.php">
                                    <input type="hidden" name="id" value="<?php echo $id[8];?>">
                                    <input type="hidden" name="name" value="<?php echo $name[8];?>">
                                    <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                    <input type="hidden" name="location" value="<?php echo $location;?>">
                                    <?php if (isset($_SESSION['userID']) && $type == "user") { ?><?php if (!empty($name[8])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"Rate\">Rate</button>"; };?><?php } ?>
                                </form>
                                <form action="reviews.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id[8];?>">
                                    <input type="hidden" name="name" value="<?php echo $name[8];?>">
                                    <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                    <?php if (!empty($name[8])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" name=\"submitReview\" value=\"Reviews\">View Reviews</button>"; };?>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-3 col-sm-6 bottommargin">

                        <div class="team">
                            <div class="team-desc">
                                <div class="team-title"><h4><?php if (!empty($name[9])) { echo $name[9]; };?></h4><span><?php if (!empty($abv[9])) { echo $abv[9]; echo "% ABV"; };?></span><?php if (!empty($name[9])) { if (count($id9) > 0) {echo $star9;}} ?></div>
                                <p><?php if (!empty($desc[9])) { echo $desc[9]; };?></p>
                                <form method="post" action="rateabeer.php">
                                    <input type="hidden" name="id" value="<?php echo $id[9];?>">
                                    <input type="hidden" name="name" value="<?php echo $name[9];?>">
                                    <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                    <input type="hidden" name="location" value="<?php echo $location;?>">
                                    <?php if (isset($_SESSION['userID']) && $type == "user") { ?><?php if (!empty($name[9])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"Rate\">Rate</button>"; };?><?php } ?>
                                </form>
                                <form action="reviews.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id[9];?>">
                                    <input type="hidden" name="name" value="<?php echo $name[9];?>">
                                    <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                    <?php if (!empty($name[9])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" name=\"submitReview\" value=\"Reviews\">View Reviews</button>"; };?>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-3 col-sm-6 bottommargin">

                        <div class="team">
                            <div class="team-desc">
                                <div class="team-title"><h4><?php if (!empty($name[10])) { echo $name[10]; };?></h4><span><?php if (!empty($abv[10])) { echo $abv[10]; echo "% ABV"; };?></span><?php if (!empty($name[10])) { if (count($id10) > 0) {echo $star10;}} ?></div>
                                <p><?php if (!empty($desc[10])) { echo $desc[10]; };?></p>
                                <form method="post" action="rateabeer.php">
                                    <input type="hidden" name="id" value="<?php echo $id[10];?>">
                                    <input type="hidden" name="name" value="<?php echo $name[10];?>">
                                    <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                    <input type="hidden" name="location" value="<?php echo $location;?>">
                                    <?php if (isset($_SESSION['userID']) && $type == "user") { ?><?php if (!empty($name[10])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"Rate\">Rate</button>"; };?><?php } ?>
                                </form>
                                <form action="reviews.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id[10];?>">
                                    <input type="hidden" name="name" value="<?php echo $name[10];?>">
                                    <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                    <?php if (!empty($name[10])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" name=\"submitReview\" value=\"Reviews\">View Reviews</button>"; };?>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-3 col-sm-6 bottommargin">

                        <div class="team">
                            <div class="team-desc">
                                <div class="team-desc">
                                    <div class="team-title"><h4><?php if (!empty($name[11])) { echo $name[11]; };?></h4><span><?php if (!empty($abv[11])) { echo $abv[11]; echo "% ABV"; };?></span><?php if (!empty($name[11])) { if (count($id11) > 0) {echo $star11;}} ?></div>
                                    <p><?php if (!empty($desc[11])) { echo $desc[11]; };?></p>
                                    <form method="post" action="rateabeer.php">
                                        <input type="hidden" name="id" value="<?php echo $id[11];?>">
                                        <input type="hidden" name="name" value="<?php echo $name[11];?>">
                                        <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                        <input type="hidden" name="location" value="<?php echo $location;?>">
                                        <?php if (isset($_SESSION['userID']) && $type == "user") { ?><?php if (!empty($name[11])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"Rate\">Rate</button>"; };?><?php } ?>
                                    </form>
                                    <form action="reviews.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $id[11];?>">
                                        <input type="hidden" name="name" value="<?php echo $name[11];?>">
                                        <input type="hidden" name="brewery" value="<?php echo $brewery;?>">
                                        <?php if (!empty($name[11])) { echo "<button class=\"button button-3d nomargin\" type=\"submit\" name=\"submitReview\" value=\"Reviews\">View Reviews</button>"; };?>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

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

</body>
</html>