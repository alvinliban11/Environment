      <div class="container">
              <button  type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#addCourseBook"><i class="fas fa-plus"></i> Add Book</button>
              <br>  <br>
              <div class="card-columns">
                  <?php showCourseBook($conn, $_GET['course_code']); ?>
              </div>
      </div>
