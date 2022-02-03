<?php
include "connection.php";
include "session.php";
// Include user session
	

?>
<!Doctype Html>
<html>
	<head>
		<title>Success Camp 2020 | DLSO Wukari Registration Dashboard</title>
		<script src="jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/js/bootstrap.min.js">
		
	<style type="text/css">
	.panel {
			color: #fff;
			background: #5fcf80;
				margin: 10px -20px 20px -20px;
				padding: 10px 10px;
				font-size: 19px;
				font-weight: 600;
				text-align: center;
		};

	.note
		{
			
		};
	</style>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="#">SUCCESS CAMP 2020</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" 
		  data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarText">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="fetch.php">View Registered Participants</a>
		      </li>
		      <li class="nav-item pull-right">
		        
		      </li>
		    </ul>
		    <span class="navbar-text pull-right">
		      <a class="nav-link" href="logout.php">Logout</a>
		    </span>
		  </div>
		</nav>
	<div class="container">
	<div class="col-md-12" style="text-align: center;
			height: 80px;
			background: -webkit-linear-gradient(left, #0072ff, #8811c5);
			color: #fff;
			font-weight: bold;
			line-height: 80px; margin-top:20px; margin-button:30px">
			<h2 style="text-transform:uppercase">DLSO Wukari Region</h2>
			
		</div>
		<h3 style="text-align: center;">Success Camp 2020 Registration Dashboard</h3>
		<div class="row" style="margin-top:20px;">
		

		<div class="col-md-9">
		<form class="form-group" action="validate.php" method="POST">
			<div >
				<label>Firstname:</label><br>
				<input class="form-control" type="text" name="firstname" required/>
			</div>

			<div>
				<label>Lastname:</label><br>
				<input class="form-control" type="text" name="lastname" required/>
			</div>

			<div>
				<label>Gender:</label><br>
				<select class="form-control" name="gender" required>
					<option value="">Select Gender</option>
					<option value="Female">Female</option>
					<option value="Male">Male</option>
				</select>
			</div>

<!-- Denomination Dropdown ends here -->
			<div>
				<label>Denomination:</label><br>
				<select class="form-control" name="district" required>
					<option>Select Denomination</option>
				<?php
					$sql2 = mysqli_query($conn, "SELECT * FROM denomination");
					while( $row1 = mysqli_fetch_array($sql2)){
						$den_name = $row1['den_name'];
						echo "<option value='$den_name'>$den_name</option>";
					};
				?> 
				</select>

			</div>
<!-- Denomination Dropdown ends here -->

<!-- Region Dropdown begins here -->
				<div>
				<label>Region:</label><br>
				<select class="form-control" name="region" required>
					<option>Select Region</option>
				<?php
					$sql2 = mysqli_query($conn, "SELECT * FROM region");
					while( $row1 = mysqli_fetch_array($sql2)){
						$region_name = $row1['region_name'];
						echo "<option value='$region_name'>$region_name</option>";
					};
				?> 
				</select>

			</div>
<!-- Region Dropdown ends here -->

<!-- Group Dropdown begins here -->
			<div>
				<label>Group:</label><br>
				<select class="form-control" name="rgroup" required>
					<option>Select Group</option>
				<?php
					$sql2 = mysqli_query($conn, "SELECT * FROM rgroup");
					while( $row1 = mysqli_fetch_array($sql2)){
						$grp = $row1['grp'];
						echo "<option value='$grp'>$grp</option>";
					};
				?> 
				</select>

			</div>
<!-- Group Dropdown ends here -->

<!-- District Dropdown begins here -->
			<div>
				<label>District:</label><br>
				<select class="form-control" name="district" required>
					<option>Select District</option>
				<?php
					$sql2 = mysqli_query($conn, "SELECT * FROM district");
					while( $row1 = mysqli_fetch_array($sql2)){
						$district_name = $row1['district_name'];
						echo "<option value='$district_name'>$district_name</option>";
					};
				?> 
				</select>

			</div>
<!-- District Dropdown ends here -->

			<div>
				<label>School:</label><br>
				<input class="form-control" type="text" name="school" />
			</div>
			<div class="form-group">
				<label>Phone Number:</label><br>
				<input class="form-control" type="text" name="phnumber" />
			</div>

			<!-- Submit button starts here -->
			<div >
				<input class="btn btn-primary" type="submit" name="register" value="Register">
			</div>
			<!-- Submit ends here -->
			
		</form>
	</div>


	<!-- Navigation Panel Hangs Here -->
	<div class="col-md-3" style="background-color: #e3f2fd;">
		<?php include'sidebar.php'; ?>
	</div>

	</div>
	</div>
	<!-- Footer -->
	<?php include'footer.php';?>
	</body>
</html