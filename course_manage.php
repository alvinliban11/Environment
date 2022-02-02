<?php include 'include/header.php'; ?>
<title>Course Manage</title>
<link rel="stylesheet" href="style/course_manage.css">

<main id="main">

<div class="container-fluid bg-light p-4" style="margin-top: -80px;">
    <div class="d-flex justify-content-center">
        <div class="d-flex flex-column">
          <div class="mx-auto">
            <img src="img/icon/icons8_recycling_symbol_96px.png" class="rounded" alt="Profile Image" width="100" height="100">
          </div>
          <div><h2>Plant Course</h2>
            Overall Progress
  <div class="progress">
        <div class="progress-bar bg-success" style="width:40%"></div>
        </div>
          </div>
        </div>
    </div>
</div>

<br>
<div class="container">
<!-- Nav pills -->
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="pill" href="#home">Course Desciption</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#menu1">Books</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#menu2">Result</a>
  </li>

</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane container active" id="home">
      <div class="container">
        <div class="main">
                            <br>
            <div class="header"><h1>PLANT PROBLEM AND SOLUTIONS</h1></div>
            <div class="main-content">

                <p>Module 1 - Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        Alias fugit culpa voluptatem voluptates laborum dolorem
        fuga nostrum mollitia facere illo, omnis nihil at cum
        aliquam iste dolores exercitationem distinctio odio 
        eligendi ratione perferendis sed modi? Sit enim, dolorum
        at in expedita et harum accusantium ratione placeat aperiam
        quam saepe! Ipsum quibusdam nemo, vitae modi provident
        architecto officia aspernatur veritatis quo id inventore 
        deserunt, officiis, consequatur molestiae? Saepe animi 
        error quidem, odit dolores consequuntur ab amet rem 
        suscipit nisi deleniti magnam assumenda temporibus
        ipsa vel expedita delectus quisquam iusto eveniet aspernatur!
        Doloremque eius similique molestias qui voluptatibus? 
        Cupiditate quo eveniet sed?</p>
        <div class="row">
        <div class="col-xl-5 col-sm-12">
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
    </div>
                    <div class="col-xl-5 p-5 col-sm-12 m-5">
                        <div class="main-container">
                            <p>Course Number</p>
                            <p><u>PPAS101</u></p>
                            <p>Course Level</p>
                            <hr>
                            <p>Effort</p>
                            <p><u>3 Hours</u> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="tab-pane container fade" id="menu1">
    <br>
      <?php include 'book_list.php'; ?>
  </div>
  <div class="tab-pane container fade" id="menu2">
        <br>
      <?php include 'result.php'; ?>
  </div>
</div>
</div>


</main>

<?php include 'include/footer.php'; ?>