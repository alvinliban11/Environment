<?php include 'include/header.php'; ?>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style/login.css">
     <link rel="stylesheet" href="style/signUp.css?v=<?php echo time() ?>">
</head>
<?php 
session_start();
if (isset($_POST['btnLogin'])) 
{
		$eAdd = $_POST['eAdd'];
	$server = "localhost";
		$username = "root";
		$password = "";
		$database = "login";
		$conn = mysqli_connect($server, $username, $password, $database);
		$sql = "SELECT email, password FROM account WHERE email= '$eAdd'";
		$result = mysqli_query($conn, $sql);
		$_SESSION['learner_id'] = "";
		
		$eAdd = $_POST['eAdd'];
		$pass = $_POST['pass'];
		if($eAdd == " OR $pass == ")
		{
			echo "<script>alert('Invalid Username and Password')</script>";
			header('login.php');
		}
		else
		{
			
			$sql = "SELECT * FROM account WHERE email='$eAdd' AND password='$pass'";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) === 1) 
			{

            $row = mysqli_fetch_assoc($result);
			
			if ($row['email'] === $eAdd && $row['password'] === $pass)
			{
				 header("location: home.php");
				 exit();
			}
			elseif ($row['email'] === $eAdd && $row['password'] !== $pass)
			{
				echo "<script>alert('Wrong password')</script>";
				header('login.php');
			}
			else
			{
				echo "<script>alert('Account does not exist')</script>";
				header('login.php');
			}
			}
		}
  
}

?>
<main id="main">
    <form action="" method="POST">
        <div class="container">
            <h3>Login</h3>
            <label>Email Address</label>
            <input type="text" class="form-control" name="eAdd" required/>   
            <label>Password</label>
            <input type="password" class="form-control" name="pass" required/>
            
             <div class="signup text-center">
            <br>
             <label> <button type="submit" name="btnLogin" class="text-center btn btn-primary btn-block">Login</button><br>
           Don't have an account? <a href="signUp.php">Click here</a>
            </label>
            </div>
        </div>
    </form>
</main>

<?php include 'include/footer.php' ?>