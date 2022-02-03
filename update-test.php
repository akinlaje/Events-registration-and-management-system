<?php
include'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE register set id='" . $_POST['id'] . "', firstname='" . $_POST['firstname'] . "', lastname='" . $_POST['lastname'] . "', gender='" . $_POST['gender'] . "' ,denomination='" . $_POST['denomination'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM register WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="update.php">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">Employee List</a>
</div>
Username: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">

<br>
First Name: <br>
<input type="text" name="firstname" class="txtField" value="<?php echo $row['firstname']; ?>">
<br>
Last Name :<br>
<input type="text" name="lastname" class="txtField" value="<?php echo $row['lastname']; ?>">
<br>
City:<br>
<input type="text" name="gender" class="txtField" value="<?php echo $row['gender']; ?>">
<br>
Email:<br>
<input type="text" name="denomination" class="txtField" value="<?php echo $row['denomination']; ?>">
<br>

<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>