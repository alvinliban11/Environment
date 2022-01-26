<?php

$localhost = "localhost";
$dbname = "root";
$pass = "";
$dbname = "learners";

$conn = $query_connect($localhost, $dbname, $pass, $dbname);

if(!$conn){
    die("connection failed". $conn->mysql_error);
}

?>