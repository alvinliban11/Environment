<?php 

include 'include/header.php';
include 'include/connection.inc.php';
include 'include/function.inc.php';

$_SESSION['lesson_id'] = 2;
$_SESSION['user_id'] = 1;




 ?>
<head>
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
  margin-left: 200px; /* Same as the width of the sidebar */
  padding: 0px 10px;
  margin-top: -70px;
}

.list-group a:hover {

  border-left: 7px solid green;
}
/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
  </style>

</head>
<main id="main">
<!-- Side navigation -->
<div class="sidenav bg-light">
<div class="list-group">
 <span class="text-primary">Lessons</span>
  <a href="lesson.php" class="list-group-item list-group-item-action" >Reading: Lesson 1</a>
  <a href="lesson_quiz.php" class="list-group-item list-group-item-action" style=" border-left: 7px solid green;">Lesson 1 - Quiz</a>
  <a href="#" class="list-group-item list-group-item-action">...</a>
</div>
</div>

<!-- Page content -->
<div class="main">


  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="course_List.php">Course List</a></li>
        <li class="breadcrumb-item" aria-current="page"><a href="course_manage.php">Course Code - Book 1</a></li>
          <li class="breadcrumb-item active" aria-current="page">Lessons</li>
     <!--  <li class="breadcrumb-item"><a href="#">Library</a></li> -->
  </ol>
</nav>
<?php


if (!is_null(checkUserQuiz($conn, $_SESSION['user_id'], $_SESSION['lesson_id']))) {
  include 'resultQuiz.php';
}else{


$quiz_no = 1;
if (isset($_GET['quiz_no'])) {
  $quiz_no = $_GET['quiz_no'];
}

?>




<div class="container">

    <div class="card">
      <div class="card-header"> <h2>Lesson 1 - Quiz <?php echo $quiz_no.' / '.checkFinalQuiz($conn, $_SESSION['lesson_id']); ?></h2></div>
         <form action="include/quiz.inc.php" method="POST">
      <div class="card-body p-0">

          <?php  showQuestion($conn, $_SESSION['lesson_id'], $quiz_no); ?>




      </div>
       
      <div class="card-footer">
             
              <?php
                if (isset($_SESSION['revealAns'])) {
                  if ($_SESSION['revealAns'] == "correct") {
                    echo 'correct';

                  }

                  if ($_SESSION['revealAns'] == "wrong") {
                    echo 'wrong';
                  }
                  echo ' <button type="submit" class="btn btn-success" name="quizBtn">Next</button>';
                  unset($_SESSION['revealAns']);
                }else{
                  echo ' <button type="submit" class="btn btn-primary" name="revealBtn">Check</button>';
                }

           ?>    
                 
      </div>
       </form>
       
    </div>
  </div>


<?php } ?>

</div>


<br>
</div>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

//     trypo = function() {
//          $.ajax({
//     type: 'POST',
//     url: 'include/show.php',
//     data: { 'quiz_id'  : '2'},
//     dataType: "json",
//     success: function(response) {


//     }
//     });
// };
</script>
<?php include 'include/footer.php'; ?>