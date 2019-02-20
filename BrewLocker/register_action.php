<?php
include 'database.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$pword = $_POST['pword'];
$type = "user";


$stmt = $db->prepare("INSERT INTO users (uname,pword,type,fname,lname) VALUES ('$uname','$pword','$type','$fname','$lname')");
$stmt->execute();

header('Location: account_success.php');

