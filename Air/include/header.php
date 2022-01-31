<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/nav.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--
    <link rel="stylesheet" href="style/index.css">
  -->
    <link rel="stylesheet" href="style/footer.css">
</head>
<body>
<?php
if (isset($_SESSION['learner_id'])) {
    echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href=""></a>
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" onclick="openNav()" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-5">
                  <a class="nav-link btn  text-white" href="../index.php">Home</span></a>
                </li>
                <li class="nav-item mr-5">
                  <a class="nav-link btn  text-white" href="../about.php">About</a>
                </li>
                 <li class="nav-item mr-5">
                  <a class="nav-link btn  text-white" href="../contact.php">Contact Us</a>
                </li>
                <li class="nav-item mr-5">
                  <a class="nav-link btn  text-white" href="../course_list.php">Courses</a>
                </li>
                 <li class="nav-item mr-5">
                  <a class="nav-link btn  text-white" href="../workshop_list.php">Workshop</a>
                </li>
                <li class="nav-item mr-5">
                  <a class="nav-link btn  text-white" href="../enrollmentForStudent.php">Profile</a>
                </li>
               <li class="nav-item mr-5">
                  <a class="nav-link btn  text-white" href="../logout.php">Logout</a>
                </li>
              </ul>
            </div>
          </nav>';
}else{
  echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href=""></a>
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" onclick="openNav()" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-5">
                  <a class="nav-link btn  text-white" href="index.php">Home</span></a>
                </li>
                <li class="nav-item mr-5">
                  <a class="nav-link btn  text-white" href="about.php">About</a>
                </li>
                <li class="nav-item mr-5">
                  <a class="nav-link btn  text-white" href="login.php">Login</a>
                </li>
                <li class="nav-item mr-5">
                  <a class="nav-link btn  text-white" href="signUp.php">Sign Up</a>
                </li>
                <li class="nav-item mr-5">
                  <a class="nav-link btn  text-white" href="contact.php">Contact Us</a>
                </li>
              </ul>
            </div>
          </nav>';
}

 ?>
