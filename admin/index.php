<?php $currentPage = 'index'; ?>
<head>
    <link rel="stylesheet" href="style/index.css">
    <title>Dashboard</title>
</head>
<?php include 'include/header.php' ?>
    <main id="main">
       <div class="row">
        <div class="col-xl-5 col-sm-12 col-lg-5"  style="z-index:-2;">
            <div class="container">
                <div class="schedule">
                  <div class="row">
                      <div class="col-4"><img src="../icons8_calendar_240px_1.png" alt=""></div>
                      <span class="verticals"></span>
                      <div class="col-6 text-center"><span>Pending Schedule<p class="text-center" style="font-size: 80px;">10</p></span></div>
                  </div>
                </div>
            </div>       
        </div>

           <div class="col-xl-5 col-sm-12 col-lg-5" style="z-index:-2;">
            <div class="container">
                <div class="enrollee">
                  <div class="row">
                      <div class="col-4"><img src="../icons8_user_64px.png" alt=""></div>
                      <span class="vertical"></span>
                      <div class="col-6 text-center"><span>Pending Enrollee<p class="text-center" style="font-size: 80px;">10</p></span></div>
                  </div>
                </div>
            </div>       
        </div>

           <div class="col-12" style="z-index:-2;">
               <div class="container">
                <div class="courses">
                    <div class="header">Courses Density</div>
                   <div class="content">
                       <div class="span"></div>
                       <div class="span"></div>
                       <div class="span"></div>
                       <div class="span"></div>
                   </div>
                </div>   
                </div>
           </div>
       </div>
     
    </main>
<?php include 'include/footer.php'; ?>