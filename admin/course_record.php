<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Course Record</title>
  <?php include 'include/header.php'; ?>
  <link rel="stylesheet" href="style/home.css">
</head>

<body>

    <?php 
    include 'include/nav.php'; 
    include 'include/connection.php';
    include 'include/function.inc.php';
    ?>
    
    <!-- SIDEBAR -->
        <div class="container-fluid">
                <div class="row">
                        <div class="col-md-2  col-sm-12 mx-auto">
                          <?php include 'include/sidebar.php'; ?>
                        </div>
                <div class="col-md-10 col-sm-12 ">
     <!--END SIDEBAR -->      
    
      <div class="jumbotron jumbotron-fluid p-4">
            <div  align="center">
              <h4>Course List</h4>      
              <br>
              <a href="course_manage.php" type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add Course</a>
            </div>
      </div>

      <div class="container">
              <div class="card-columns " >
                <div class="container">
                  <?php showcardCourse($conn); ?>
                  </div>
              </div>
      </div>

<!--START CLOSING SIDEBAR -->  
        </div>
                </div>
        </div>
  <!--END CLOSING SIDEBAR -->  
</body>
</html>

