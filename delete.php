<?php
include'connection.php';
// Include user session
include "session.php";


$id = $_GET['id'];
$sql = "DELETE FROM register WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    // Javascript alert with php and redirect to another page
	    	echo "<script>
				alert('Record deleted successfully');
				window.location.href='fetch.php';
				</script>";
} else {
    echo "Error deleting record: " . $conn->error;
};
$conn->close();
?>