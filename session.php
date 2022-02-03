<?php
include('connection.php');
session_start();

$username = $_SESSION['username'];

$ses_sql = mysqli_query($conn,"select username from users where username = '$username'");
$row = mysqli_fetch_array($ses_sql);
$login_session = $row['username'];

if(!isset($login_session)){
	header('Location: index.php');
}

?>