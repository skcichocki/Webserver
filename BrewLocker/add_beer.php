<?php
session_start();
include 'database.php';

$name = $_POST['bname'];
$abv = $_POST['abv'];
$desc = $_POST['desc'];
$brewID = $_POST['brewID'];

$stmt= $db->prepare("INSERT INTO beers (brewery_ID,beer_name,abv,beer_description) VALUES ('$brewID','$name','$abv','$desc')");
$stmt->execute();

header("location: brewHome.php");