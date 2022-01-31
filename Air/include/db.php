<?php

$localhost = "localhost";
$username = "root";
$pass = "";
$dbname = "environment_db";

$conn = new mysqli($localhost, $username, $pass, $dbname);

if($conn->connect_error){
    die("connection failed". $conn->mysqli_error);
}

?>