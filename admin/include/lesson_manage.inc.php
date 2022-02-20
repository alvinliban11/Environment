<?php 
include 'connection.php';
include 'function.inc.php';


//ADD COURSE MODAL BUTTON
if (isset($_POST['context_id'])) {
    $context_id = $_POST['context_id'];
    $lesson_title = $_POST['lesson_title'];
    $lesson_context = $_POST['content'];
    $lesson_no = $_POST['lesson_no'];

    if (addLesson($conn, $context_id,$lesson_title, $lesson_no, $lesson_context)) {
        header('Location: ../add_lesson.php?context_id='.$_POST['context_id'].'&result=success');
    }
    unset($_POST['context_id']);
}

if (isset($_POST['addQuizBtn'])) {

   $lesson_id = $_POST['lesson_id'];
    $quiz_no = $_POST['quiz_no'];
    if ($_POST['quiz_no'] == 0) {
        ++$quiz_no;
    }
    $quiz_question = $_POST['quiz_question'];
    $quiz_ans1 = $_POST['quiz_ans1'];
    $quiz_ans2 = $_POST['quiz_ans2'];
    $quiz_ans3 = $_POST['quiz_ans3'];
    $quiz_ans4 = $_POST['quiz_ans4'];
    $quiz_correct = $_POST['quiz_correct'];

    if (addQuiz($conn, $quiz_no,$lesson_id, $quiz_question, $quiz_ans1, $quiz_ans2, $quiz_ans3, $quiz_ans4, $quiz_correct)) {
        header('Location: ../update_lesson.php?qlesson_id='.$_POST['lesson_id'].'&result=success');
    }
    unset($_POST['addQuizBtn']);
}