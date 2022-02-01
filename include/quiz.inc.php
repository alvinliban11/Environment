<?php 

session_start();
include 'connection.inc.php';
include 'function.inc.php';

$quiz_id = $_POST['quiz_id'];
$userans = $_POST['userans'];
$number = $_POST['number'];

<<<<<<< Updated upstream
=======
if (isset($_POST['revealBtn'])) {
	
// 	if (!isset($_SESSION['revealAns'])) {
// 	$_SESSION['revealAns'] = '';
// 	}

// 	if (!isset($_SESSION['score'])) {
// 	$_SESSION['score'] = 0;
// }

// 	if (checkAnswer($conn, $quiz_id, $userans)) {
// 	$_SESSION['score']++;
// 	$_SESSION['revealAns'] = 'correct';
// 	}else{
// 	$_SESSION['revealAns'] = 'wrong';	
// 	}

// 	header('Location: ../lesson_quiz.php?quiz_no='.$number);

}


>>>>>>> Stashed changes

if (isset($_POST['quizBtn'])) {
	$next = ++$number;


if (checkFinalQuiz($conn, $_SESSION['lesson_id'])  < $number) {

	if (regResult($conn, $_SESSION['user_id'],$_SESSION['lesson_id'], $_SESSION['score'],checkFinalQuiz($conn, '2'))) {
		unset($_SESSION['score']);
		header('Location: ../lesson_quiz.php');
	}
	
}else{
	header('Location: ../lesson_quiz.php?quiz_no='.$next);
}
}






