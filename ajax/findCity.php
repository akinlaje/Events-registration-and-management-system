<?php 
$countryId = intval($_GET['country']);
$stateId   = intval($_GET['state']);
$conn      = new mysqli("localhost", "root", "", "test");

// Check connection
if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}

$query  = "SELECT id, city FROM city WHERE countryid = '$countryId' AND stateid = '$stateId'";
$result = mysqli_query($conn, $query);

?>
<select name="city">
	<option>Select City</option>
	<?php while($row = mysqli_fetch_array($result)) { ?>
	<option value=<?php echo $row['id']?>><?php echo $row['city']?></option>
	<?php } ?>
</select>
