<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>
<!--         <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/js/bootstrap.min.js"> -->
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style4.css">

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
                <li class="active"><!-- href="#homeSubmenu" -->
                    <a  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
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
<div class="row ml-10 justify-content-center bg-dark">
        <div class="col-lg-3 col-md-3 bg-light  m-4 px-0">
                <?php 
                     $query = "SELECT * FROM region ";
                     $result = mysqli_query($conn, $query);

                     $rowcount=mysqli_num_rows($result);
                ?>
            <h1 class="bg-light text-center text-primary m-6" style="font-size: 70px"><?php echo "$rowcount"; ?></h1>
            <h3 class="text-center text-light bg-primary p-3">Registered Regions</h3>
        </div>

       <div class="col-lg-3 col-md-3 bg-light  m-4 px-0">
                <?php 
                     $query = "SELECT * FROM rgroup ";
                     $result = mysqli_query($conn, $query);

                     $countg=mysqli_num_rows($result);
                ?>
           <h1 class="bg-light text-center text-primary m-6" style="font-size: 70px"><?php echo $countg; ?></h1>
            <h3 class="text-center text-light bg-primary p-3">Registered Groups</h3>
        </div>

        <div class="col-lg-3 col-md-3 bg-light  m-4 px-0">
            <?php 
                     $query = "SELECT * FROM districts ";
                     $result = mysqli_query($conn, $query);

                     $countd=mysqli_num_rows($result);
                ?>
           <h1 class="bg-light text-center text-primary m-6" style="font-size: 70px"><?php echo $countd ?></h1>
            <h3 class="text-center text-light bg-primary p-3">Registered Districts</h3>
        </div>
    </div>
</div>
<!-- F C ends here -->

    <hr>
<!-- Second container begins here -->
<div class="container">
    <div class="row  justify-content-center bg-primary">
      <div class="col-lg-3 col-md-3 bg-light  mt-4 mb-4 px-0" style="border-right: 2px solid red">
        <?php 
                     $query = "SELECT * FROM registercon ";
                     $result = mysqli_query($conn, $query);

                     $convcount=mysqli_num_rows($result);
                ?>
           <h1 class="bg-light text-center text-primary m-6" style="font-size: 70px"><?php echo $convcount ?></h1>
            <h3 class="text-center text-light bg-primary p-3">Converts</h3>
        </div>
        <div class="col-lg-3 col-md-3 bg-light  mt-4 mb-4 px-0" style="border-right: 2px solid red">
            <?php 
                     $query = "SELECT * FROM sregister where denomination !='Deeper Life Bible Church' ";
                     $result = mysqli_query($conn, $query);

                     $sicount=mysqli_num_rows($result);
                ?>
           <h1 class="bg-light text-center text-primary m-6" style="font-size: 70px"><?php echo $sicount ?></h1>
            <h3 class="text-center text-light bg-primary p-3">Invitees</h3>
        </div>
        <div class="col-lg-3 col-md-3 bg-light  mt-4 mb-4 px-0" style="border-right: 2px solid red">

            <?php 
                     $query = "SELECT * FROM sregister where denomination ='Deeper Life Bible Church' ";
                     $result = mysqli_query($conn, $query);

                     $smcount=mysqli_num_rows($result);
                ?>
           <h1 class="bg-light text-center text-primary m-6" style="font-size: 70px"><?php echo $smcount ?></h1>
            <h3 class="text-center text-light bg-primary p-3">Members</h3>
        </div>
        <div class="col-lg-3 col-md-3 bg-light  mt-4 mb-4 px-0" >
            <?php 
                     $query = "SELECT * FROM sregister";
                     $result = mysqli_query($conn, $query);

                     $stcount=mysqli_num_rows($result);
                ?>
           <h1 class="bg-light text-center text-primary m-6" style="font-size: 70px"><?php echo $stcount ?></h1>
            <h3 class="text-center text-light bg-success p-3">TOTAL</h3>
        </div>
    </div>
           
        </div>
    </div>
</div>
<!-- Second container ends here -->

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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