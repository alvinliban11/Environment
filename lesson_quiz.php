<?php include 'include/header.php'; ?>
<head>
    <title></title>
  <style type="text/css">
      /* The sidebar menu */
.sidenav {
    margin-top: 55px;
  height: 100%; /* Full-height: remove this if you want "auto" height */
  width: 200px; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
 /* background-color: #111;  Black */
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 20px;
}




/* Style page content */
.main {
  margin-left: 200px; /* Same as the width of the sidebar */
  padding: 0px 10px;
  margin-top: -70px;
}

.list-group a:hover {

  border-left: 7px solid green;
}
/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
  </style>

</head>
<main id="main">
<!-- Side navigation -->
<div class="sidenav bg-light">
<div class="list-group">
 <span class="text-primary">Lessons</span>
  <a href="lesson.php" class="list-group-item list-group-item-action" >Reading: Lesson 1</a>
  <a href="lesson_quiz.php" class="list-group-item list-group-item-action" style=" border-left: 7px solid green;">Lesson 1 - Quiz</a>
  <a href="#" class="list-group-item list-group-item-action">...</a>
</div>
</div>

<!-- Page content -->
<div class="main">


  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="course_List.php">Course List</a></li>
        <li class="breadcrumb-item" aria-current="page"><a href="course_manage.php">Course Code - Book 1</a></li>
          <li class="breadcrumb-item active" aria-current="page">Lessons</li>
     <!--  <li class="breadcrumb-item"><a href="#">Library</a></li> -->
  </ol>
</nav>

<div class="container">
    <h2>Lesson 1 - Quiz </h2>
    <div class="jumbotron p-3">
  <h5>What is the Plant Meaning?</h5>
  <div class="custom-control custom-radio" style="font-size:15px;">
    <input type="radio" class="custom-control-input" id="customRadio0" name="example1" value="customEx">
    <label class="custom-control-label" for="customRadio0">Option 1</label>
  </div>
    <div class="custom-control custom-radio" style="font-size:15px;">
    <input type="radio" class="custom-control-input" id="customRadio0" name="example1" value="customEx">
    <label class="custom-control-label" for="customRadio0">Option 2</label>
  </div>
    <div class="custom-control custom-radio" style="font-size:15px;">
    <input type="radio" class="custom-control-input" id="customRadio0" name="example1" value="customEx">
    <label class="custom-control-label" for="customRadio0">Option 3</label>
  </div>
    <div class="custom-control custom-radio" style="font-size:15px;">
    <input type="radio" class="custom-control-input" id="customRadio0" name="example1" value="customEx">
    <label class="custom-control-label" for="customRadio0">Option 4</label>
  </div>

  </div>

      <div class="jumbotron p-3">
  <h5>What is the Photosynthesis Meaning?</h5>
  <div class="custom-control custom-radio" style="font-size:15px;">
    <input type="radio" class="custom-control-input" id="customRadio1" name="example2" value="customEx">
    <label class="custom-control-label" for="customRadio1">Option 1</label>
  </div>
    <div class="custom-control custom-radio" style="font-size:15px;">
    <input type="radio" class="custom-control-input" id="customRadio1" name="example2" value="customEx">
    <label class="custom-control-label" for="customRadio1">Option 2</label>
  </div>
    <div class="custom-control custom-radio" style="font-size:15px;">
    <input type="radio" class="custom-control-input" id="customRadio1" name="example2" value="customEx">
    <label class="custom-control-label" for="customRadio1">Option 3</label>
  </div>
    <div class="custom-control custom-radio" style="font-size:15px;">
    <input type="radio" class="custom-control-input" id="customRadio1" name="example2" value="customEx">
    <label class="custom-control-label" for="customRadio1">Option 4</label>
  </div>

  </div>

      <div class="jumbotron p-3">
  <h5>What is the Sunlight Meaning?</h5>
  <div class="custom-control custom-radio" style="font-size:15px;">
    <input type="radio" class="custom-control-input" id="customRadio2" name="example3" value="customEx">
    <label class="custom-control-label" for="customRadio2">Option 1</label>
  </div>
    <div class="custom-control custom-radio" style="font-size:15px;">
    <input type="radio" class="custom-control-input" id="customRadio2" name="example3" value="customEx">
    <label class="custom-control-label" for="customRadio2">Option 2</label>
  </div>
    <div class="custom-control custom-radio" style="font-size:15px;">
    <input type="radio" class="custom-control-input" id="customRadio2" name="example3" value="customEx">
    <label class="custom-control-label" for="customRadio2">Option 3</label>
  </div>
    <div class="custom-control custom-radio" style="font-size:15px;">
    <input type="radio" class="custom-control-input" id="customRadio2" name="example3" value="customEx">
    <label class="custom-control-label" for="customRadio2">Option 4</label>
  </div>

  </div>


</div>

<div class="container">
    <span class="text-success">Completed</span>
    <button class="btn btn-primary">Go to Next Lesson</button>
</div>



<br>
</div>
</main>
<?php include 'include/footer.php'; ?>