<?php
include "connection.php";
	if (isset($_POST['update'])) {
		$id = $_POST["id"];
	    $firstname = $_POST["firstname"];
	    $lastname = $_POST["lastname"];
	    $gender = $_POST["gender"];
	    $denomination = $_POST["denomination"];
	    $district = $_POST["district"];
	    $school = $_POST["school"];
	    $phnumber = $_POST["phnumber"];

	    	$query = "UPDATE register set firstname='$firstname', lastname='$lastname', gender='$gender', denomination='$denomination', district='$district', school='$school', phnumber='$phnumber' where id='$id'";
	    $result = mysqli_query($conn, $query);
	    	// Javascript alert with php and redirect to another page
	    	echo "<script>
				alert('register updated successfully');
				window.location.href='fetch.php';
				</script>";

	    } else{
	    	$id = $_GET['id'];
	    }
			    

			
?>
<!Doctype Html>
<html>
	<head>
		<title>Registration Dashboard</title>
		<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.css">
	</head>
	<body>
		<?php

			$query = "SELECT * from register WHERE id='$id'";
  $results = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($results)) {
           
			    $id = $row["id"];
			    $firstname = $row["firstname"];
			    $lastname = $row["lastname"];
			    $gender = $row["gender"];
			    $denomination = $row["denomination"];
			    $district = $row["district"];
			    $school = $row["school"];
			    $phnumber = $row["phnumber"];
		?>
	<div class="container">
		<h3>Update Registration Database</h3>
		<div class="col-md-3">
		</div>

		<div class="col-md-9">
		<form class="form-group" action="update.php" method="POST">
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
				<label>Gender:</label><br>
				<select class="form-control" name="gender">
					<option value=""><?php echo $row['gender']?></option>
					<option value="Female">Female</option>
					<option value="Male">Male</option>
				</select>
			</div>

			<div>
				<label>Denomination:</label><br>
					<select class="form-control" name="denomination" required>
					<option value="">Select Denomination</option>
					<option value="CRC-N">CRC-N</option>
                    <option value="Assemblies of God">Assemblies of God</option>
					<option value="DLBC">Deeper Life</option>
					<option value="Lords Chosen">Lord's Chosen</option>
					<option value="Omega Fire Ministry">Omega Fire Ministry</option>
					<option value="ECWA">ECWA</option>
					<option value="Living Faith">Living Faith (Winners)</option>
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
					<option value="IBI">IBI</option>
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