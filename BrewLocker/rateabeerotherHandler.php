<?php
include 'database.php';
session_start();
$beerid= $_POST['beerid'];
$rate= $_POST['rate'];
$beer= $_POST['beer'];
$brewery= $_POST['brewery'];
$where= $_POST['where'];
$when= $_POST['when'];
$desc= $_POST['desc'];
$star = null;
$userID = $_SESSION['userID'];

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

$stmt = $db->prepare("INSERT INTO ratings (beer_ID,rating) VALUES ('$beerid','$rate')");
$stmt->execute();

$stmt2 = $db->prepare("INSERT INTO reviews (user_ID,beer_ID,brewery,name,where_tried,when_tried,rate,description) VALUES ('$userID','$beerid','$brewery','$beer','$where','$when','$star','$desc')");
$stmt2->execute();

header( 'Location: userhome.php');
