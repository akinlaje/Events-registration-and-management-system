<?php
include ('connection.php');
 include "session.php";






?>
<html>
<head>
<title>Success Camp 2020 | Attendance</title>
		<script src="jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/js/bootstrap.min.js">
		
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
		        <a class="nav-link" href="registration.php">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="fetch.php">View Registered Participants</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="count.php">Attendance</a>
		      </li>
		      <li class="nav-item pull-right">
		        
		      </li>
		    </ul>
		    <span class="navbar-text pull-right">
		      <a class="nav-link" href="logout.php">Logout</a>
		    </span>
		  </div>
		</nav>
<div class="container" style="margin-top:20px;">
	<div class="row">

        <div class="col-md-3">
	        <h4>Total Attendance </h4>
	        	<div>
		<?php 
	     $query = "SELECT * FROM register ";
 $result = mysqli_query($conn, $query);

 $rowcount=mysqli_num_rows($result);
 echo "$rowcount";
		?>
	
	    </div>
	</div>
		<div class="col-md-3">
			<h4>Filter Attendance By District</h4>
				<form class="form-group" method="POST" action="">
	<select name="district">
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

	<input name="check" type="submit" value="Check">


	<div>
		<?php 
		if (isset($_POST['check'])) {
	$district=$_POST['district'];
echo $all = $conn->query("SELECT * FROM register where district='$district'")->num_rows;
};
		?>
	</div>
</form>
		</div>

		<div class="col-md-3">
			<h4>Filter Attendance By Denomination</h4>
			<form class="form-group" method="POST" action="">
				<select class="form-control" name="denomination">
					<option value="">Select Denomination</option>
					<option value="CRC-N">CRC-N</option>
					<option value="Assemblies of God">Assemblies of God</option>
					<option value="DLBC">Deeper Life</option>
					<option value="">Non</option>
				</select>

	<input name="sub" type="submit" value="Check">


	<div>
		<?php 
		if (isset($_POST['sub'])) {
	$denomination=$_POST['denomination'];
echo $all = $conn->query("SELECT * FROM register where denomination='$denomination'")->num_rows;
};
		?>
	</div>
</form>
		</div>

		<div class="col-md-3">
			<h4>Filter Attendance By Gender</h4>
			<form class="form-group" method="POST" action="">
				<select class="form-control" name="gender">
					<option value="">Select Gender</option>
					<option value="Female">Female</option>
					<option value="Male">Male</option>
				</select>

				<input name="gend" type="submit" value="Check">


				<div>
					<?php 
					if (isset($_POST['gend'])) {
				$gender=$_POST['gender'];
			echo $all = $conn->query("SELECT * FROM register where gender='$gender'")->num_rows;
			};
					?>
	</div>
	

	    
</form>
		</div>
	</div>
</div>



<!--Converts Count Starts here-->
<div class="container" style="margin-top:20px;">
	<div class="row">

        <div class="col-md-3">
	        <h4>Total Converts </h4>
	        	<div>
		<?php 
	     $query = "SELECT * FROM registercon ";
 $result = mysqli_query($conn, $query);

 $rowcount=mysqli_num_rows($result);
 echo "$rowcount";
		?>
	
	    </div>
	</div>
		<div class="col-md-3">
			<h4>Filter Converts By District</h4>
				<form class="form-group" method="POST" action="">
	<select name="district">
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
					
					<option value="TOR-MUSA District">TOR-MUSA</option>
					<option value="NEW SITE/TEKAN District">NEW SITE/TEKAN</option>
	</select>

	<input name="checkcon" type="submit" value="Check">


	<div>
		<?php 
		if (isset($_POST['checkcon'])) {
	$district=$_POST['district'];
echo $all = $conn->query("SELECT * FROM registercon where district='$district'")->num_rows;
};
		?>
	</div>
</form>
		</div>

		<div class="col-md-3">
			<h4>Filter Converts By Denomination</h4>
			<form class="form-group" method="POST" action="">
				<select class="form-control" name="denomination">
					<option value="">Select Denomination</option>
					<option value="CRC-N">CRC-N</option>
					<option value="Assemblies of God">Assemblies of God</option>
					<option value="DLBC">Deeper Life</option>
					<option value="">Non</option>
				</select>

	<input name="subcon" type="submit" value="Check">


	<div>
		<?php 
		if (isset($_POST['subcon'])) {
	$denomination=$_POST['denomination'];
echo $all = $conn->query("SELECT * FROM registercon where denomination='$denomination'")->num_rows;
};
		?>
	</div>
</form>
		</div>

		<div class="col-md-3">
			<h4>Filter Converts By Gender</h4>
			<form class="form-group" method="POST" action="">
				<select class="form-control" name="gender">
					<option value="">Select Gender</option>
					<option value="Female">Female</option>
					<option value="Male">Male</option>
				</select>

				<input name="gendcon" type="submit" value="Check">


				<div>
					<?php 
					if (isset($_POST['gendcon'])) {
				$gender=$_POST['gender'];
			echo $all = $conn->query("SELECT * FROM registercon where gender='$gender'")->num_rows;
			};
					?>
	</div>
	

	    
</form>
		</div>
	</div>
</div>

<div class="container">

	<div class="col-md-12">
		<div class="row">
		    <div class="col-md-3">
			<h4>Filter District Attendance By Gender</h4>
				<form class="form-group" method="POST" action="">
	<select name="district">
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

	<input name="checkgen" type="submit" value="Check">


	<div>
		<?php 
		if (isset($_POST['checkgen'])) {
	$district=$_POST['district'];
	echo "<h4>Female </h4>";
	echo $all = $conn->query("SELECT * FROM register where district='$district' && gender='Female'")->num_rows;
};

if (isset($_POST['checkgen'])) {
	$district=$_POST['district'];
	echo "<h4>Male </h4>";
	echo $all = $conn->query("SELECT * FROM register where district='$district' && gender='Male'")->num_rows;
};
		?>
	</div>
</form>
		</div>
		
		<div class="col-md-3">
		    <h4>Attendance For Thursday</h4>
		    	<?php 
		if (isset($_POST['checkgen'])) {
	$district=$_POST['district'];
	echo "<h4>Female </h4>";
	echo $all = $conn->query("SELECT * FROM register where id > 166 ")->num_rows;
};
?>
		</div>
		
	
	</div>

</div>
</div>

</body>
</html>