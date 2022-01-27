<?php 

session_start();
include 'connection.inc.php';
include 'function.inc.php';

$quiz_id = $_POST['quiz_id'];
$userans = $_POST['userans'];
$number = $_POST['number'];


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






