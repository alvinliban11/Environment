<?php include 'include/header.php'; ?>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style/login.css">
     <link rel="stylesheet" href="style/signUp.css?v=<?php echo time() ?>">
</head>
<?php 
if (isset($_POST['btnLogin'])) {
   $_SESSION['learner_id'] = "1001";
   header("location: home.php");
}

?>
<main id="main">
    <form action="" method="POST">
        <div class="container">
            <h3>Login</h3>
            <label>Email Address</label>
            <input type="text" class="form-control" name="eAdd">   
            <label>Password</label>
            <input type="password" class="form-control" name="pass">
            
             <div class="signup text-center">
            <br>
             <label> <button type="submit" name="btnLogin" class="text-center btn btn-primary btn-block">Login</button><br>
           Don't have an account? <a href="signUp.php">Click here</a>
            </label>
            </div>
        </div>
    </form>
</main>

<?php include 'include/footer.php'; ?>