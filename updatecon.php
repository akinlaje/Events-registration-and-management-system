<?php
include "connection.php";
	// This get the id when the update button is clicked
	$id = $_GET['id'];

	// This sends the update into the database
	if (isset($_POST['update'])) {
		$id = $_POST["id"];
	    $firstname = $_POST["firstname"];
	    $lastname = $_POST["lastname"];
	    $address = $_POST["address"];
	    $gender = $_POST["gender"];
	    $denomination = $_POST["denomination"];
	    $district = $_POST["district"];
	    $school = $_POST["school"];
	    $phnumber = $_POST["phnumber"];

	    	$query = "UPDATE registercon set firstname='$firstname', lastname='$lastname', address='$address', gender='$gender', 
	    	denomination='$denomination', district='$district', school='$school', phnumber='$phnumber' 
	    	where id='$id'";
	    $result = mysqli_query($conn, $query);
	    	// Javascript alert with php and redirect to another page
	    	echo "<script>
				alert('Convert details updated successfully');
				window.location.href='fetchconverts.php';
				</script>";

	    } else{
	    	
	    }
			    

			
?>
<!Doctype Html>
<html>
	<head>
		<title>Success Camp | Update Participants Registration</title>
		<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.css">
	</head>
	<body>
		<?php
			// This will echo all the data in the id meant for update
			$query = "SELECT * from registercon WHERE id='$id'";
  $results = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($results)) {
           
			    $id = $row["id"];
			    $firstname = $row["firstname"];
			    $lastname = $row["lastname"];
			    $address = $row["address"];
			    $gender = $row["gender"];
			    $denomination = $row["denomination"];
			    $district = $row["district"];
			    $school = $row["school"];
			    $phnumber = $row["phnumber"];
		?>
	<div class="container">
		<div class="col-md-12" style="text-align: center;
			height: 80px;
			background: -webkit-linear-gradient(left, #0072ff, #8811c5);
			color: #fff;
			font-weight: bold;
			line-height: 80px; margin-top:20px; margin-button:30px">
			<h2 style="text-transform:uppercase">DLSO Wukari Region</h2>
			
		</div>
		<h3 style="text-align:center">Update Participants Registration</h3>
		

		<div class="col-md-12">
		<form class="form-group" action="update.php" method="POST">

			<!-- Ensure to post ID also. so that the POST variable can know the ID to update -->
			<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">

			<div >
				<label>Firstname:</label><br>
				<input class="form-control" type="text" name="firstname" value="<?php echo $row['firstname']?>" required/>
			</div>

			<div>
				<label>Lastname:</label><br>
				<input class="form-control" type="text" name="lastname" value="<?php echo $row['lastname']?>" required/>
			</div>

			<div>
				<label>Address:</label><br>
				<input class="form-control" type="text" name="address" value="<?php echo $row['address']?>" required/>
			</div>

			<div>
				<label>Gender:</label><br>
				<select class="form-control" name="gender">
					<option value=""><?php echo $row['gender']?></option>
					<option value="Female">Female</option>
					<option value="Male">Male</option>
				</select>
			</div>

			<div>
				<label>Denomination:</label><br>
				<select class="form-control" name="denomination">
					<option value=""><?php echo $row['denomination']?></option>
					<option value="CRC-N">CRC-N</option>
					<option value="DLBC">Deeper Life</option>
				</select>
			</div>

			<div>
				<label>District:</label><br>
				<select class="form-control" name="district">
					<option value=""><?php echo $row['district']?></option>
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
				<input class="form-control" type="text" name="school" value="<?php echo $row['school']?>" />
			</div>
			<div class="form-group">
				<label>Phone Number:</label><br>
				<input class="form-control" type="text" name="phnumber" value="<?php echo $row['phnumber']?>"/>
			</div>

			<!-- Submit button starts here -->
			<div >
				<input class="btn btn-primary" type="submit" name="update" value="Update">
			</div>
			<!-- Submit ends here -->
			<?php }; ?>
		</form>
	</div>
	</div>
	<!-- Footer -->
	<?php include'footer.php';?>
	</body>
</html