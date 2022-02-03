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
		<h3 style="text-align: center;">Success Camp 2020 Convert Registration</h3>
		<div class="row" style="margin-top:20px;">
		

		<div class="col-md-9">
		<form class="form-group" action="validatecon.php" method="POST">
			<div >
				<label>Firstname:</label><br>
				<input class="form-control" type="text" name="firstname" required/>
			</div>

			<div>
				<label>Lastname:</label><br>
				<input class="form-control" type="text" name="lastname" required/>
			</div>

			<div>
				<label>Address:</label><br>
				<input class="form-control" type="text" name="address" required/>
			</div>

			<div>
				<label>Gender:</label><br>
				<select class="form-control" name="gender">
					<option value="">Select Gender</option>
					<option value="Female">Female</option>
					<option value="Male">Male</option>
				</select>
			</div>

			<div>
				<label>Denomination:</label><br>
				<select class="form-control" name="denomination">
					<option value="">Select Denomination</option>
					<option value="CRC-N">CRC-N</option>
					<option value="DLBC">Deeper Life</option>
				</select>
			</div>

			<div>
				<label>District:</label><br>
				<select class="form-control" name="district">
					<option value="">Select District</option>
					<option value="Non Member">Non Deeper Life Member</option>
					<option value="BYEPYI District">BYEPYI</option>
					<option value="WAPAN District">WAPAN</option>
					<option value="JANTUKPA District">JANTUKPA</option>
					<option value="PWADZU District">PWADZU</option>
					<option value="KINKISO District">KINKISO</option>
					<option value="AVYI District">AVYI</option>
					<option value="MISSION District">MISSION</option>
					<option value="NEW PRISON District">NEW PRISON</option>
					<option value="AIR STRIP District">AIR STRIP</option>
					<option value="PUJE District">PUJE</option>
					<option value="KENTE District">KENTE</option>
					<option value="G/DOROWA District">G/DOROWA</option>
					<option value="CHANCHANJI District">CHANCHANJI</option>
					<option value="RAFIN-KADA District">RAFIN-KADA</option>
					<option value="CAMPUS District">CAMPUS</option>
					<option value="SOHWA District">SOHWA</option>
					<option value="YAM MARKET District">YAM MARKET</option>
					<option value="SARKIN-KUDU District">SARKIN-KUDU</option>
					<option value="RAFIN-SOJA District">RAFIN-SOJA</option>
					<option value="WAPAN SATTELITE District">WAPAN SATTELITE</option>
					<option value="HYUKU District">HYUKU</option>
					<option value="TOR-MUSA District">TOR-MUSA</option>
					<option value="NEW SITE/TEKAN District">NEW SITE/TEKAN</option>

				</select>
			</div>

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
				<input class="btn btn-primary" type="submit" name="registerconverts" value="Register">
			</div>
			<!-- Submit ends here -->
			
		</form>
	</div>


	<!-- Navigation Panel Hangs Here -->
	<div class="col-md-3" style="background-color: #e3f2fd;">
		
	    <?php include'sidebar.php';?>
	</div>

	</div>
	</div>
	<!-- Footer -->
	<?php include'footer.php';?>
	</body>
</html