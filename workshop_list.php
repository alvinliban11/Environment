<?php include 'include/header_links.php' ?>
<?php

// session_start();

$participant = $_SESSION['participant_name'] = "Alvin";

$learner_id = $_SESSION['learner_id'] = 1001;

$_SESSION['workshop_id'] = 1;

?>
<head>
  <title>Workshop</title>
 
</head>
      <main id="main">
         <?php include 'include/nav.php' ?>
        <div class="container">
            <h1 class="text-dark">Workshop</h1>

            <div class="card-deck">

<div class="card" style="width:80%" >
      <img class="card-img-top" src="img/icon/icons8_recycling_symbol_96px.png" alt="Card image" 
      style="width:250px;height:250px;">
      <div class="card-body" align="center">
        <h4 class="card-title">Plant Workshop<br><span class="text-secondary" style="font-size:15px;">February 14, 2022, 8PM - Barangay Hall</span></h4>
        <hr>
        <p class="card-text"></p>
        <a type="button" href="workshop_manage.php?course_code=1" class="btn btn-primary btn-block">Details</a>
      </div>
    </div>

    <div class="card" style="width:80%" >
      <img class="card-img-top" src="img/icon/icons8_recycling_symbol_96px.png" alt="Card image" 
      style="width:250px;height:250px;">
      <div class="card-body" align="center">
        <h4 class="card-title">Plant Workshop<br><span class="text-secondary" style="font-size:15px;">February 14, 2022, 8PM - Barangay Hall</span></h4>
        <hr>
        <p class="card-text"></p>
        <a type="button" href="workshop_manage.php?course_code=1" class="btn btn-primary btn-block">Details</a>
      </div>
    </div>

    <div class="card" style="width:80%" >
      <img class="card-img-top" src="img/icon/icons8_recycling_symbol_96px.png" alt="Card image" 
      style="width:250px;height:250px;">
      <div class="card-body" align="center">
        <h4 class="card-title">Plant Workshop<br><span class="text-secondary" style="font-size:15px;">February 14, 2022, 8PM - Barangay Hall</span></h4>
        <hr>
        <p class="card-text"></p>
        <a type="button" href="workshop_manage.php?course_code=1" class="btn btn-primary btn-block">Details</a>
      </div>
    </div>

    <div class="card" style="width:80%" >
      <img class="card-img-top" src="img/icon/icons8_recycling_symbol_96px.png" alt="Card image" 
      style="width:250px;height:250px;">
      <div class="card-body" align="center">
        <h4 class="card-title">Plant Workshop<br><span class="text-secondary" style="font-size:15px;">February 14, 2022, 8PM - Barangay Hall</span></h4>
        <hr>
        <p class="card-text"></p>
        <a type="button" href="workshop_manage.php?course_code=1" class="btn btn-primary btn-block">Details</a>
      </div>
    </div>





  </div>
              </div>
          </main>

<?php include 'include/footer.php' ?>