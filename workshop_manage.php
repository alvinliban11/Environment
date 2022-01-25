<?php include 'include/header.php'; ?>
<title>Workshop Manage</title>
<link rel="stylesheet" href="style/course_manage.css">

<main id="main">

<div class="container-fluid bg-light p-4" style="margin-top: -80px;">
    <div class="d-flex justify-content-center">
        <div class="d-flex flex-column">
          <div class="mx-auto">
            <img src="img/icon/icons8_recycling_symbol_96px.png" class="rounded" alt="Profile Image" width="100" height="100">
          </div>
          <div><h2>Plant Workshop</h2>
          </div>
        </div>
    </div>
</div>

<br>
<div class="container">
<div class="row">
  <div class="col-md-4">
      <h4 class="bg-primary p-1 text-light" align="center">EVENT INFO</h4>
      <table class="table">
    <tbody>
      <tr>
        <td>DATE</td>
        <td>February 25, 2021</td>
      </tr>
      <tr>
        <td>TIME</td>
        <td>8PM</td>
      </tr>
            <tr>
        <td>LOCATION</td>
        <td>Barangay Hall</td>
      </tr>

    </tbody>
  </table>
  </div>
<div class="col-md-8">
  <h4 class="bg-primary p-1 text-light col-5" align="center">Description</h4>
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
</div>
</div>

<div class="container" align="center">
<button type="button" class="btn btn-success" onclick="msg()">REGISTER NOW</button>
</div>
</div>


</main>
   <script type="text/javascript">
          function msg(){
  swal({
  title: "Are you sure?",
  text: "You want to Register to this Workshop?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("You are Registered now! We will send confirmation to your email", {
      icon: "success",
        }).then(function() {
        window.location.href = "workshop_manage.php";
    });
  }
});
    }
    </script>
<?php include 'include/footer.php'; ?>