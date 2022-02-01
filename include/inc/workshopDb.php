<?php

$localhost = "localhost";
$username = "root";
$pass = "";
$dbname = "learners";

$conn = new mysqli($localhost, $username, $pass, $dbname);

if($conn->connect_error){
    die("Connection failed". $conn->mysqli_error);
}

