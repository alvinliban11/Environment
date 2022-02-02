<?php 

////////////////////////////////////////// BOOKS ///////////////////////////////

//ADD BOOK FUNCTION
function addBook($conn, $book_name,$book_author, $description){
		// prepare and bind
		$stmt = $conn->prepare("INSERT INTO bookstbl (book_name, book_author, description) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $d1, $d2, $d3);

		// set parameters and execute
		$d1 = $book_name;
		$d2 = $book_author;
		$d3 = $description;

		if($stmt->execute()){
		return true;
		}

		$stmt->close();
		$conn->close();
}

//SHOW BOOKS FUNCTION
function showBooks($conn){
		$sql = "SELECT * FROM bookstbl";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
				 while($row = mysqli_fetch_assoc($result)) {
  					echo '<tr>
					        <td>'.$row['book_id'].'</td>
					        <td>'.$row['book_name'].'</td>
					        <td>'.$row['book_author'].'</td>
					        <td>'.$row['description'].'</td>
					        <td>
					            <div class="btn-group">
					              <button type="button" class="btn btn-warning btn-sm" id="showBook"><i class="fas fa-eye"></i></button>
					              <button type="button" class="btn btn-danger btn-sm " id="removeBook"><i class="fas fa-trash"></i></button>
					            </div>
					        </td>
					      </tr>';

		  }
		}

	//	mysqli_close($conn);
}



////////////////////////////////////////// COURSE MANAGE ///////////////////////////////

//ADD COURSE FUNCTION
function addCourse($conn, $course_code,$course_name, $description, $syllabus){
		// prepare and bind
		$stmt = $conn->prepare("INSERT INTO coursetbl (course_code, course_name, description, syllabus) VALUES (?, ?, ?,?)");
		$stmt->bind_param("ssss", $d1, $d2, $d3, $d4);

		// set parameters and execute
		$d1 = $course_code;
		$d2 = $course_name;
		$d3 = $description;
		$d4 = $syllabus;

		if($stmt->execute()){
		return true;
		}

		$stmt->close();
		$conn->close();
}

//SHOW COURSE FUNCTION
function showCourse($conn){
		$sql = "SELECT * FROM coursetbl";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
				 while($row = mysqli_fetch_assoc($result)) {
  					echo '<tr>
					        <td>'.$row['course_code'].'</td>
					        <td>'.$row['course_name'].'</td>
					        <td>'.$row['description'].'</td>
					        <td>'.$row['syllabus'].'</td>
					        <td>
					            <div class="btn-group">
					              <button type="button" class="btn btn-warning btn-sm" id="showCourse"><i class="fas fa-eye"></i></button>
					              <button type="button" class="btn btn-danger btn-sm " id="removeCourse"><i class="fas fa-trash"></i></button>
					            </div>
					        </td>
					      </tr>';

		  }
		}

	//	mysqli_close($conn);
}


////////////////////////////////////////// COURSE RECORDS ///////////////////////////////

//SHOW COURSE CARD FUNCTION
function showcardCourse($conn){
		$sql = "SELECT * FROM coursetbl";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
				 while($row = mysqli_fetch_assoc($result)) {
  					echo '

				<div class="card">
                  <img class="card-img-top" src="image/course.jpg" alt="Card image" style="width:100%">
                  <div class="card-body">
                    <h4 class="card-title" align="center">'.$row['course_name'].'</h4>
                    <p class="card-text">Course Code: <span class="text-danger"></span>'.$row['course_code'].'</p>
                    <a href="course.php?course_code='.$row['course_code'].'" class="btn btn-secondary btn-block btn-sm">Modify</a>
                  </div>
                </div>';

		  }
		}

	//	mysqli_close($conn);
}



////////////////////////////////////////// COURSE ///////////////////////////////

//ADD  COURSE BOOK FUNCTION
function addCourseBook($conn, $course_code,$book_id){
		// prepare and bind
		$stmt = $conn->prepare("INSERT INTO contexttbl (course_code, book_id) VALUES (?, ?)");
		$stmt->bind_param("ss", $d1, $d2);

		// set parameters and execute
		$d1 = $course_code;
		$d2 = $book_id;

		if($stmt->execute()){
		return true;
		}

		$stmt->close();
		$conn->close();
}

//SHOW  COURSE BOOK FUNCTION
function showCourseBook($conn, $course_code){
		$sql = "
				SELECT contexttbl.book_id, contexttbl.context_id, bookstbl.book_name, bookstbl.book_author
				FROM contexttbl
				INNER JOIN bookstbl ON contexttbl.book_id=bookstbl.book_id WHERE  course_code = '".$course_code."'
		";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
				 while($row = mysqli_fetch_assoc($result)) {
  					echo '
				<div class="card">
                  <img class="card-img-top" src="image/book.jpg" alt="Card image" style="width:100%">
                  <div class="card-body">
                    <h4 class="card-title" align="center">'.$row['book_name'].'</h4>
                    <p class="card-text">Book ID: <span class="text-danger"></span>'.$row['book_id'].' <br>
                    Author Name: <span class="text-danger"></span>'.$row['book_author'].'
                    </p>

                    <a href="book_lesson.php?context_id='.$row['context_id'].'" class="btn btn-success btn-block btn-sm">Modify</a>
                  </div>
                </div>';

		  }
		}

	//	mysqli_close($conn);
}

//ADD LESSON 
function addLesson($conn, $context_id,$lesson_name, $lesson_no, $context){
		// prepare and bind
		$stmt = $conn->prepare("INSERT INTO lessontbl (context_id, lesson_name, lesson_no, context) VALUES (?, ?, ?,?)");
		$stmt->bind_param("ssss", $d1, $d2, $d3, $d4);

		// set parameters and execute
		$d1 = $context_id;
		$d2 = $lesson_name;
		$d3 = $lesson_no;
		$d4 = $context;

		if($stmt->execute()){
		return true;
		}

		$stmt->close();
		$conn->close();
}


//ADD QUIZ
function addQuiz($conn, $quiz_no,$lesson_id, $question, $ans1, $ans2, $ans3, $ans4, $correct_ans){
		// prepare and bind
		$stmt = $conn->prepare("INSERT INTO quiztbl (quiz_no, lesson_id, question, ans1, ans2, ans3, ans4, correct_ans) VALUES (?, ?, ?,?,?, ?, ?,?)");
		$stmt->bind_param("ssssssss", $d1, $d2, $d3, $d4, $d5, $d6, $d7, $d8);

		// set parameters and execute
		$d1 = $quiz_no;
		$d2 = $lesson_id;
		$d3 = $question;
		$d4 = $ans1;
		$d5 = $ans2;
		$d6 = $ans3;
		$d7 = $ans4;
		$d8 = $correct_ans;


		if($stmt->execute()){
		return true;
		}

		$stmt->close();
		$conn->close();
}

//SHOW  LESSON FUNCTION
function showLesson($conn, $context_id){
		$sql = "SELECT * FROM lessontbl WHERE context_id = '".$context_id."'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
				 while($row = mysqli_fetch_assoc($result)) {
  					echo '
					 <li class="nav-item d-flex justify-content-between align-items-center">
						     <a class="nav-link" href="book_lesson.php?context_id='.$row['context_id'].'&lesson_id='.$row['lesson_id'].'">'.$row['lesson_name'].'</a>
						    <span class="badge badge-danger">
						    	<a class="text-light" href="update_lesson.php?lesson_id='.$row['lesson_id'].'"><i class="fas fa-pen"></i></a></span>
						</li>
						';
							showQuizzes($conn, $row['lesson_id'],$row['context_id']);
		  }
		}

	//	mysqli_close($conn);
}

//SHOW  LESSON FUNCTION
function showQuizzes($conn, $lesson_id,$context_id){
		$sql = "SELECT DISTINCT lesson_id FROM quiztbl WHERE lesson_id = '".$lesson_id."'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
				 while($row = mysqli_fetch_assoc($result)) {
  					echo '
					 <li class="nav-item d-flex justify-content-between align-items-center">
						     <a class="nav-link " href="book_lesson.php?context_id='.$context_id.'&qlesson_id='.$row['lesson_id'].'">Quiz '.$row['lesson_id'].'</a>
						</li>

						';

		  }
		}

	//	mysqli_close($conn);
}


//SHOW CONTEXT
function showContext($conn, $lesson_id){
		$sql = "SELECT * FROM lessontbl WHERE lesson_id = '".$lesson_id."'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
				 while($row = mysqli_fetch_assoc($result)) {
  					return $row['context'];

		  }
		}

	//	mysqli_close($conn);
}

//SHOW  QUIZ CONTEXT FUNCTION
function showQuizContext($conn, $lesson_id){
		$sql = "SELECT * FROM quiztbl WHERE lesson_id = '".$lesson_id."'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
				 while($row = mysqli_fetch_assoc($result)) {
		   			echo '
		   			<div class="jumbotron p-2">
		   			<input type="hidden" name="quiz_id" value="'.$row['quiz_id'].'">
		   			<input type="hidden" name="number" value="'.$row['quiz_no'].'">
					<div class="p-3">
					  <h4>'.$row['question'].'</h4>
				
					  <div class="custom-control custom-radio" style="font-size:18px;">
					    <input type="radio" class="custom-control-input" id="'.$row['ans1'].'" name="userans" value="'.$row['ans1'].'" disabled>
					    <label class="custom-control-label" for="'.$row['ans1'].'">'.$row['ans1'].'</label>
					  </div>
					    <div class="custom-control custom-radio" style="font-size:18px;">
					    <input type="radio" class="custom-control-input" id="'.$row['ans2'].'" name="userans" value="'.$row['ans2'].'" disabled>
					    <label class="custom-control-label" for="'.$row['ans2'].'">'.$row['ans2'].'</label>
					  </div>
					    <div class="custom-control custom-radio" style="font-size:18px;">
					    <input type="radio" class="custom-control-input" id="'.$row['ans3'].'" name="userans" value="'.$row['ans3'].'" disabled>
					    <label class="custom-control-label" for="'.$row['ans3'].'">'.$row['ans3'].'</label>
					  </div>
					      <div class="custom-control custom-radio" style="font-size:18px;">
					    <input type="radio" class="custom-control-input" id="'.$row['ans4'].'" name="userans" value="'.$row['ans4'].'" disabled>
					    <label class="custom-control-label" for="'.$row['ans4'].'">'.$row['ans4'].'</label>
					  </div>
				  
							<h6 class="text-warning">Correct Answer: '.$row['correct_ans'].'</h6>
					  </div>
					  </div>
		   			';
		  }
		}

	//	mysqli_close($conn);
}



//SHOW INFO OF LESSON
function showLessonInfo($conn, $lesson_id){
		$sql = "SELECT * FROM lessontbl WHERE lesson_id = '".$lesson_id."'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
				 if($row = mysqli_fetch_assoc($result)) {
				 	return array($row['lesson_id'], $row['context_id'], $row['lesson_name'], $row['lesson_no'], $row['context']);
		  }
		}

	//	mysqli_close($conn);
}


//SHOW  QUIZ TABLE FUNCTION
function showQuizTable($conn, $lesson_id){
		$sql = "SELECT * FROM quiztbl WHERE lesson_id = '".$lesson_id."'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
				 while($row = mysqli_fetch_assoc($result)) {
		   			echo '
		   			<tr>
            <td>'.$row['quiz_id'].'</td>
            <td>'.$row['quiz_no'].'</td>
            <td>'.$row['question'].'</td>
            <td>'.$row['ans1'].'</td>
            <td>'.$row['ans2'].'</td>
            <td>'.$row['ans3'].'</td>
            <td>'.$row['ans4'].'</td>
            <td>'.$row['correct_ans'].'</td>
            <td>

					            <div class="btn-group">
					              <button type="button" class="btn btn-warning btn-sm" id="showCourse"><i class="fas fa-eye"></i></button>
					              <button type="button" class="btn btn-danger btn-sm " id="removeCourse"><i class="fas fa-trash"></i></button>
					            </div>
					        
            </td>
           </tr>
		   			';
		  }
		}

	//	mysqli_close($conn);
}


//SHOW INFO COURSE
function infoCourse($conn, $course_code){
		$sql = "SELECT * FROM coursetbl WHERE course_code = '".$course_code."'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
				 if($row = mysqli_fetch_assoc($result)) {
  					return array($row['course_code'], $row['course_name'], $row['description'], $row['syllabus']);

		  }
		}

	//	mysqli_close($conn);
}


//SHOW INFO BOOKS
function infoBook($conn, $context_id){
		$sql = "
				SELECT contexttbl.book_id, contexttbl.context_id, contexttbl.course_code, bookstbl.book_name, bookstbl.book_author, bookstbl.description
				FROM contexttbl
				INNER JOIN bookstbl ON contexttbl.book_id=bookstbl.book_id WHERE  context_id = '".$context_id."'
		";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
				 if($row = mysqli_fetch_assoc($result)) {
  					return array($row['book_id'], $row['book_name'], $row['book_author'], $row['description'], $row['course_code']);

		  }
		}

	//	mysqli_close($conn);
}

function increQuizNo($conn, $lesson_id){
		$sql = "SELECT * FROM  quiztbl WHERE lesson_id = '".$lesson_id."' ORDER BY quiz_no DESC;";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
				 if($row = mysqli_fetch_assoc($result)) {
		   			return ++$row['quiz_no'];
		  }
		}

	//	mysqli_close($conn);
}