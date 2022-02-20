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
        list($book_id, $book_name, $book_author, $description, $course_code) = infoBook($conn, $_GET['context_id']);
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
              <div>
                       <div class="container" align="center">
              <h4><a href="course.php?course_code=<?php echo $course_code; ?>"><?php echo $course_code; ?></a> / <?php echo $book_name; ?></h4>      
              <br>
            </div>
              <!--   
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
                    <a class="nav-link active" data-toggle="tab" href="#home">Books Desciption</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu1">Lesson</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu2">Learner - Quiz Result</a>
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
            <div class="header"><h1><?php echo $book_name; ?></h1></div>
            <div class="main-content">

              <?php echo $description; ?>

          

        <div class="row">
<!--         <div class="col-xl-5 col-sm-12">
        <h1>COURSE SYLABUS</h1>
        <p>Module 2 - Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit 
        blanditiis iste, veniam, deleniti labore nisi quo et accusantium ipsum 
        itaque cupiditate inventore voluptatibus earum recusandae, dolorem perferendis.
        Libero, neque cum nisi incidunt quibusdam, laboriosam magni accusantium voluptatibus 
        vitae esse placeat, doloremque blanditiis. Dolorem cum dignissimos cumque reprehenderit
        dolore. Dolores delectus omnis unde odit voluptas, voluptatum natus hic velit! Deleniti
        vitae optio mollitia at numquam ipsam quaerat. Beatae impedit nihil officia, assumenda
        in excepturi accusantium illum nemo vitae commodi molestias fugit vero qui, provident,
            voluptate numquam minus iusto repellat voluptatem quibusdam dolore? Molestiae quia
        </p>
    </div> -->
                    <div class="col-xl-5 p-5 col-sm-12 ">
                        <div class="main-container bg-light p-3">
                            <p>Book ID</p>
                            <p><u><?php echo $book_id; ?></u></p>
                            <hr>
                            <p>Book Author</p>
                            <p><u><?php echo $book_author; ?></u> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="tab-pane container fade" id="menu1">
    <br>
    <?php include 'lesson_manage.php'; ?>
  </div>
  <div class="tab-pane container fade" id="menu2">
        <br>
      <?php include 'learner_result.php'; ?>
  </div>
</div>



</div>


<!--START CLOSING SIDEBAR -->  
       </div>
                </div>
        </div>
  <!--END CLOSING SIDEBAR -->  
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