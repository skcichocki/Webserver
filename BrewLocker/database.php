<?php
    $dsn = 'mysql:host=localhost:3307;dbname=brew_locker';
    $username = 'root';
    $password = 'Sailboat13';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
//        include('database_error.php');
        exit();
    }
?>