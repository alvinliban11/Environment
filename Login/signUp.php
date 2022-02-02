<?php 
include 'include/header.php';

if (isset($_POST['submit'])) 
{
	//Get data
	$fname = $_POST['fname'];
	$eAdd = $_POST['eAdd'];
	$pass = $_POST['pass'];
	$ppass = $_POST['ppass'];
	
	if ($pass === $ppass)
	{
		$server = "localhost";
		$username = "root";
		$password = "";
		$database = "login";
		$conn = mysqli_connect($server, $username, $password, $database);
		$sql = "SELECT * FROM account WHERE email= '$eAdd'";
		$result = mysqli_query($conn, $sql);
		$code = rand(999999, 111111);
		
		if (!$result->num_rows > 0)
		{
			$sql = "INSERT INTO account(fullname,email,password,code) VALUES('$fname', '$eAdd', '$pass', '$code')";
			$result = mysqli_query($conn, $sql);
			echo "<script>alert('Registered Account')</script>";
			
			$sql = "SELECT code from account WHERE email = '$eAdd'";
			$result = mysqli_query($conn, $sql);
			if($result)
			{
				if(mysqli_num_rows($result) > 0 )
				{
					while($row = $result->fetch_assoc())
					{
						$to = $eAdd;
						$subject = "Verification Code";
						$message = "Your verification code is  " . $row['code'];
						$header = "From : patricia.mae.amar@gmail.com";
						$header = "MIME-Version: 1.0\r\n";
						$header = "Content-type: text/html\r\n";
						
						$retval = mail($to,$subject,$message,$header);
						
					}
				}
			} 
			header("location: verification.php");
			exit();
			
		}
	}
	else
	{
			echo "<script>alert('Password not match')</script>";
	}
}


?>
<head>
    <title>Sign up</title>
    <link rel="stylesheet" href="style/signUp.css?v=<?php echo time() ?>">
</head>
<main id="main">
    <form action="" method="POST">
        <div class="container">
            <h3>FIRST TIME HERE? SIGN UP!</h3>
            <label>Full Name</label>
            <input type="text" class="form-control"  name="fname" required/>
            <label>Email</label>	
            <input type="text" class="form-control" name="eAdd" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>   
            <label>Password</label>
            <input type="password" class="form-control" name="pass" required/>
            <label>Confirm Password</label>
            <input type="password" class="form-control" name="ppass" required/>
            <label><input type="checkbox" name="" id="" required/> I agree to terms of service</label>
            
             <div class="signup text-center">
            
             <label> <button class="text-center btn btn-success" name="submit">Sign Up</button><br>
            Already have an account? <a href="login.php">Click here</a>
            </label>
            </div>
        </div>
    </form>
</main>


<?php include 'include/footer.php' ?>