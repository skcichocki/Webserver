<?php
/**
 * Created by PhpStorm.
 * User: aaljarra
 * Date: 3/20/17
 * Time: 5:43 PM
 */
session_start();
unset($_SESSION['userName']);
unset($_SESSION['type']);
unset($_SESSION['fname']);
unset($_SESSION['lname']);
unset($_SESSION['userID']);
session_destroy() ;
header("Location:index.php");
?>
