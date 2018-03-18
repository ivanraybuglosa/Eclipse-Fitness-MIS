<?php
session_start();
if(!isset($_SESSION["username"])){
    echo "<script>alert('Invalid user credentials!Please log-in');window.location.href='../login.php';</script>";
exit(); }
?>