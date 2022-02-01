
<div class="container">

    <div class="card">
      <div class="card-header"> <h2>Lesson <?php echo $_SESSION['lesson_id'] ?> - Quiz </h2></div>
         <form action="include/quiz.inc.php" method="POST">
      <div class="card-body p-5">
            <h2>Score: <?php echo checkUserQuiz($conn, $_SESSION['user_id'], $_SESSION['lesson_id']) ?></h2>
         

      </div>
       
       </form>
    </div>
  </div>