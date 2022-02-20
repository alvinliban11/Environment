<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Home</title>
  <?php include 'include/header.php'; ?>
  <link rel="stylesheet" href="style/home.css">
</head>

<body>

    <?php 
    include 'include/nav.php'; 
    include 'include/connection.php';
    include 'include/function.inc.php';

    list($course_code, $course_name, $description, $syllabus) = infoCourse($conn, $_GET['course_code']);
    ?>

      <!-- SIDEBAR -->
        <div class="container-fluid">
                <div class="row">
                        <div class="col-md-2  col-sm-12 mx-auto">
                          <?php include 'include/sidebar.php'; ?>
                        </div>
                <div class="col-md-10 col-sm-12">
     <!--END SIDEBAR -->  

    <div class="container-fluid bg-light pt-4" style="padding-bottom: -4px;">
        <div class="d-flex justify-content-center">
            <div class="d-flex flex-column">
              <div class="mx-auto">
                <img src="img/icon/icons8_recycling_symbol_96px.png" class="rounded" alt="Profile Image" width="100" height="100">
              </div>
<!-- MASTER KONG BOANGGGGG -->
              <div>
             <div class="container" align="center">
              <h4><?php echo $course_code.' - '.$course_name; ?></h4>      
              <br>
            </div>
 <!--                <h2>Plant Course</h2>
                Overall Progress
      <div class="progress">
            <div class="progress-bar bg-success" style="width:30%"></div>
            </div> -->
              </div>
            </div>
        </div>

        <div class="container"> 
                  <!-- Nav pills -->
          <ul class="nav nav-tabs border-none" id="myTab">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home">Course Desciption</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu1">Books</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu2">Learner</a>
                  </li>
            </ul>
        </div>  
    </div>


<div class="container">

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane container active" id="home">
      <div class="container">
        <div class="main">
                            <br>
            <div class="header"><h1>COURSE DESCRIPTION</h1></div>
            <div class="main-content">

                <?php echo $description; ?>

          

        <div class="row">
        <div class="col-xl-5 col-sm-12">
        <h1>COURSE SYLABUS</h1>
        <p> <?php echo $syllabus; ?>

        </p>
    </div>
                    <div class="col-xl-5 p-5 col-sm-12 m-5">
                        <div class="main-container bg-light">
                            <p>Course Number</p>
                            <p><u><?php echo $course_code; ?></u></p>
<!--                             <p>Course Level</p>
                            <hr>
                            <p>Effort</p>
                            <p><u>3 Hours</u> </p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="tab-pane container fade" id="menu1">
    <br>
      <?php include 'course_books.php'; ?>
  </div>
  <div class="tab-pane container fade" id="menu2">
        <br>
      <?php include 'course_learner.php'; ?>
  </div>
</div>
</div>


<!--START CLOSING SIDEBAR -->  
        </div>
                </div>
        </div>
  <!--END CLOSING SIDEBAR -->  


<!-- ADD COURSE BOOK Modal -->
<div class="modal" id="addCourseBook">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Book</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <form  action="include/course.inc.php" method="POST">
      <!-- Modal body -->
      <div class="modal-body">
            <input type="hidden" name="context_coursecode" value="<?php echo $_GET['course_code']; ?>">
            <div class="form-group">
              <label for="context_bookid">Book ID</label>
              <input type="text" class="form-control" placeholder="Enter Book ID" id="context_bookid" name="context_bookid" >
            </div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="addCourseBookBtn">Remove</button>
      </div>
  </form>

    </div>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
    localStorage.setItem('activeTab', $(e.target).attr('href'));
  });
  var activeTab = localStorage.getItem('activeTab');
  if(activeTab){
    $('#myTab a[href="' + activeTab + '"]').tab('show');
  }
});
</script>
</body>
</html>