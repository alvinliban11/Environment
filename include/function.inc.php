<?php 
function showQuestion($conn, $lesson_id, $quiz_no){
		$sql = "SELECT * FROM quiztbl WHERE lesson_id = '".$lesson_id."' AND quiz_no = '".$quiz_no."'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
				 while($row = mysqli_fetch_assoc($result)) {
		   			echo '
		   			<input type="hidden" name="quiz_id" value="'.$row['quiz_id'].'">
		   			<input type="hidden" name="number" value="'.$row['quiz_no'].'">
					<div class="p-3">
					  <h4>'.$row['question'].'</h4>
				
					  <div class="custom-control custom-radio" style="font-size:18px;">
					    <input type="radio" class="custom-control-input" id="'.$row['ans1'].'" name="userans" value="'.$row['ans1'].'">
					    <label class="custom-control-label" for="'.$row['ans1'].'">'.$row['ans1'].'</label>
					  </div>
					    <div class="custom-control custom-radio" style="font-size:18px;">
					    <input type="radio" class="custom-control-input" id="'.$row['ans2'].'" name="userans" value="'.$row['ans2'].'">
					    <label class="custom-control-label" for="'.$row['ans2'].'">'.$row['ans2'].'</label>
					  </div>
					    <div class="custom-control custom-radio" style="font-size:18px;">
					    <input type="radio" class="custom-control-input" id="'.$row['ans3'].'" name="userans" value="'.$row['ans3'].'">
					    <label class="custom-control-label" for="'.$row['ans3'].'">'.$row['ans3'].'</label>
					  </div>
					      <div class="custom-control custom-radio" style="font-size:18px;">
					    <input type="radio" class="custom-control-input" id="'.$row['ans4'].'" name="userans" value="'.$row['ans4'].'">
					    <label class="custom-control-label" for="'.$row['ans4'].'">'.$row['ans4'].'</label>
					  </div>
				  

					  </div>
		   			';
		  }
		}

	//	mysqli_close($conn);
}

function checkAnswer($conn, $quiz_id, $correct_ans){
		$sql = "SELECT * FROM quiztbl WHERE quiz_id = '".$quiz_id."' AND correct_ans = '".$correct_ans."'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
				 if($row = mysqli_fetch_assoc($result)) {
		   			return true;
		  }
		}

	//	mysqli_close($conn);
}

function showCorrectAnswer($conn, $quiz_id){
		$sql = "SELECT * FROM quiztbl WHERE quiz_id = '".$quiz_id."'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
				 if($row = mysqli_fetch_assoc($result)) {
		   			return $row['correct_ans'];
		  }
		}

	//	mysqli_close($conn);
}


function checkFinalQuiz($conn, $lesson_id){
		$sql = "SELECT * FROM quiztbl WHERE lesson_id = '".$lesson_id."'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			return mysqli_num_rows($result);
		}

	//	mysqli_close($conn);
}


//Register Function
function regResult($conn, $user_id,$lesson_id, $score,$total_item){
		// prepare and bind
		$stmt = $conn->prepare("INSERT INTO resulttbl (learner_id, lesson_id, score, total_item) VALUES (?, ?, ?, ?)");
		$stmt->bind_param("ssss", $d1, $d2, $d3, $d4);

		// set parameters and execute
		$d1 = $user_id;
		$d2 = $lesson_id;
		$d3 = $score;
		$d4 = $total_item;

		if($stmt->execute()){
		return true;
		}

		$stmt->close();
		$conn->close();
}


function checkUserQuiz($conn, $learner_id, $quiz_id){
		$sql = "SELECT * FROM  resulttbl WHERE lesson_id = '".$quiz_id."' AND learner_id = '".$learner_id."'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
				 if($row = mysqli_fetch_assoc($result)) {
		   			return $row['score'];
		  }
		}

	//	mysqli_close($conn);
}


function showResult($conn, $user_id){
		$sql = "SELECT * FROM  resulttbl WHERE user_id = '".$user_id."' AND lesson_id = '".$lesson_id."'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
				 if($row = mysqli_fetch_assoc($result)) {
		   			return $row['score'];
		  }
		}

	//	mysqli_close($conn);
}

function incQuizNo($conn, $lesson_id){
		$sql = "SELECT * FROM  quiztbl WHERE lesson_id = '".$lesson_id."' ORDER BY quiz_no DESC;";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
				 if($row = mysqli_fetch_assoc($result)) {
		   			return $row['quiz_no'];
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


//SHOW  LESSON FUNCTION
function showLesson($conn, $context_id){
		$sql = "SELECT * FROM lessontbl WHERE context_id = '".$context_id."'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
				 while($row = mysqli_fetch_assoc($result)) {
				 		echo '
					 <li class="nav-item d-flex justify-content-between align-items-center" >
						     <a class="nav-link" href="course.php?context_id='.$row['context_id'].'&lesson_id='.$row['lesson_id'].'"><b>Reading:</b> '.$row['lesson_name'].'</a>
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
						     <a class="nav-link"  href="course.php?context_id='.$context_id.'&qlesson_id='.$row['lesson_id'].'"><b>Quiz:</b>'.$row['lesson_id'].'</a>
						</li>
						';
		  }
		}

	//	mysqli_close($conn);
}

