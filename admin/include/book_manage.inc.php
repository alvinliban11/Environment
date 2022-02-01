<?php


//ADD BOOK MODAL BUTTON
if (isset($_POST['addBookBtn'])) {
	$book_name = $_POST['book_name'];
	$book_author = $_POST['book_author'];
	$book_desc = $_POST['book_desc'];

	echo $book_name.$book_author.$book_desc;
	unset($_POST['addBookBtn']);
}

//UPDATE BTN BOOK
if (isset($_POST['ubook_id'])) {
	$ubook_id = $_POST['ubook_id'];
	$ubook_name = $_POST['ubook_name'];
	$ubook_author = $_POST['ubook_author'];
	$ubook_desc = $_POST['ubook_desc'];

	echo '<div class="alert alert-success">
	  <strong>Success!</strong> You should <a href="#" class="alert-link">read this message</a>.
	</div>';

	unset($_POST['ubook_id']);
}

//DELETE BTN BOOK
if (isset($_POST['dbook_id'])) {
	$dbook_id = $_POST['dbook_id'];

	echo 'DELETES';
	unset($_POST['dbook_id']);
}


//SHOW INFO IN MODAL
if (isset($_POST['sbook_id'])) {
	$sbook_id = $_POST['sbook_id'];

	echo json_encode(array($sbook_id)); 
	unset($_POST['sbook_id']);
}

//SHOW ID IN DELETE MODAL
if (isset($_POST['sdbook_id'])) {
	$sdbook_id = $_POST['sdbook_id'];

	echo json_encode(array($sdbook_id)); 
	unset($_POST['sdbook_id']);
}