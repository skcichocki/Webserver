<?php
include 'database.php';
/**This Code will handle inserting the ratings into the rating table**/

$star = null;
$name = $_POST['name'];
$brewery = $_POST['brewery'];
$id = $_POST['id'];
$rate = $_POST['rate'];
$location = $_POST['location'];
$when = $_POST['when'];
$where = $_POST['where'];
$desc = $_POST['desc'];
$userID = $_POST['userID'];


if ($rate == 1) {
    $star = "&#9733;";
}
if ($rate == 2) {
    $star = "&#9733;&#9733;";
}

if ($rate == 3) {
    $star = "&#9733;&#9733;&#9733;";
}

if ($rate == 4) {
    $star = "&#9733;&#9733;&#9733;&#9733;";
}

if ($rate == 5) {
    $star = "&#9733;&#9733;&#9733;&#9733;&#9733;";
}


$stmt = $db->prepare("INSERT INTO ratings (beer_ID,rating) VALUES ('$id','$rate')");
$stmt->execute();

$stmt2 = $db->prepare("INSERT INTO reviews (user_ID,beer_ID,brewery,name,where_tried,when_tried,rate,description) VALUES ('$userID','$id','$brewery','$name','$where','$when','$star','$desc')");
$stmt2->execute();

header( 'Location: ' . $location );