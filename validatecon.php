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

	if (isset($_POST['registerconverts'])) {
	$firstname = sec($_POST['firstname']);
	$lastname = sec($_POST['lastname']);
	$address = sec($_POST['address']);
	$gender = sec($_POST['gender']);
	$denomination = sec($_POST['denomination']);
	$district = sec($_POST['district']);
	$school = sec($_POST['school']);
	$phnumber = sec($_POST['phnumber']);

	// Test for duplicate entry
	$sql = "SELECT * FROM registercon WHERE firstname = '$_POST[firstname]' && lastname = '$_POST[lastname]'";
	$result = mysqli_query($conn, $sql);
	

	if(mysqli_num_rows($result) > 0)
    
{
    echo "<script>
				alert('This Convert details has been inputed before');
				window.location.href='convertsreg.php';
				</script>";
    
}
 else{
		$sql = "INSERT INTO registercon(firstname, lastname, address, gender, denomination, district, school, phnumber) VALUES('$firstname', '$lastname', '$address', '$gender', '$denomination', '$district', '$school', '$phnumber')";
	$result = mysqli_query($conn, $sql);

	if ($result) {
     // Javascript alert with php and redirect to another page
	    	echo "<script>
				alert('Convert Registration successfull');
				window.location.href='convertsreg.php';
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