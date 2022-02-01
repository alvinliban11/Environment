<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php include 'include/header.php'; ?>
</head>
<body class="bg-secondary">

<div class="container mx-auto col-md-4  col-sm-12 bg-dark p-2 text-light" style="margin-top: 100px;">
  <h2>Admin Login</h2>

  <?php
 if (isset($_SESSION['err'])){

      if($_SESSION['err'] == "notExist" ){
            echo ' <div class="alert alert-danger">
              <strong>Account not found.</strong> Check your email and password.
            </div>';
            $_SESSION['err'] = "";
      }elseif ($_SESSION['err'] == "empty") {
            echo ' <div class="alert alert-warning">
              <strong>Warning!</strong> Email or Password is empty.
            </div>';
            $_SESSION['err'] = "";
      }

}

  ?>

  <form action="include/login.inc.php" method="POST">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="name" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
<!--     <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me (Not Working)
      </label>
    </div> -->
    <button type="submit " class="btn btn-primary btn-block" name="btnLogin">Login</button>
  </form>
</div>

</body>
</html>
