<?php
include "connection.php";
include "session.php";
?>
<!Doctype Html>
<html>
	<head>
		<title>Fetch Dashboard</title>
		<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.css">
		<script src="assets/vendor/jquery/jquery.min.js"></script>
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

		<h2 style='text-align:center;'>REGISTERED PARTICIPANTS DATA</h2>
		
			<div class=" col-md-12 text-center">
				<form class="form-group" action="search.php" method="POST">
					<input type="text" name="search" class="form-control" placeholder="Type Name, District, Denomination, etc. here to Search" required/><br>
					<input type="submit" class="btn btn-success" value="Search" name="submit" />
				</form>  
			</div>
		

			<div> 
				<button type="button" style="float:right" class="btn btn-sm btn-success pull-right" onclick="print()">Print</button><br>
			</div>
			
		
		<hr>

		<table class="table table-responsive table-hover table-bordered">
			<thead>
				<tr style="text-align:center; text-transform:uppercase">
					<th>S/N</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Gender</th>
					<th>Denomination</th>
					<th>District</th>
					<th>School</th>
					<th>Phone Number</th>
					<th colspan="2">Action</th>

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

		 $query = "SELECT * from register ORDER BY id ASC";
        $results = mysqli_query($conn, $query);

        // The starting point of the iteration
        $i=1;
        // While statement 
        while ($row = mysqli_fetch_assoc($results)) {

           		$i;
			    $firstname = sec($row["firstname"]);
			    $lastname = sec($row["lastname"]);
			    $gender = sec($row["gender"]);
			    $denomination = sec($row["denomination"]);
			    $district = sec($row["district"]);
			    $school = sec($row["school"]);
			    $phnumber = sec($row["phnumber"]);

			    

		?>
				<tr>
					<!-- The $i++ increases the value by +1 -->
					<td><?php echo $i++; ?></td>
					<td><?php echo $firstname;?></td>
					<td><?php echo $lastname;?></td>
					<td><?php echo $gender;?></td>
					<td><?php echo $denomination;?></td>
					<td><?php echo $district;?></td>
					<td><?php echo $school;?></td>
					<td><?php echo $phnumber;?></td>
					<td class=""><a href="update.php?id=<?php echo $row["id"]; ?>">Update</a></td>
					<td class=""><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
				</tr>
				<?php }; ?>
			</tbody>
		</table>
	</div>

	<!-- Footer -->
	<?php include'footer.php';?>
	</body>
</html>