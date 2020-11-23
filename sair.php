<?php 

session_start();

$_SESSION['name'] = "";


unset($_SESSION['name']);


unset($_SESSION);

session_destroy();

header('Location:login.php');
?>