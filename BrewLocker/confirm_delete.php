<?php
session_start();
include 'database.php';

$id = $_POST['id'];


$stmt= $db->prepare("DELETE FROM beers WHERE beer_ID = '$id'");
$stmt->execute();

header("location: brewHome.php");
