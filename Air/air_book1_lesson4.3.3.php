<?php include 'include/header.php'; ?>
<head>




    <title>LESSON 1</title>
  <style type="text/css">

p.indent {
    text-indent: 30px;
}

p.indent1 {
    text-indent: 60px;
}


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
   <a href="air_book1_overview.php" class="list-group-item list-group-item-action" >AIR POLLUTION CONTROL EQUIPMENT CALCULATIONS OVERVIEW</a>
  <a href="air_book1_introduction.php" class="list-group-item list-group-item-action">INTRODUCTION</a>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Lesson 1
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="air_book1_lesson1.php">Lesson 1.1</a>
    
  </div>
</div>


<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Lesson 2
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="air_book1_lesson2.1.php">Lesson 2.1</a>
    <a class="dropdown-item" href="air_book1_lesson2.2.php">Lesson 2.2</a>
    <a class="dropdown-item" href="air_book1_lesson2.3.php">Lesson 2.3</a>
     <a class="dropdown-item" href="air_book1_lesson2.4.php">Lesson 2.4</a>
      <a class="dropdown-item" href="air_book1_lesson2.5.php">Lesson 2.5</a>
       <a class="dropdown-item" href="air_book1_lesson2.6.php">Lesson 2.6</a>
  </div>
</div>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Lesson 3
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="air_book1_lesson3.1.php">Lesson 3.1</a>
    <a class="dropdown-item" href="air_book1_lesson3.2.php">Lesson 3.2</a>
    <a class="dropdown-item" href="air_book1_lesson3.3.php">Lesson 3.3</a>
     <a class="dropdown-item" href="air_book1_lesson3.4.php">Lesson 3.4</a>
      <a class="dropdown-item" href="air_book1_lesson3.5.php">Lesson 3.5</a>
       <a class="dropdown-item"href="air_book1_lesson3.6.php">Lesson 3.6</a>
  </div>
</div>


<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Lesson 4
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="air_book1_lesson4.1.php">Lesson 4.1</a>
    <a class="dropdown-item" href="air_book1_lesson4.2.php">Lesson 4.2</a>
    <a class="dropdown-item" href="air_book1_lesson4.3.php" style=" border-left: 7px solid green;">Lesson 4.3</a>
     
  </div>
</div>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Lesson 5
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="air_book1_lesson5.1.php">Lesson 5.1</a>
    <a class="dropdown-item" href="air_book1_lesson5.2.php">Lesson 5.2</a>
    <a class="dropdown-item" href="air_book1_lesson5.3.php">Lesson 5.3</a>
     
  </div>
</div>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Lesson 6
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="air_book1_lesson6.1.php">Lesson 6.1</a>
    <a class="dropdown-item" href="air_book1_lesson6.2.php">Lesson 6.2</a>
    <a class="dropdown-item" href="air_book1_lesson6.3.php">Lesson 6.3</a>
     
  </div>
</div>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Lesson 7
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="air_book1_lesson7.1.php">Lesson 7.1</a>
    <a class="dropdown-item" href="air_book1_lesson7.2.php">Lesson 7.2</a>
    <a class="dropdown-item" href="air_book1_lesson7.3.php">Lesson 7.3</a>
     <a class="dropdown-item" href="air_book1_lesson7.4.php">Lesson 7.4</a>
      <a class="dropdown-item" href="air_book1_lesson7.5.php">Lesson 7.5</a>
       <a class="dropdown-item" href="air_book1_lesson7.6.php">Lesson 7.6</a>
  </div>
</div>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Lesson 8
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="air_book1_lesson8.1.php">Lesson 8.1</a>
    <a class="dropdown-item" href="air_book1_lesson8.2.php">Lesson 8.2</a>
    <a class="dropdown-item" href="air_book1_lesson8.3.php">Lesson 8.3</a>
     
  </div>
</div>


<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Lesson 9
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="air_book1_lesson9.1.php">Lesson 9.1</a>
    <a class="dropdown-item" href="air_book1_lesson9.2.php">Lesson 9.2</a>
    <a class="dropdown-item" href="air_book1_lesson9.3.php">Lesson 9.3</a>
    
  </div>
</div>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Lesson 10
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="air_book1_lesson10.1.php">Lesson 10.1</a>
    <a class="dropdown-item" href="air_book1_lesson10.2.php">Lesson 10.2</a>
    <a class="dropdown-item" href="air_book1_lesson10.3.php">Lesson 10.3</a>
    
  </div>
</div>


<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Lesson 11
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="air_book1_lesson11.1.php">Lesson 11.1</a>
    <a class="dropdown-item" href="air_book1_lesson11.2.php">Lesson 11.2</a>
    <a class="dropdown-item" href="air_book1_lesson11.3.php">Lesson 11.3</a>
     
  </div>
</div>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Lesson 12
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="air_book1_lesson12.1.php">Lesson 12.1</a>
    <a class="dropdown-item" href="air_book1_lesson12.2.php">Lesson 12.2</a>
    <a class="dropdown-item" href="air_book1_lesson12.3.php">Lesson 12.3</a>
     
  </div>
</div>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    APPENDIX A
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="air_book1_appendixa1.php">APPENDIX A.1</a>
    <a class="dropdown-item" href="air_book1_appendixa2.php">APPENDIX A.2</a>
    <a class="dropdown-item" href="air_book1_appendixa3.php">APPENDIX A.3</a>
    <a class="dropdown-item" href="air_book1_appendixa4.php">APPENDIX A.4</a>
    <a class="dropdown-item" href="air_book1_appendixa5.php">APPENDIX A.5</a> 
  </div>
</div>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    APPENDIX B
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="air_book1_appendixb1.php">APPENDIX B.1</a>
    <a class="dropdown-item" href="air_book1_appendixb2.php">APPENDIX B.2</a>
    <a class="dropdown-item" href="air_book1_appendixb3.php">APPENDIX B.3</a>
    <a class="dropdown-item" href="air_book1_appendixb4.php">APPENDIX B.4</a>
    <a class="dropdown-item" href="air_book1_appendixb5.php">APPENDIX B.5</a>

     
  </div>
</div>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    APPENDIX C
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="air_book1_appendixc.php">APPENDIX C</a>
    
     
  </div>
</div>
  <a href="lesson_quiz.php" class="list-group-item list-group-item-action">QUIZ</a>

  <a href="#" class="list-group-item list-group-item-action">...</a>
</div>
</div>

<!-- Page content -->
<div class="main">


  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="../course_List.php">Course List</a></li>
        <li class="breadcrumb-item" aria-current="page"><a href="course_manage_air.php">Course Code - Book 1</a></li>
          <li class="breadcrumb-item active" aria-current="page">Lessons</li>
     <!--  <li class="breadcrumb-item"><a href="#">Library</a></li> -->
  </ol>
</nav>

<div class="container">
    <h2>4.3 OPERATION AND MAINTENANCE, AND
IMPROVING PERFORMANCE
</h2><br>
<h3>PROBLEM</h3>

<p><b>4.15 Reactants/Products Ratio


</b></p>

<p>The reaction equation (not balanced) for the combustion of butane is shown
below:</p>

<img src="img/ch.png">
<p>Determine the mole ratio of reactants to products.
Solution: A chemical equation provides a variety of qualitative and quantitative
information essential for the calculation of the quantity of reactants reacted and
products formed in a chemical process. The balanced chemical equation must
have the same number of atoms of each type in the reactants and products.
Thus, the balanced equation for butane is</p>
<img src="img/ch1.png">

<p><b>4.16 Stoichiometric Combustion
</b></p>
<p>Consider the following reaction equation:</p>

<img src="img/ch2.png">


<p>Solution: Stoichiomertic air is the air required to assure complete combustion of
a fuel, organic, and/or waste. For complete combustion one can assume:<br>
1. No fuel, organic, and/or waste remains<br>
2. No oxygen is present in the flue gas<br>
3. Carbon has combusted to CO2, not CO<br>
4. Sulfur has combusted to SO2, not SO3<br>
Excess air (fractional basis) is defined by<br>
</p>
<img src="img/ch3.png">

<p>Noting that, for an ideal gas, the number of moles is proportional to the volume.
The scf of O2 required for the complete combustion of 1 scf of propane is 5 scf.
The nitrogen-to-oxygen volume (or mole) ratio in air is 79
21. Therefore, the amount
of N2 in a quantity of air that contains 5.0 scf of O2 is</p>

<img src="img/ch4.png">

<p><b>4.17 Excess Air Combustion
</b></p>

<img src="img/ch5.png"><br>

<img src="img/ch6.png">



</ol>

</div>

<div class="container">
    <a href="air_book1_lesson4.3.2.php" class="btn btn-danger form-inline">BACK</a>
    <a href="air_book1_lesson4.3.4.php" class="btn btn-primary">CONTINUE</a>
</div>




</div>
</main>
<?php include 'include/footer.php'; ?>