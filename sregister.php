<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>DCLM Taraba State | Registration Dashboard</title>
<!--         <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/js/bootstrap.min.js"> -->
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style4.css">

    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<style>
    .imgi {
  position: relative;
  text-align: center;
  color: white;
}

/* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>

 <script >
    $(document).ready(function()
    {
        $(".region").change(function(){
          var region_id = $(this).val();
          $.ajax({
            url:"ajaxdata.php",
            method:"POST",
            data:{region_id:region_id},
            success:function(data){
              $(".rgroup").html(data);
            }
          });
        });

          $(".rgroup").change(function(){
          var s_region_id = $(".region").val();
          var group_id = $(this).val();
          $.ajax({
            url:"ajaxdata.php",
            method:"POST",
            data:{s_region_id:s_region_id, group_id:group_id},
            success:function(data){
              $(".district").html(data);
            }
          });
        });
    })
  </script>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);">
            <div class="sidebar-header">
                <h3>DCLM Admin </h3>
                <strong>DA</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Dashboard
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">View all registered members</a>
                        </li>
                        <li>
                            <a href="#">View registration by region</a>
                        </li>
                        <li>
                            <a href="#">View registration by group</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                       <i class="fa fa-compass" aria-hidden="true"></i>

                        Create Locations
                    </a>
                   <!--  <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Pages
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul> -->
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-book" aria-hidden="true"></i>

                        Weekly Report
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-users" aria-hidden="true"></i>

                        Members Database
                    </a>
                </li>
                <!-- <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                        Contact
                    </a>
                </li> -->
            </ul>

            
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>

<!-- First container -->
<div class="container">
<div class="row">
    <div class="col-md-10">

       <form class="form-group" action="test.php" method="POST">
      <div >
        <label>Firstname:</label><br>
        <input class="form-control" type="text" name="firstname" required/>
      </div>

      <div>
        <label>Lastname:</label><br>
        <input class="form-control" type="text" name="lastname" required/>
      </div>

      <div>
        <label>Gender:</label><br>
        <select class="form-control" name="gender" required>
          <option value="">Select Gender</option>
          <option value="Female">Female</option>
          <option value="Male">Male</option>
        </select>
      </div>

<!-- Denomination Dropdown ends here -->
      <div>
        <label>Denomination:</label><br>
        <select class="form-control" name="denomination" required>
          <option>Select Denomination</option>
        <?php
          $sql2 = mysqli_query(mysqli_connect("localhost", "root", "", "successcamp"), "SELECT * FROM denomination");
          while( $row1 = mysqli_fetch_array($sql2)){
            $den_name = $row1['den_name'];
            echo "<option value='$den_name'>$den_name</option>";
          };
        ?> 
        </select>

      </div>
<!-- Denomination Dropdown ends here -->

      <label>Region</label>
      <select name="Region" class="region form-control">
        <option selected="selected">Select Region</option>
        <?php
          $sql = mysqli_query($conn, "SELECT * from region order by region_name ");


          while ($row = mysqli_fetch_array($sql)) {
           ?>
           <option value="<?php echo $row['id']; ?>">
            <?php echo $row['region_name']; ?></option>
        <?php
          }
        ?>
      </select>
      <label>Group</label>
      <select name="Rgroup" class="rgroup form-control">
        <option selected="selected">Select Group</option>
      </select>

      <label>District</label>
      <select name="District" class="district form-control">
        <option selected="selected">Select District</option>
      </select>

      <div>
        <label>School:</label><br>
        <input class="form-control" type="text" name="school" />
      </div>
      <div class="form-group">
        <label>Phone Number:</label><br>
        <input class="form-control" type="text" name="phnumber" />
      </div>

      <!-- Submit button starts here -->
      <div >
        <input class="btn btn-primary" type="submit" name="sreg" value="Register">
      </div>
      <!-- Submit ends here -->

    </form>


    </div>
    </div>  
    </div>
</div>
<!-- F C ends here -->

    <hr>
<!-- Second container begins here -->

    </div>
</div>
<!-- Second container ends here -->

   
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>