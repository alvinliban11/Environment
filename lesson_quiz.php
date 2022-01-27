<?php 

//include 'include/header.php';
include 'include/connection.inc.php';
include 'include/function.inc.php';

$_SESSION['lesson_id'] = 2;
$_SESSION['user_id'] = 1;

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>

<!-- <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="course_List.php">Course List</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="course_manage.php">Course Code - Book 1</a></li>
              <li class="breadcrumb-item active" aria-current="page">Lessons</li>
        
      </ol>
    </nav>
</div>
 -->
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
             
        
      <div id="showResult">
        <button type="button" class="btn btn-primary" id="revealBtn">Check</button> 
      </div>
               
</form>
                
      </div>
       
       
    </div>
  </div>


<?php } ?>

</body>
<script type="text/javascript">
  
  

$("#revealBtn").click(function() {
  var userans = $('input[name="userans"]:checked').val();
  var quiz_id = $('input[name="quiz_id"]').val();

      $.ajax({
      type: 'POST',
      url: 'include/showAnswer.php',
      data: { 'quiz_id'  : quiz_id , 'userans'  : userans },
      dataType: "json",
      success: function(response) {
        //console.log(response);

        $('#showResult').html(response[0])

      }
      });
});


</script>
</html>