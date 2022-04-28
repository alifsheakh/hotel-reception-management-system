<?php 

include 'conn.php';

error_reporting(0);

session_start();

if (isset($_POST['submit'])) {
	$name = $_POST['Name'];
    $username = $_POST['UserName'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];


		
        if (!$result->num_rows > 0) {
			$sql = "INSERT INTO admin (Name, UserName, Email, Password)
					VALUES ('$name', '$username', '$email', '$password')";
			$result = mysqli_query($con, $sql);
			
            if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$name = "";
                $username = "";
				$email = "";
				$_POST['Password'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
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
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">REGISTRATION</p>
			<div class="input-group">
				<input type="text" placeholder="Name" name="Name" value="<?php echo $name; ?>" required>
			</div>
            <div class="input-group">
				<input type="text" placeholder="Username" name="UserName" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="Email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="Password" value="<?php echo $_POST['Password']; ?>" required>
            </div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>