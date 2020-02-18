<?php

$servername = "us-cdbr-iron-east-04.cleardb.net";
$username = "b26153b5a08219";
$password = "fe073154";


$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// $query = "CREATE DATABASE shells2020";
// if (mysqli_query($conn, $query)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }


mysqli_select_db($conn,"heroku_ba68f91c8dee117");

$query = "CREATE TABLE registration (
college_name VARCHAR(300) NOT NULL, 
contact_email VARCHAR(50) NOT NULL PRIMARY KEY, 
contact_phone BIGINT NOT NULL UNIQUE,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
total_participant INT(2) DEFAULT 0";

for($i=1;$i<=15;$i++)
        $query=$query.", participant".$i." VARCHAR(50) DEFAULT NULL";

$query=$query.")";

if (mysqli_query($conn, $query)) {
    echo " Table created successfully";
} else {
    echo " Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);