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
    <a class="dropdown-item" href="air_book1_lesson4.3.php" >Lesson 4.3</a>
     
  </div>
</div>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Lesson 5
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="air_book1_lesson5.1.php">Lesson 5.1</a>
    <a class="dropdown-item" href="air_book1_lesson5.2.php">Lesson 5.2</a>
    <a class="dropdown-item" href="air_book1_lesson5.3.php" style=" border-left: 7px solid green;">Lesson 5.3</a>
     
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
  

  <h2>LESSON 5.3 OPERATION AND MAINTENANCE, AND IMPROVING
PERFORMANCE

</h2><br>

<h3>PROBLEMS</h3>

<p><b>5.15 Absorber Types
</b></p>

<p>List the principal types of gas absorption equipment.
Solution:<br>
1. Packed columns (continuous operation)<br>
2. Plate columns (staged operation)<br>
3. Miscellaneous<br>
</p>

<p>Of the three categories, the packed column is by far the most commonly used
for the absorption of gaseous pollutants. It might also be mentioned again at this
time that the exhaust (cleaned gas) from an absorption air pollution control
system is usually released to the atmosphere through a stack. To prevent condensation of the vapor plume in and around the stack, the temperature of this exhaust
gas should be above its dew point. A general rule of thumb is to ensure that the
exhaust gas stream temperature is approximately 508F above its dew point.</p>

<p><b>5.16 Packed-Column Characteristics
</b></p>

<p>Packed columns are characterized by a number of features to which their widespread popularity may be attributed. List some of these features.<br>
Solution:<br>
1. Minimum Internal Problems. The packed column needs only a packing
support and liquid distributor about every 10 ft along its height.<br>
2. Versatility. The packing material can be changed by simply dumping it and
replacing it with a type giving better efficiency, lower pressure drop, or
higher capacity. The depth of packing can also be easily changed if the operating efficiency turns out to be less than anticipated, or if the feed or product
specifications change.<br>
3. Corrosive-Fluids Handling. Ceramic packing is common and often preferable
to metal or plastic because of its corrosion resistance. It may also be preferred
at the base or inlet of a tower when handling hot combustion gases, as in a
hazardous waste incineration facility.<br>
4. Low Pressure Drop. Unless operated at very high liquid rates, where the
liquid becomes the continuous phase as its dropwise films thicken and
merge, the pressure drop per linear foot of packed height is relatively low.<br>
5. Low Investment(s). When plastic packings are satisfactory or when the
columns are less than 3–4 ft in diameter, cost is relatively low.
</p>

<p><b>5.17 Solvent Selection

</b></p>

<p>List 10 factors that should be considered when choosing a solvent for a gas
absorption column that is to be used as an emission control device.<br>
Solution: Solvent selection for use in an absorption column for gaseous pollutant removal should be based on the following criteria:<br>
1. Solubility of the Gas in the Solvent. High solubility is desirable as it reduces
the amount of solvent needed. Generally, a polar gas will dissolve best in a
polar solvent and a nonpolar gas will dissolve best in a nonpolar solvent.<br>
2. Vapor Pressure. A solvent with a low vapor pressure is preferred to minimize loss of solvent.<br>
3. Corrosivity. Corrosive solvents may damage the equipment. A solvent with
low corrosivity will extend equipment life.<br>
4. Cost. In general, the less expensive, the better, However, an inexpensive
solvent is not always the best choice if it is too costly to dispose of
and/or recycle after it has been used.<br>
5. Viscosity. Solvents with low viscosity offer benefits such as better adsorption rates, better heat transfer properties, lower pressure drops, lower
pumping costs, and improved flooding characteristics.<br>
6. Reactivity. Solvents that react with the contaminant gas to produce an
unreactive product are undesirable because the scrubbing solution may be
recirculated. Reactive solvents should produce few unwanted side reactions
with the gases that are to be absorbed.<br>
7. Low Freezing Point. Resistance to freezing lessens the chance of solid formation and clogging of the column. See criterion 2 (above) on boiling point
(vapor pressure).<br>
8. Availability. If the solvent is “exotic,” it generally has a higher cost and may
not be readily available for long-term continuous use. Water is often the
natural choice according to these criteria.<br>
9. Flammability. Lower flammability or nonflammable solvents decrease
safety problems.<br>
10. Toxicity. A solvent with low toxicity is desirable.</p>

<p><b>5.18 Fouling

</b></p>

<p>Discuss fouling in packed towers.<br>
Solution:<br> The most common maintenance problem associated with packing
media is fouling or plugging. Plugging can result from deposition of undissolved
solids in the liquid, deposition of insoluble dust in the inlet air stream, precipitation of dissolved salts in the liquid that exceed their solubility, and precipitation
of an insoluble salt that is formed by the reaction of a soluble salt in solution with
an absorbed gas. Of those mentioned, the most prevalent and the most difficult to
prevent is the precipitation of an insoluble salt formed by reaction. Typically, this
will occur because of the Ca2þ or Mg2þ in hard water reacting with the absorbed
CO2 from the air to form CaCO3 and MgCO3 scaling. In most cases, this will
occur with the use of an alkaline scrubbing liquid. This scaling can also be
removed by periodic flushing with an acidic solution such as HCl. Scaling can
also be reduced by using a packing having a large free (void) volume. The
other plugging problems mentioned can be easily reduced by increasing the
liquid flow through the column, adding a strainer in the recycled liquid piping,
or increasing the water makeup and overflow rates.</p>


<p><b>5.19 Liquid Distributors in Packed Columns


</b></p>

<p>Discuss the use of liquid distributors in packed columns.<br>
Solution:<br> Although the type and size of packing are important in designing the
physical absorber size and packing depth to achieve a specified removal efficiency of the gaseous pollutants, an equally important factor is the method of
liquid distribution over the packing. If the liquid is not distributed evenly
across the packing, or if portions of the packing are not wetted, channeling
will occur and reduce performance. Again, bear in mind that it is the liquid
not the packing, that absorbs the gases. Also, packing that is not wetted will
tend to plug much faster because there is no liquid continually washing away
any solids deposition.<br>
There are four basic types of liquid distributors: spray, weir, perforated pipe,
and open splash plate. The spray type using spray nozzles provides the most
effective means of evenly distributing the liquid over the packing. It also provides an area above the packed section for additional contact between the air
stream and the spray droplets for gas absorption. A properly designed spray distributor should provide overlapping sprays, and the top of the packing should be
at a specified distance below the sprays for optimum effectiveness. If the packing
level is too high, some areas near the tower wall will not be wetted; conversely, if the
packing level is too low, too great a portion of the liquid is sprayed on the vessel wall
and becomes ineffective. Full cone-type spray nozzles are suggested and should be
as nonclogging as possible. Spray nozzle plugging is the major disadvantage.
However, with the proper nozzle selection and by installing a strainer in the
recycle piping which is capable of removing solids smaller than the nozzle orifice
size, nozzle plugging can be drastically reduced, if not eliminated.
</p>

<p><b>5.20 Crossflow Absorbers



</b></p>

<p>Discuss some of the features of crossflow absorbers.<br>
Solution:<br> The crossflow design is unique and has become a commonly used
option for the removal of highly or moderately soluble gases, or where rapid
chemical reactions will occur. In this mode, the air stream flows horizontally
through the packing while the liquid flows vertically downward. The crossflow
mode has some attractive features over the countercurrent design, while affording
lower pressure drop. Lower pressure drop results in the crossflow unit where the
liquid is at right angles to the airflow, resulting in less pressure drop when
compared to the countercurrent mode, where the gas and liquid flow in opposite
directions. In addition, the crossflow has greater solids-handling capacity without
causing fouling. This can be achieved by increasing the liquid flow over the first
section of packing to flush off any collected solid to prevent buildup, and by
adding a front cocurrent spray to prevent blinding at the front packing support
plate. Care must be taken to prevent gas from bypassing the packed bed. This
bypassing occurs primarily in the liquid distribution zone and in the sump;
however, it can be eliminated by the proper use of internal baffles.</p>





</ol>

</div>

<div class="container">
   <a href="air_book1_lesson5.3.2.php" class="btn btn-danger form-inline">BACK</a>
    <a href="air_book1_lesson5.3.4.php" class="btn btn-primary">CONTINUE</a>
</div>




</div>
</main>
<?php include 'include/footer.php'; ?>