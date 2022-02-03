<html>
<head>
		<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/js/bootstrap.min.js">
		<script src="assets/vendor/jquery/jquery.min.js"></script>
</head>
<?php
include ('connection.php');
// Include user session
include "session.php";

	if (isset($_POST['register'])) {
	$firstname = sec($_POST['firstname']);
	$lastname = sec($_POST['lastname']);
	$gender = sec($_POST['gender']);
	$denomination = sec($_POST['denomination']);
	$district = sec($_POST['district']);
	$school = sec($_POST['school']);
	$phnumber = sec($_POST['phnumber']);

	// Test for duplicate entry
	$sql = "SELECT * FROM register WHERE firstname = '$_POST[firstname]' && lastname = '$_POST[lastname]'";
	$result = mysqli_query($conn, $sql);
	

	if(mysqli_num_rows($result) > 0)
    
{
    echo "<h2 style='text-align:center; font-size:25px; color:red;'>This Participant has already registered!</h2>";
    echo " <a  href='registration.php' style='text-decoration:none' ><h2 style='text-align:center; font-size:25px; color:white; background-color:green; padding:10px;'>Click here to go back to registration table</h2></a>";
    
}
 else{
		$sql = "INSERT INTO register(firstname, lastname, gender, denomination, district, school, phnumber) VALUES('$firstname', '$lastname', '$gender', '$denomination', '$district', '$school', '$phnumber')";
	$result = mysqli_query($conn, $sql);

	if ($result) {
   // Javascript alert with php and redirect to another page
	    	echo "<script>
				alert('Registration successfull');
				window.location.href='registration.php';
				</script>";
    
    }//end then
    else {
    echo "<b>ERROR: unable to post.</b>";
    }//end else
};
}

function sec($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
};

?>
</html>