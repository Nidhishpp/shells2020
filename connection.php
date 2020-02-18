<?php
// $server ="us-cdbr-iron-east-04.cleardb.net";
// $user="b26153b5a08219";
// $database = "heroku_ba68f91c8dee117";
// $pass="fe073154";

$server ="localhost";
$user="root";
$database = "shells2020";
$pass="";

$connection = mysqli_connect($server, $user,$pass);

if (!$connection)  die ('Could not connect: '.mysqli_connect_error());
mysqli_select_db($connection,$database);
 
?>
