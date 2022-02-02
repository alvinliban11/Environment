<?php include 'include/header.php'
?>
<head>
    <title>Verification</title>
    <link rel="stylesheet" href="style/signUp.css?v=<?php echo time() ?>">

</head>
<main id="main">
    <form action="" method="POST">
        <div class="container">
            <h3>Verification Email</h3>
            <p class="bg-warning" style="padding: 5px;">We sent code to your email </p>
            <label>Code</label>
            <input type="text" class="form-control"  name="fname">
            <br>
             <div class="signup text-center">
            
             <label> <button type="button" class="text-center btn btn-success" onclick="msg()">Confirm</button><br>
            </label>
            </div>
        </div>
    </form>
</main>
<script type="text/javascript">
    function msg(){
        swal({
    icon: "success",
    title: "Verification",
    text: "Email Verified!",
    type: "success"
    }).then(function() {
        window.location.href = "login.php";
    });
    }
    
</script>
<?php include 'include/footer.php' ?>