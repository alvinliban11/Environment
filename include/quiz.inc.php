<?php 

session_start();
include 'connection.inc.php';
include 'function.inc.php';

$context_id = $_POST['context_id'];
$lesson_id = $_POST['lesson_id'];
$quiz_id = $_POST['quiz_id'];
$userans = $_POST['userans'];
$number = $_POST['number'];

if (isset($_POST['quizBtn'])) {
	$next = ++$number;


if (checkFinalQuiz($conn, $lesson_id)  < $number) {
	
	if (regResult($conn, $_SESSION['user_id'],$lesson_id, $_SESSION['score'],checkFinalQuiz($conn, $lesson_id))) {
		unset($_SESSION['score']);
		 unset($_SESSION['quiz_no']);
	}
}else{
	$_SESSION['quiz_no'] = $next;
}

header('Location: ../course.php?context_id='.$context_id.'&qlesson_id='.$lesson_id);
exit();
}






