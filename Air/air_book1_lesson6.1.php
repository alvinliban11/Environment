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
    <a class="dropdown-item" href="air_book1_lesson5.3.php" >Lesson 5.3</a>
     
  </div>
</div>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Lesson 6
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="air_book1_lesson6.1.php" style=" border-left: 7px solid green;">Lesson 6.1</a>
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
  

  <h2>LESSON 6 ADSORBERS</h2><br>

 <h2>LESSON 6.1 INTRODUCTION</h2><br>





<p>During adsorption, one or more gaseous components are removed from an effluent gas
stream by adhering to the surface of a solid. The gas molecules being removed are
referred to as the adsorbate, while the solid doing the adsorbing is called the adsorbent.
Adsorbents are highly porous particles and adsorption occurs primarily on the internal
surface of the particles.</p>

<p class="indent">The attractive forces that hold the gas to the surface of the solid are the same that
cause vapors to condense (van der Waals forces). All gas–solid interfaces exhibit this
attraction, some more than others. Adsorption systems use materials that are highly
attracted to each other to separate these gases from the nonadsorbing components of
an air stream. For air pollution control purposes, adsorption is not a final control
process. The contaminant gas is merely stored on the surface of the adsorbent.
After it becomes saturated with adsorbate, the adsorbent must either be disposed of
and replaced, or the vapors must be desorbed. Desorbed vapors are highly concentrated and may be recovered more easily and more economically than before the
adsorption step.</p>

<p class="indent">Traditionally, adsorption has been used for air purification and solvent recovery. Air
purification processes are those in which the contaminant is often present in trace quantities (less than 1.0 ppm) but can be highly odorous and toxic. Systems used for air
purification are usually small thin-bed adsorbers. When the bed becomes saturated with
contaminant, it is taken out and replaced. Solvent recovery processes require much larger
systems and are designed to control organic emissions whose concentrations are usually
greater than 1000 ppm. This is the point where the recovery value of the solvent could
justify the expense of the large adsorption–desorption system. Currently, adsorption is
used as a method of recovering valuable organic vapors from the (flue) gases at all concentration levels. This is due to present regulations limiting volatile organic emission and
the higher costs of solvents.</p>

<h4>Adsorption Forces—Physical and Chemical
</h4>

<p class="indent">The adsorption process is classified as either physical or chemical. The basic difference
between physical and chemical adsorption is the manner in which the gas molecule
is bonded to the adsorbent. In physical adsorption the gas molecule is bonded to
the solid surface by weak forces of intermolecular cohesion. The chemical nature of
the adsorbed gas remains unchanged; therefore, physical adsorption is a readily reversible process. In chemical adsorption a much stronger bond is formed between the gas
molecule and adsorbent. A sharing or exchange of electrons takes place—as happens
in a chemical bond. Chemical adsorption is not easily reversible.</p>

<p class="indent">The forces active in physical adsorption are electrostatic in nature. These forces are
present in all states of matter: gas, liquid, and solid. They are the same forces of attraction
that cause gases to condense and real gases to deviate from ideal behavior. Physical
adsorption is sometimes referred to as van der Waals adsorption. The electrostatic
effect that produces the van der Waals forces depends on the polarity of both the gas
and solid molecules. Molecules in any state are either polar or non polar, depending
on their chemical structure. Polar substances are those that exhibit a separation of positive and negative charges within the compound. This separation of positive and negative
charges is referred to as a permanent dipole. Water is a prime example of a polar substance. Nonpolar substances have both their positive and negative charges in one center,
so they have no permanent dipole. Most organic compounds, because of their symmetry,
are nonpolar.</p>

<p class="indent">Physical, or van der Walls adsorption can occur from three different effects: an
orientation effect, a dispersion effect, or induction effect. For polar molecules,
attraction to each other occurs because of the orientation effect. The orientation effect
describes the attraction that occurs between the dipoles of two polar molecules. The
negative area of one is attracted to the positive area of the other. An example of this
type of adsorption would be the removal of water vapor (polar) from an exhaust
stream by using silica gel (polar). 
Chemical adsorption, or chemisorption, results from the chemical interaction
between a gas and a solid. The gas is held to the surface of the adsorbate by the formation of a chemical bond. Adsorbents used in chemisorption can be either pure substances or chemicals deposited on an inert carrier material. One example is using pure
iron oxide chips to adsorb H2S. Another example is using activated carbon which has
been impregnated with sulfur to remove mercury vapor.</p>

<p class="indent">All known adsorption processes are exothermic, whether adsorption occurs from
chemical or physical forces. In adsorption, molecules are transferred from the gas to
the surface of a solid. The fast-moving gas molecules lose their kinetic energy of
motion to the adsorbent in the form of heat. In chemisorption, the heat of adsorption is
comparable to the heat evolved from a chemical reaction, usually over 10 kcal/gmol.
The heat given off by physical adsorption is much lower, approximately 100 cal/gmol,
which is comparable to the heat of condensation (or vaporization).</p>


<h4>Adsorbent Materials
</h4>

<p>Several materials are used efficiently as adsorbing agents. The most common adsorbents used industrially are activated carbon, silica gel, activated alumina (alumina
oxide), and zeolites (molecular sieves). Adsorbents are characterized by their chemical
nature, extent of their surface area, pore distribution, and particle size. In physical
adsorption the most important characteristic in distinguishing between adsorbents is
their surface polarity. As discussed previously, the surface polarity determines the
type of vapors for which a particular adsorbent will have the greatest affinity. Of
the above adsorbents, activated carbon is the primary nonpolar adsorbent. It is possible
to manufacture other adsorbing material having nonpolar surfaces, but since their
surface areas are much less than that of activated carbon, they are not used commercially. Polar adsorbents will preferentially adsorb any water vapor that may be
present in a gas stream. Since moisture is present in most pollutant airstreams,
the use of polar adsorbents is severely limited for an air pollution system. Therefore,
the emphasis is placed on the use of activated carbon in further discussion, although
some of the information is applicable to polar adsorption systems.</p>

<p class="indent">Activated Carbon. Activated carbon can be produced from a variety of feedstocks such as wood, coal, coconut, nutshells, and petroleum-based products. The activation process takes place in two steps. First, the feedstock is carbonized. Carbonization
involves heating the material (usually in the absence of air) to a temperature high enough
(6008C) to drive off all volatile material. Thus, carbon is essentially all that is left. To
increase the surface area the carbon is then “activated” by using steam, air, or carbon
dioxide at higher temperatures. These gases attack the carbon and increase the pore structure. The temperatures involved, the amount of oxygen present, and the type of feedstock
all greatly affect the adsorption qualities of the carbon. Manufacturers vary these parameters to produce activated carbon suitable for specific purposes. In sales literature,
the activity and retentivity of carbons are based on their ability to adsorb a standard
solvent, such as carbon tetrachloride (CCl4).</p>



</ol>

</div>

<div class="container">
   <a href="air_book1_lesson5.3.18.php" class="btn btn-danger form-inline">BACK</a>
    <a href="air_book1_lesson6.1.1.php" class="btn btn-primary">CONTINUE</a>
</div>




</div>
</main>
<?php include 'include/footer.php'; ?>