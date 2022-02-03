<?php
include'connection.php';
// Include user session
include "session.php";


$id = $_GET['id'];
$sql = "DELETE FROM registercon WHERE id=$id";
if ($conn->query($sql) === TRUE) {
   echo "<script>
				alert('This Convert details has been deleted');
				window.location.href='fetchconverts.php';
				</script>";
} else {
    echo "Error deleting record: " . $conn->error;
};
$conn->close();
?>