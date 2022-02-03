<?php
session_start();
include 'connection.php';

// $msg ="" ;

// if (isset($_POST['login'])) {
// 	$username= $_POST['username'];
// 	$password= $_POST['password'];
// 	$usertype= $_POST['usertype'];

// 	$sql = "SELECT * FROM login where username=? AND password=? AND userType=?";
// 	$stmt=$conn->prepare($sql);
// 	$stmt->bind_param('sss', $username, $password, $usertype );
// 	$stmt->execute();
// 	$result->bind_result($fullname, $username);
//     $stmt->store_result();
// 	session_regenerate_id();

// 	$_SESSION['username'] = $row['username'];
// 	$_SESSION['usertype'] = $row['usertype'];
// 	session_write_close();

// 	if($result->num_rows==1 && $_SESSION['role']=="student"){
// 		header('Location:student.php');
// 	} 
// 	elseif($result->num_rows==1 && $_SESSION['role']=="teacher"){
// 		header('Location:teacher.php');
// 	}	
// 	elseif($result->num_rows==1 && $_SESSION['role']=="admin"){
// 		header('Location:admin.php');
// 	}   
// 	else(!$result->num_rows==1 && $_SESSION['role']=="student"){
// 		$msg = "Username or password is incorrect"
// 	};
// }
?>
<?php
if (isset($_POST['region'])) {
	$region_name = $_POST['region_name'];


	$reg = "INSERT INTO region (region_name) VALUES('$region_name')";
	$sql1 = mysqli_query($conn, $reg);
};





// District input starts here
if (isset($_POST['district'])) {
	$region_id = $_POST['region_id'];
	$group_id = $_POST['group_id'];
	$district_name = $_POST['district_name'];

	$dist = "INSERT INTO districts (region_id, group_id ,district_name) VALUES('$region_id', '$group_id', '$district_name')";
	$sql2 = mysqli_query($conn, $dist);
	
};

if (isset($_POST['denomination'])) {
	$den_name = $_POST['den_name'];

	$den = "INSERT INTO denomination (den_name) VALUES('$den_name')";
	$sql3 = mysqli_query($conn, $den);
	
}
?>

<!-- Group insert starts here -->
<?php

if (isset($_POST['grpin'])) {
	$group_name = $_POST['group_name'];
	$region_id = $_POST['region_id'];

	$ent = mysqli_query($conn, "INSERT INTO rgroup (group_name, region_id) VALUES('$group_name', '$region_id')");
	var_dump($ent);
};
?>

<!DOCTYPE html>
<html>
<head>
	<title>DCLM North East Registration | Populate Region, Group and District</title>
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.css">
</head>
<body class="bg-dark">
<div class="container "><h3 class="text-center text-light bg-primary p-3 mt-2">Region, Group, &AMP; District Registration Dashboard</h3>
	<div class="row justify-content-center">

		<div class="col-lg-3 bg-light mt-5 m-4 px-0">
			<h3 class="text-center text-light bg-primary p-3">REGION</h3>
			<form action="populate.php" method="POST" class="p-4">
				<div class="form-group">
					<input type="text" class="form-control form-control-lg" placeholder="Region name" name="region_name" required/>
				</div>
				
				<input type="submit" name="region" class="btn btn-primary btn-block" value="Register Region">
			
			</form>
		</div>


		<div class="col-lg-3 bg-light mt-5 m-4 px-0">
			<h3 class="text-center text-light bg-primary p-3">Group</h3>
			<form action="populate.php" method="POST" class="p-4">
				<div class="form-group">
				<select name="region_id" class="region form-control">
			        <option selected="selected">Select Region</option>
			        <?php
			          $sql = mysqli_query($conn, "SELECT * from region order by region_name ");


			          while ($row = mysqli_fetch_array($sql)) {
			           ?>
			           <option value="<?php echo $row['id']; ?>">
			            <?php echo $row['region_name']; ?></option>
			        <?php
			          }
			        ?>
      			</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control form-control-lg" placeholder="Group name" name="group_name" required/>
				</div>
				
				<input type="submit" name="grpin" class="btn btn-primary btn-block" value="Register Group">
			
			</form>
		</div>

<!-- 
		<div class="col-lg-3 bg-light mt-5 m-4 px-0">
			<h3 class="text-center text-light bg-primary p-3">GROUP</h3>
			<form action="populate.php" method="POST" class="p-4">
				<div class="form-group">
					<input type="text" class="form-control form-control-lg" placeholder="Name of Group" name="group_name" required/>
				</div>
				
				<input type="submit" name="grpin" class="btn btn-primary btn-block" value="Register District">
			
			</form>
		</div>


 -->

 		<div class="col-lg-3 bg-light mt-5 m-4 px-0">
			<h3 class="text-center text-light bg-primary p-3">DISTRICT</h3>
			<form action="populate.php" method="POST" class="p-4">
				<div class="form-group">
				<select name="region_id" class="region form-control">
			        <option selected="selected">Select Region</option>
			        <?php
			          $sql = mysqli_query($conn, "SELECT * from region order by region_name ");


			          while ($row = mysqli_fetch_array($sql)) {
			           ?>
			           <option value="<?php echo $row['id']; ?>">
			            <?php echo $row['region_name']; ?></option>
			        <?php
			          }
			        ?>
      			</select>
				</div>

				<div class="form-group">
				<select name="group_id" class="region form-control">
			        <option selected="selected">Select Group</option>
			        <?php
			          $sql = mysqli_query($conn, "SELECT * from rgroup order by group_name ");


			          while ($row = mysqli_fetch_array($sql)) {
			           ?>
			           <option value="<?php echo $row['id']; ?>">
			            <?php echo $row['group_name']; ?></option>
			        <?php
			          }
			        ?>
      			</select>
				</div>

				<div class="form-group">
					<input type="text" class="form-control form-control-lg" placeholder="Name of district" name="district_name" required/>
				</div>
				
				<input type="submit" name="district" class="btn btn-primary btn-block" value="Register District">
			
			</form>
		</div>
	</div>

	<div class="row justify-content-center">
		<div class="col-lg-3 bg-light mt-5 m-4 px-0">
			<h3 class="text-center text-light bg-primary p-3">DENOMINATION</h3>
			<form action="populate.php" method="POST" class="p-4">
				<div class="form-group">
					<input type="text" class="form-control form-control-lg" placeholder="Name of denomination" name="den_name" required/>
				</div>
				
				<input type="submit" name="denomination" class="btn btn-primary btn-block" value="Register Denomination">
			
			</form>
		</div>
	</div>
</div>
</body>
</html>