<?php
/**
 * Created by PhpStorm.
 * User: aaljarra
 * Date: 3/20/17
 * Time: 4:15 PM
 */
session_start();
//require_once ('database.php');
// new data
//$user = 'Bob';
//$password = 'Bob123';

$user = $_POST['username'];
$password = $_POST['password'];
//print_r($_POST) ;
// query
$result = $db->prepare("SELECT * FROM users WHERE uname= :userName AND pword= :password");
$result->bindParam(':userName', $user);
$result->bindParam(':password', $password);
$result->execute();
$rows = $result->fetch();
$_SESSION['userName'] = $rows['uname'] ;
$_SESSION['type'] = $rows['type'] ;
$_SESSION['fname'] = $rows['fname'] ;
$_SESSION['lname'] = $rows['lname'] ;
$_SESSION['userID'] = $rows['ID'] ;
$_SESSION['pic'] = $rows['pic'] ;
$_SESSION['brew_ID'] = $rows['brew_ID'] ;
echo $rows['type'] ;

if($rows > 0) {
    $_SESSION['userName'] = $rows['uname'] ;
    $_SESSION['type'] = $rows['type'] ;
    $_SESSION['userID'] = $rows['ID'] ;

    if($rows['type'] == 'user')
        header("location: userHome.php");
    elseif ($rows['type'] == 'brewery')
        header("location: brewHome.php");
    else
        header("location: role_error.html");
}
else{
    $errmsg = 'Username and Password are not found';
}
if(isset($errmsg)) {
    $_SESSION['ERRMSG'] = $errmsg;
    session_write_close();
    header("location: loginError.php");
    exit();
}
