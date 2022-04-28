<?php 

include 'conn.php';

session_start();

error_reporting(0);

if (isset($_POST['submit'])) {
	$username = $_POST['UserName'];
	$password = ($_POST['Password']);

	$sql = "SELECT * FROM admin WHERE UserName='$username' AND Password='$password'";
	$result = mysqli_query($con, $sql);
	
    if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}

	if(mysqli_query($con, $sql)){
        header("Location: http://localhost/hotel_reception_management_system/dashboard.html");
        echo "\n Inserted";       
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style4.css">

	<title>Hotel Reception Management System</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="UserName" placeholder="UserName" name="UserName" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="Password" placeholder="Password" name="Password" value="<?php echo $_POST['Password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>