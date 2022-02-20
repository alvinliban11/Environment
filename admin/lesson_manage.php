<div class="container">
		         <a href="add_lesson.php?context_id=<?php echo $_GET['context_id']; ?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add Lesson</a>
		         <hr>
	<div class="row">
		  <div class="col-md-3 bg-light">
		  	Lesson List
					 <ul class="nav flex-column">
					 	<?php showLesson($conn, $_GET['context_id']); ?>
					</ul>



		  </div>

		  <div class="col-md-9 ">
		  	Content
					<div class="container">
						<?php 
						if (isset($_GET['lesson_id'])) {
							echo showContext($conn, $_GET['lesson_id']); 

						}else if (isset($_GET['qlesson_id'])) {
							showQuizContext($conn, $_GET['qlesson_id']);
						}else{
							echo '';
						}			
						?>
					</div>
			</div>
	</div>
</div>