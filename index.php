<?php $currentPage = "index" ?>
<?php include 'include/header_links.php' ?>
<head>
    <title>Landing Page</title>
    <link rel="stylesheet" href="style/index.css?v=<?php echo time(); ?>">
</head>
<main id="main">
    <?php include 'include/nav.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-12 text-center">
                <div class="main-header">
                    <h1 class="font-weight-bold">MASSIVE<br>OPEN ONLINE<Br> COURSE</h1>
                    <a href="signUp.php" class="btn-lg font-weight-bold btn btn-success">Enroll Now</a></div>
                </div>
                <div class="col-xl-6 col-md-12 mt-3 mb-4 column2"> 
                    <div class="main-body">
                    <div class="header"><h3>COURSES WE OFFER
                        
                    </h3>
                        <!--
                    <p>COURSES WE OFFER
                    
                        <span>Lorem ipsum dolor sit amet consectetur
                             adipisicing elit. Fugiat, voluptas?</span>
                             <button class="btn btn-primary">Add Course</button>
                    
                    </p>
                         -->
                </div>
                        <h3><img src="img/icon/icons8_recycling_symbol_96px.png" alt="water">ECOLOGICAL WASTE MANAGEMENT</h3>
                        <h3><img src="img/icon/icons8_central_air_conditioning_240px.png" alt=""> AIR POLUTION SOLUTIONS</h3>
                        <h3><img src="img/icon/aqua.png" alt="water">WATER POLLUTION SOLUTIONS</h3>
                        <h3><img src="img/icon/planting.png" alt="plants">PLANTS PROBLEM AND SOLUTIONS</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'include/footer.php' ?>