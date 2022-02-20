<?php 
include 'connection.php';
include 'function.inc.php';

//ADD COURSE MODAL BUTTON
if (isset($_POST['addCourseBtn'])) {
	$course_code = $_POST['course_code'];
	$course_name = $_POST['course_name'];
	$course_desc = $_POST['course_desc'];
	$course_syllabus = $_POST['course_syllabus'];

	if (addCourse($conn, $course_code,$course_name, $course_desc, $course_syllabus)) {
		header('Location: ../course_manage.php');
	}
	unset($_POST['addCourseBtn']);
}