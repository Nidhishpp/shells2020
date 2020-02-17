<?php
$server ="localhost";
$user="root";
$database = "shells2020";
$pass="";

$connection = mysqli_connect($server, $user,$pass);

if (!$connection)  die ('Could not connect: '.mysqli_connect_error());
mysqli_select_db($connection,$database);
 
?>
