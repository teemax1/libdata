<?php
session_start();
$_SESSION['loggedin'] = $email;

session_unset();
$_SESSION['loggedin'] = $email;
header('Location:login.php');


session_destroy();
$_SESSION['loggedin'] = $email;
header('Location:login.php');








?>