<?php
include ('connection.php');
// Include user session
	 function sec($data) {
				  $data = trim($data);
				  $data = stripslashes($data);
				  $data = htmlspecialchars($data);
				  return $data;
				};

	if (isset($_POST['register'])) {
	$fullname = sec($_POST['fullname']);
	$username = sec($_POST['username']);
	$password = sec($_POST['password']);
	
	// Test for duplicate entry
	$sql = "SELECT * FROM users WHERE username = '$_POST[username]' && password = '$_POST[password]'";
	$result = mysqli_query($conn, $sql);
	

	if(mysqli_num_rows($result) > 0)
    
{
    echo "<h2 style='text-align:center; font-size:25px; color:red;'>The username already exist!</h2>";
    
    
}
 else{

	$sql = "INSERT INTO users (fullname, username, password) VALUES('$fullname', '$username', '$password')";
	$result = mysqli_query($conn, $sql);
	
	if ($result) {
   header("Location:index.php");
    
    };
};


	}
?>
<!Doctype Html>
<html>
	<head>
		<title>DLSO Wukari Users Registration Dashboard</title>
		<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.css">
	</head>
	<body>
	<div class="container">
		<h3>Welcome To DLSO Wukari Registrars Registration Dashboard</h3>
		<div class="col-md-3">
		</div>

		<div class="col-md-9">
		<form class="form-group" action="register.php" method="POST">
			<div>
				<label>Fullname:</label><br>
				<input class="form-control" type="text" name="fullname">
			</div>

			<div>
				<label>Username:</label><br>
				<input class="form-control" type="text" name="username">
			</div>

			<div>
				<label>Password:</label><br>
				<input class="form-control" type="text" name="password">
			</div>

			<div >
				<input class="btn btn-primary" type="submit" value='Register' name="register">
			</div>
		</form>
	</div>
	</div>
	<!-- Footer -->
	<?php include'footer.php';?>
	</body>
</html