<?php
include "connection.php";
include "session.php";
?>
<!Doctype Html>
<html>
	<head>
		<title>Fetch Dashboard</title>
		<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="#">SUCCESS CAMP 2020</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarText">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="registration.php">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="fetch.php">View Registered Participants</a>
		      </li>
		      <li class="nav-item pull-right">
		        
		      </li>
		    </ul>
		    <span class="navbar-text pull-right">
		      <a class="nav-link" href="logout.php">Logout</a>
		    </span>
		  </div>
		</nav>
	<div class="container">

		<h2>SEARCH RESULT TABLE</h2>
		
			<div class=" col-md-12 text-center">
				<a href="fetch.php" style="color:white"><button class="btn btn-success">Back To Registration Data Table</button></a> 
			</div>
		
			<?php   

$output = '';

//Collect data
if (isset($_POST['submit'])) {
	$name = $_POST['search'];

	$name = preg_replace("#[^0-9a-z]#i", "", $name);

	$query = "SELECT * FROM register WHERE firstname LIKE '%$name%' OR lastname LIKE '%$name%' OR district LIKE '%$name%' OR school LIKE '%$name%' OR phnumber LIKE '%$name%' OR denomination LIKE '%$name%' OR gender LIKE '%$name%'";
	$result = mysqli_query($conn, $query);
	$count = mysqli_num_rows($result);
	if($count == 0){
		$output = 'There was no search result';
		} else{
			
				

	?>
			
			

			
		<table class="table table-responsive table-hover table-bordered">
			<?php echo "<h4 class='search'>You searched for: $name </h4>";?>
			<thead>
				<tr>
					<td>S/N</td>
					<td>Firstname</td>
					<td>Lastname</td>
					<td>Gender</td>
					<td>Denomination</td>
					<td>District</td>
					<td>School</td>
					<td>Phone Number</td>
					<td colspan="2">Action</td>

				</tr>
			</thead>
			<tbody>
				
				

				<?php
		 		
  				function sec($data) {
							  $data = trim($data);
							  $data = stripslashes($data);
							  $data = htmlspecialchars($data);
							  return $data;
							};

  				while($row = mysqli_fetch_array($result)) {         
			    $id = sec($row["id"]);
			    $firstname = sec($row["firstname"]);
			    $lastname = sec($row["lastname"]);
			    $gender = sec($row["gender"]);
			    $denomination = sec($row["denomination"]);
			    $district = sec($row["district"]);
			    $school = sec($row["school"]);
			    $phnumber = sec($row["phnumber"]);

		?>
				<tr>
					
					<td><?php echo $id;?></td>
					<td><?php echo $firstname;?></td>
					<td><?php echo $lastname;?></td>
					<td><?php echo $gender;?></td>
					<td><?php echo $denomination;?></td>
					<td><?php echo $district;?></td>
					<td><?php echo $school;?></td>
					<td><?php echo $phnumber;?></td>
					<td class=""><a href="update.php?id=<?php echo $row['id']; ?>">Update</a></td>
					<td class=""><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
				</tr>
				
			</tbody>
		<?php }; ?>
		</table>
<?php }; ?>
	</div>
	<?php }; ?>

	<!-- Footer -->
	<?php include'footer.php';?>
	</body>
</html>