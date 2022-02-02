<?php
    if (!isset($_GET['context_id']) AND !isset($_GET['qcontext_id'])) {
      echo 'select context id';
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
  
      <div class="jumbotron jumbotron-fluid p-4">
            <div class="container" align="center">
              <h4><a href="book_lesson.php?context_id=<?php echo $_GET['context_id']; ?>">Context</a> / Add Lesson</h4>      
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
              <input type="hidden"  name="context_id" value="<?php echo $_GET['context_id']; ?>">
              <input type="text" class="form-control" placeholder="Lesson Title" name="lesson_title">
            </div>
            <div class="p-2">
                <button type="submit" class="btn btn-warning btn-sm" name="addLessonFormBtn">Save</button>
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

                <div class="col-md-10"> 
                  <textarea class="form-control" rows="7" name="content" id="context" required></textarea>
                </div>

                <div class="col-md-2"> 
                     <div class="jumbotron p-3">
                          <select  class="custom-select" name="lesson_no">
                            <option selected>Lesson Order</option>
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




<script src="../ckeditor/ckeditor.js" ></script>
<script type="text/javascript">
  CKEDITOR.replace('content');
</script>
</body>
</html>