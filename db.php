<?php 
session_start();
$host ="localhost";
$user ="root";
$pass = "";
$dbname ="sellitems";


$conn = mysqli_connect($host, $user, $pass, $dbname) or die();
?>