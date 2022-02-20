<?php
    if (!isset($_GET['lesson_id']) AND !isset($_GET['qlesson_id']) ) {
      echo 'select context id';
      exit();
    }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Add Lesson</title>
  <?php include 'include/header.php'; ?>
  <link rel="stylesheet" href="style/home.css">
</head>

<body>
  <?php 
  include 'include/connection.php';
  include 'include/function.inc.php';

   $currlesson_id = '';
        if (isset($_GET['lesson_id'])) {
             $currlesson_id = $_GET['lesson_id'];
        }else if(isset($_GET['qlesson_id'])){
             $currlesson_id = $_GET['qlesson_id'];
        }

  list($ulesson_id, $ucontext_id, $ulesson_name, $ulesson_no, $ucontext) = showLessonInfo($conn, $currlesson_id); 

  ?>
      <div class="jumbotron jumbotron-fluid p-4">
            <div class="container" align="center">
              <h4><a href="book_lesson.php?context_id=<?php echo $ucontext_id; ?>">Context</a> / Add Lesson</h4>      
              <br>
            </div>
      </div>

      <form action="include/lesson_manage.inc.php" method="POST">
      <div class="jumbotron jumbotron-fluid p-0" style="margin-top: -25px;">
        <div class="d-flex">
            <div class="p-2 bg-light">
              <h5>Add Lesson</h5>

            </div>
            <div class="p-2 bg-light flex-grow-1" >
              <input type="hidden"  name="context_id" value="<?php echo $ucontext_id; ?>">
              <input type="text" class="form-control" placeholder="Lesson Title" name="lesson_title" value="<?php echo $ulesson_name; ?>">
            </div>
            <div class="p-2">
                <button type="submit" class="btn btn-warning btn-sm" name="addLessonFormBtn">Update</button>
                <!-- <button type="button" class="btn btn-secondary btn-sm">Preview</button> -->
                 <button type="button" class="btn btn-danger btn-sm">Cancel</button>
            </div>
        </div>
      </div>
              <div class="container">
              <?php if (isset($_GET['result']) == 'success') {
                        echo '<div class="alert alert-success">
                  <strong>Success!</strong> Lesson Added!</a>.
            </div>';
              } ?>
              </div>
      <div class="container-fluid">
          <div class="row">
                <div class="col-md-2"> 
                  <!-- A vertical navbar -->
                      <nav class="navbar bg-light">

                        <!-- Links -->
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link" href="update_lesson.php?lesson_id=<?php if(isset($_GET['lesson_id'])){echo $_GET['lesson_id'];}else if($_GET['qlesson_id']){echo $_GET['qlesson_id'];} ?>">Lesson</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="update_lesson.php?qlesson_id=<?php echo $_GET['lesson_id']; ?>">Quiz</a>
                          </li>
                        </ul>

                      </nav>
                </div>

                <div class="col-md-8"> 
                  <?php
                  if (isset($_GET['lesson_id'])) {
                    echo '<textarea class="form-control" rows="7" name="content" id="context" required>
                    '.$ucontext.'
                    </textarea>';
                  }else if(isset($_GET['qlesson_id'])){
                    echo '
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#addQuizModal">Add Quiz</button>
                    <br><br>
                    <table class="table table-hover" id="foo">
                    <thead>
                      <tr>
                        <th>Quiz ID</th>
                        <th>Quiz Order</th>
                        <th>Question</th>
                        <th>Choice 1</th>
                        <th>Choice 2</th>
                        <th>Choice 3</th>
                        <th>Choice 4</th>
                        <th>Correct Answer</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>';
                    showQuizTable($conn, $currlesson_id);
                    echo '</tbody>
                  </table>
                    ';
                  }

                   ?>
                </div>

                <div class="col-md-2"> 
                     <div class="jumbotron p-3">
                          <select  class="custom-select" name="lesson_no" value="<?php echo $ulesson_no; ?>">
                            <option disabled>Lesson Order</option>
                            <?php
                              for ($i=1; $i < 11; $i++) { 
                                echo '<option value="'.$i.'">'.$i.'</option>';
                              }
                             ?>
                          </select>
                     </div>
                </div>
          </div>
      </div>
      </form>



<!-- ADD QUIZ Modal -->
<div class="modal" id="addQuizModal">
  <div class="modal-dialog" >
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Quiz</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

  <form action="include/lesson_manage.inc.php" method="POST">
      <!-- Modal body -->
      <div class="modal-body">
        <input type="hidden" name="lesson_id" value="<?php echo $currlesson_id; ?>">
              <input type="hidden" class="form-control" placeholder="Enter Question Order" id="quiz_no" name="quiz_no"value="<?php echo increQuizNo($conn, $currlesson_id); ?>" >
            <div class="form-group">
              <label for="quiz_question">Question</label>
              <input type="text" class="form-control" placeholder="Enter Question" id="quiz_question" name="quiz_question">
            </div>
            <div class="form-group">
              <label for="quiz_ans1">Choice 1</label>
              <input type="text" class="form-control" placeholder="Enter Choice 1" id="quiz_ans1" name="quiz_ans1">
            </div>
            <div class="form-group">
              <label for="quiz_ans2">Choice 2</label>
              <input type="text" class="form-control" placeholder="Enter Choice 2" id="quiz_ans2" name="quiz_ans2">
            </div>
            <div class="form-group">
              <label for="quiz_ans3">Choice 3</label>
              <input type="text" class="form-control" placeholder="Enter Choice 3" id="quiz_ans3" name="quiz_ans3">
            </div>
            <div class="form-group">
              <label for="quiz_ans4">Choice 4</label>
              <input type="text" class="form-control" placeholder="Enter Choice 4" id="quiz_ans4" name="quiz_ans4">
            </div>
            <div class="form-group">
              <label for="quiz_correct">Correct Answer</label>
             <input type="text" class="form-control" placeholder="Enter Correct Answer" id="quiz_correct" name="quiz_correct">
            </div>
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="addQuizBtn">Add</button>
      </div>
  </form>



    </div>
  </div>
</div>

<script src="../ckeditor/ckeditor.js" ></script>
<script type="text/javascript">
  CKEDITOR.replace('content');

//SHOW MODAL 
// $('#showQuizBtn').on('click',function(){
//     $('#addQuizModal').modal('show');

//     $tr =$(this).closest('tr');
//     var data = $tr.children("td").map(function(){
//     return $(this).text();
//     }).get();

//     console.log(data);

//     //  $.ajax({
//     // type: 'POST',
//     // url: 'include/book_manage.inc.php',
//     // data: { 'sbook_id'  : data[0] },
//     // dataType: "json",
//     // success: function(response) {
//     //   console.log(response);
//        //$('#ubook_id').val(response[0]);
//       // $('#ubook_name').val(response[1]);
//       // $('#ubook_author').val(response[2]);
//       // $('#ubook_desc').val(response[3]);

//     // }
//     // });
// });

//UPDATE BUTTON SUBMIT
// $("#updateForm").submit(function(e) {
//   $('#showBookModal').modal({'backdrop': 'static'});

//     e.preventDefault(); // avoid to execute the actual submit of the form.
    
//     $.ajax({
//         type: "POST",
//         url: 'include/book_manage.inc.php',
//         data: $(this).serialize(), // serializes the form's elements.
//         success: function(data)
//         {     
//            $('#showResult').html(data);
//         }
//     });
    
// });


</script>
</body>
</html>