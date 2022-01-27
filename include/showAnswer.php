<?php 

session_start();
include 'connection.inc.php';
include 'function.inc.php';

$quiz_id = $_POST['quiz_id'];
$userans = $_POST['userans'];
$result = '';



	if (!isset($_SESSION['score'])) {
	$_SESSION['score'] = 0;
	}

	if (checkAnswer($conn, $quiz_id, $userans)) {
	$_SESSION['score']++;
	$result = '<div class="alert alert-success">
                            <strong>Correct Answer</strong> '.showCorrectAnswer($conn, $quiz_id).'
            </div>
            <button type="submit" class="btn btn-success" name="quizBtn">Next</button>
            ';
	}else{
	$result = '<div class="alert alert-danger">
                <strong>Wrong Answer</strong> Correct answer is: '.showCorrectAnswer($conn, $quiz_id).'
                </div>
                <button type="submit" class="btn btn-success" name="quizBtn">Next</button>
                ';
	}

echo json_encode(array($result));


