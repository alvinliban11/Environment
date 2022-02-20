<div class="container">
<?php
if (!is_null(checkUserQuiz($conn, "1", $_GET['qlesson_id']))) {
  include 'resultQuiz.php';
  exit();
}else{
  $quiz_no = 1;
if (isset($_SESSION['quiz_no'])) {
  $quiz_no = $_SESSION['quiz_no'];
}
}

?>
  <div class="card">
    <div class="card-header"> 
      <h2>Lesson 1 - Quiz <?php echo $quiz_no.' / '.checkFinalQuiz($conn,  $_GET['qlesson_id']); ?></h2>
    </div> 
    <form action="include/quiz.inc.php" method="POST">
    <input type="hidden" name="context_id" value="<?php echo $_GET['context_id']; ?>">
    <input type="hidden" name="lesson_id" value="<?php echo $_GET['qlesson_id']; ?>">
    <input type="hidden" name="number" value="<?php echo $_SESSION['quiz_no']; ?>">
    <div class="card-body" style="margin-bottom: -35px;">
      <div class="jumbotron p-3">
            <?php  showQuestion($conn, $_GET['qlesson_id'], $quiz_no); ?>
      </div>
    </div>

    <div class="card-footer">
        <div id="showResult">
              <button type="button" class="btn btn-primary" id="revealBtn">Check</button> 
        </div>
    </div>
    </form>
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


});






</script>