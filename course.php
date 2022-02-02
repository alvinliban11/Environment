<?php 
    session_start();
    // unset($_SESSION['quiz_no']);
    // unset($_SESSION['score']);
    include 'include/connection.inc.php';
    include 'include/function.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php include 'include/header_links.php'; ?>
  <title></title>
    <style type="text/css">
        /* The sidebar menu */
  .sidenav {
      margin-top: 55px;
    height: 100%; /* Full-height: remove this if you want "auto" height */
    width: 200px; /* Set the width of the sidebar */
    position: fixed; /* Fixed Sidebar (stay in place on scroll) */
    z-index: 1; /* Stay on top */
    top: 0; /* Stay at the top */
    left: 0;
   /* background-color: #111;  Black */
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 20px;
  }

  /* Style page content */
  .main {
    padding-top: 80px; /* Same as the width of the sidebar */
  }
      .list-group a {
      color: black;
      font-size:15px;
      margin: 4px;

    }

    .list-group a:hover {
      color: blue;
      border-left: 7px solid green;
    }
    /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }

  </style>
</head>
<body>
  <?php include 'include/nav.php'; ?>

    <!-- Side navigation -->
  <div class="sidenav bg-light">
      <div class="list-group">
       <span class="text-secondary">&nbsp;Lesson List</span>
       <?php showLesson($conn, $_GET['context_id']);?>
      </div>
  </div>

  <div class="container main" >
  <?php 
            if (isset($_GET['lesson_id'])) {
              echo showContext($conn, $_GET['lesson_id']); 
            }else if (isset($_GET['qlesson_id'])) {
              include 'lesson_quiz.php';
            }else{
              echo '';
            }     
            ?>
  </div>

</body>
</html>