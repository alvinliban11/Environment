<?php include 'include/header.php'; ?>
<head>
    <title>Lesson</title>
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
  <a href="lesson.php" class="list-group-item list-group-item-action" style=" border-left: 7px solid green;">Reading: Lesson 1</a>
  <a href="lesson_quiz.php" class="list-group-item list-group-item-action">Lesson 1 - Quiz</a>
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
    <h2>Course Resources and Technical Support</h2>

<h2>Course Resources</h2>

<p>Welcome to Plant. In addition to the course modules, we&#39;ve included some additional course materials.</p>



<p>You can also find them by clicking on the Course Resources tab on the left side of the <a href="learn/covid-19-contact-tracing/home/welcome" target="_blank">course overview page</a>.</p>

<h2>Technical Support</h2>

<p>Please visit <a href="" target="_blank"></a> for answers about the  platform. If you aren&#39;t able to find the answer you need among the documents available in the Learner Help Center, you can chat with  support by clicking the chat icon in the bottom right corner of the Learner Help Center home page.</p>

<p><strong>Please do not e-mail or call Johns Hopkins University or the course instructor with technical questions about the  platform, your account, or your certificate of completion. Neither Johns Hopkins University nor the course instructor has access to your account details or records of your performance in the course. Instead, please visit </strong><a href="https://learner.coursera.help/" target="_blank"></a><strong> for technical support.</strong></p>


</ol>

</div>

<div class="container">
    <span class="text-success">Completed</span>
    <a href="lesson2.php" class="btn btn-primary">Go to Next Lesson</a>
</div>




</div>
</main>
<?php include 'include/footer.php'; ?>