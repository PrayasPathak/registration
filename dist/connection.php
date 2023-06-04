<?php 
    session_start();
    $host = "localhost";
    $username = "root";
    $user_password = '';
    $database = 'registration';

    $con = mysqli_connect($host, $username, $user_password, $database);
?>