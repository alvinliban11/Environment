<?php include 'include/header_links.php' ?>
<head>
  <title>featured courses</title>
  <link rel="stylesheet" href="style/courses.css">
</head>
      <main id="main">
         <?php include 'include/nav.php' ?>
        <div class="container">
            <h1 class="text-white ml-5">Featured Courses</h1>

            <div class="card-deck">

<div class="card" style="width:50%"  style="width:250px;height:250px;">
      <img class="card-img-top" src="img/icon/icons8_recycling_symbol_96px.png" alt="Card image" 
      style="width:250px;height:250px;">
      <div class="card-body">
        <h4 class="card-title">ECOLOGICAL</h4>
        <span class="text-danger">Enroll First</span>
        <div class="progress">
        <div class="progress-bar bg-success" style="width:0%"></div>
        </div>
        <hr>
        <p class="card-text"></p>
        <button type="button" href="course_manage.php?course_code=1" class="btn btn-primary btn-block" onclick="msg()">Enroll</button>
      </div>
    </div>

    <div class="card" style="width:50%">
      <img class="card-img-top" src="img/icon/cars.jpg" alt="Card image" 
      style="width:250px;height:250px;">
      <div class="card-body">
        <h4 class="card-title">AIR POLUTION</h4>
        Course Progress
        <div class="progress">
        <div class="progress-bar bg-success" style="width:70%">70%</div>
        </div>
        <hr>
        <p class="card-text"></p>
        <a href="Air/course_manage_air.php?course_code=1" class="btn btn-primary btn-block">Continue</a>
      </div>
    </div>


    <div class="card" style="width:50%">
      <img class="card-img-top courseico" src="img/icon/water2.png" alt="Card image"
      style="width:250px;height:250px;">
      <div class="card-body">
        <h4 class="card-title">WATER POLLUTION</h4>
        Course Progress
        <div class="progress">
        <div class="progress-bar bg-success" style="width:50%">50%</div>
        </div>
        <hr>
        <p class="card-text"></p>
        <a href="course_manage.php?course_code=1" class="btn btn-primary btn-block">Continue</a>
      </div>
    </div>

     <div class="card" style="width:50%">
      <img class="card-img-top courseico" src="img/icon/icons8_coral_60px.png" alt="Card image"
      style="width:250px;height:250px;">
      <div class="card-body">
        <h4 class="card-title">CORAL REEF</h4>
         Course Progress
        <div class="progress">
        <div class="progress-bar bg-success" style="width:30%">30%</div>
        </div>
        <hr>
        <p class="card-text"></p>
        <a href="course_manage.php?course_code=1" class="btn btn-primary btn-block">Continue</a>
      </div>
    </div>

  </div>
              </div>
          </main>
    <script type="text/javascript">
          function msg(){
  swal({
  title: "Are you sure?",
  text: "You want to Enroll this Course?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("You are enrolled now!", {
      icon: "success",
        }).then(function() {
        window.location.href = "course_manage.php";
    });
  }
});
    }
    </script>
<?php include 'include/footer.php' ?>