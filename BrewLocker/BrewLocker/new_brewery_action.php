<?php

$bname = $_POST['bname'];
$oname = $_POST['oname'];
$uname = $_POST['uname'];
$pword = $_POST['pword'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$phone = $_POST['phone'];

$stmt = $db->prepare("INSERT INTO users (brewery_Name,owner,uname,pword,lname) VALUES ('$uname','$pword','$type','$fname','$lname')");
$stmt->execute();