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
    <a class="dropdown-item" href="air_book1_lesson2.2.php" style=" border-left: 7px solid green;">Lesson 2.2</a>
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
    <a class="dropdown-item" href="air_book1_lesson4.3.php">Lesson 4.3</a>
     
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
    <h2>LESSON 2.2: THE REGULATORY SYSTEM</h2>



<p class="indent">Since the early 1970s, environmental regulations have become a system in which laws,
regulations, and guidelines have become interrelated. Requirements and procedures
developed under previously existing laws may be referenced to in more recent laws and
regulations. The history and development of this regulatory system has led to laws that
focus principally on only one environmental medium, i.e., air, water, or land. Some
environmental managers feel that more needs to be done to manage all of the media simultaneously since they are interrelated. Hopefully, the environmental regulatory system
will evolve into a truly integrated, multimedia management framework in the future. <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Federal laws are the product of Congress. Regulations written to implement the
law are promulgated by the Executive Branch of government, but until judicial decisions
are made regarding the interpretations of the regulations, there may be uncertainty about
what regulations mean in real situations. Until recently, environmental protection groups
were more frequently the plaintiffs in cases brought to court seeking interpretation of the
law. Today, industry has become more active in this role. Forum shopping, the process
of finding a court that is more likely to be sympathetic to the plaintiffs’ point of view,
continues to be an important tool in this area of environmental regulation. Many environmental cases have been heard by the Circuit Court of the District of Columbia. <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Enforcement approaches for environmental regulations are environmental
management–oriented in that they seek to remedy environmental harm, not simply a
specific infraction of a given regulation. All laws in a legal system may be used in
enforcement to prevent damage or threats of damage to the environment or human
health and safety. Tax laws (e.g., tax incentives) and business regulatory laws (e.g.,
product claims, liability disclosures) are examples of laws not directly focused on
environmental protection, but that may also be used to encourage compliance and
discourage noncompliance with environmental regulations. <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Common law also plays an important role in environmental management. Common
law is the set of rules and principles relating to the government and security of persons
and property. Common law authority is derived from the usages and customs that are recognized and enforced by the courts. In general, no infraction of the law is necessary
when establishing a common law court action. A common law “civil wrong” (e.g.,
environmental pollution) that is brought to court is called a tort. Environmental torts
may arise because of nuisance, trespass, or negligence. <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Laws tend to be general and contain uncertainties relative to the implementation of
principles and concepts they contain. Regulations derived from laws may be more
specific, but are also frequently too broad to allow clear translation into environmental
technology practice. Permits may be used in the environmental regulation industry to
bridge this gap and provide specific, technical requirements imposed on a facility by
the regulatory agencies for the discharge of pollutants or on other activities carried
out by the facility that may impact the environment.<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Most major federal environmental laws (perhaps unfortunately) provide for citizen lawsuits. This empowers individuals to seek compliance or monetary penalties when these laws
are violated and regulatory agencies do not take enforcement action against the violator.</p>






</ol>

</div>

<div class="container">
    <span class="text-success">Completed</span>
     <a href="air_book1_lesson2.1.php" class="btn btn-danger form-inline">BACK</a>   
    <a href="air_book1_lesson2.3.php" class="btn btn-primary">CONTINUE</a>
</div>




</div>
</main>
<?php include 'include/footer.php'; ?>