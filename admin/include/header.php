<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style/nav.css">
</head>
<body>
    <nav class="fixed-top" style="z-index:1;">
        <span onclick="openav()">&#9776;</span>
        <span class="navbar-brand"><?php 
        if($currentPage === "index"){
            echo "Environmental Management Workshop";
        }
        if($currentPage === "admin"){
            echo "Admin";
        }
        if($currentPage === "scheduling"){
            echo "Scheduling";
        }
        if($currentPage === "aps"){
            echo "Air Polution Solutions";
        }
        if($currentPage === "crds"){
            echo "Coral Reefs Degration Solutions";
        }
        if($currentPage === "wps"){
            echo "Water Pollution Solutions";
        }
        if($currentPage === "enrollment"){
            echo "Enrollment";
        }
        if($currentPage === "non student Enrollment"){
            echo "Non-Student Enrollment";
        }
        if($currentPage === " ewp"){
            echo "Ecological Waste Pollutions";
        }
        if($currentPage === " pps"){
            echo "Plants Pollution Solution";
        }
        ?></span>
    </nav>
    <div id="sidenav" class="sidenav">
        <a href="javascript:void(0)" class="closetbtn" onclick="closenav()">&times;</a>
        <ul>
            <li  ><a href="index.php"  class="btn active">Dashboard</a></li>
            <li><a href="scheduling.php"  class="btn" >Scheduling</a></li>
            <li ><a href="#"  class="btn">Enrollment</a></li>
            <li><a href="#"  class="btn">Courses</a></li>
            <li  ><a href="admin.php" class="btn">Admin</a></li>
        </ul>
    </div>