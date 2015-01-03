<?php 
session_start();
unset($_SESSION['session_username']);
unset($_SESSION['session_admin']);
session_destroy();
header("location:../index.php");
?>