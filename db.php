

<?php
$name = "localhost";
$uname = "root";
$password = "";

$db_name = "environment_db";

$conn = mysqli_connect($name, $uname, $password, $db_name);


if (!$conn){
    echo "Connection failed!";
}



