<?php 
//include 'include/header.php';
 include 'include/connection.inc.php';
 include 'include/function.inc.php';

// $_SESSION['lesson_id'] = 2;
// $_SESSION['user_id'] = 1;
 ?>

<div class="container">
<?php
// if (!is_null(checkUserQuiz($conn, $_SESSION['user_id'], $_GET['qlesson']))) {
//   include 'resultQuiz.php';
// }else{
// }
$quiz_no = 1;
if (isset($_GET['quiz_no'])) {
  $quiz_no = $_GET['quiz_no'];
}
?>


<div class="container">

    <div class="card">
           <div class="card-header"> <h2>Lesson 1 - Quiz <?php //echo $quiz_no.' / '.checkFinalQuiz($conn,  "10"); ?></h2></div> 
             <form action="" method="POST">
          <div class="card-body p-0">

          </div>
           </form>
    </div>
</div>


</div>
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

}
</script>
