<?php
include ('connection.php');


	if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Test for duplicate entry
	$sql = "SELECT * FROM login WHERE username = '$_POST[username]' OR password = '$_POST[password]'";
	$result = mysqli_query($conn, $sql);
	

	if(mysqli_num_rows($result) > 0)
    
{
    echo "The name already exists in the database!";
    echo "<a href='register.php'>Click here to go back to registration table</a>";
    
}
 else{
		$sql = "INSERT INTO login(username, password) VALUES('$username', '$password')";
	$result = mysqli_query($conn, $sql);

	if ($result) {
    echo "<b>Item Successfully Added!</b>.";
    
    }//end then
    else {
    echo "<b>ERROR: unable to post.</b>";
    }//end else
};
}
?>