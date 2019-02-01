<?php 
session_start();
// $un = $_SESSION['uname'];
// unset($_SESSION['uname']);
session_destroy();
header('location:login.php');
?>