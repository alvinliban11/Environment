<?php include 'include/header.php' ?>
<head>
    <title>Sign up</title>
    <link rel="stylesheet" href="style/signUp.css?v=<?php echo time() ?>">
</head>
<main id="main">
    <form action="verification.php" method="POST">
        <div class="container">
            <h3>FIRST TIME HERE? SIGN UP!</h3>
            <label>Full Name</label>
            <input type="text" class="form-control"  name="fname">
            <label>Email</label>
            <input type="text" class="form-control" name="eAdd">   
            <label>Password</label>
            <input type="password" class="form-control" name="pass">
            <label>Confirm Password</label>
            <input type="password" class="form-control" name="pass">
            <label><input type="checkbox" name="" id=""> I agree to terms of service</label>
            
             <div class="signup text-center">
            
             <label> <button class="text-center btn btn-success">Sign Up</button><br>
            Already have an account? <a href="login.php">Click here</a>
            </label>
            </div>
        </div>
    </form>
</main>
<?php include 'include/footer.php' ?>