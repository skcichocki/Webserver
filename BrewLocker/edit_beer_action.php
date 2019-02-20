<?php
session_start();
include 'database.php';

$id = $_POST['id'];
$name = $_POST['name'];
$desc = $_POST['desc'];
$abv = $_POST['abv'];

$stmt= $db->prepare("UPDATE beers SET beer_name = '$name',abv = '$abv',beer_description = '$desc' WHERE beer_ID = '$id'");
$stmt->execute();

header("location: brewHome.php");