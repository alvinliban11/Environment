<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Course Record</title>
  <?php include 'include/header.php'; ?>
  <link rel="stylesheet" href="style/home.css">
</head>

<body>

    <?php include 'include/nav.php'; ?>
    

  
      <div class="jumbotron jumbotron-fluid p-4">
            <div class="container" align="center">
              <h4>Course</h4>      
              <br>
              <a href="course_manage.php" type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add Course</a>
            </div>
      </div>

      <div class="container">
              <div class="card-columns">

                  <div class="card">
                  <img class="card-img-top" src="https://image.freepik.com/free-vector/cartoon-empty-high-school-college-university-computer-science-classroom-background_33099-125.jpg" alt="Card image" style="width:100%">
                  <div class="card-body">
                    <h4 class="card-title" align="center">Course Name</h4>
                    <p class="card-text">Course Code: <span class="text-danger"></span> sFe4D</p>
                    <a href="course.php" class="btn btn-success btn-block">Modify</a>
                  </div>
                </div>

              </div>
      </div>










</body>
</html>