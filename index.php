<?php 
session_start();

if($_SESSION["slotsTaken"] == NULL){

$_SESSION["spot11"] = 0;
$_SESSION["spot12"] = 0;
$_SESSION["spot13"] = 0;
$_SESSION["spot14"] = 0;
$_SESSION["spot15"] = 0;

$_SESSION["spot21"] = 0;
$_SESSION["spot22"] = 0;
$_SESSION["spot23"] = 0;
$_SESSION["spot24"] = 0;
$_SESSION["spot25"] = 0;

$_SESSION["spot31"] = 0;
$_SESSION["spot32"] = 0;
$_SESSION["spot33"] = 0;
$_SESSION["spot34"] = 0;
$_SESSION["spot35"] = 0;

$_SESSION["slotsTaken"] = 0;
}

?>

<html>
	<head>
		<?php include 'head.php' ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(document).ready(function() {
        setInterval(function(){
          $("#numOfSlots").load("getNumOfVehicle.php")
          }, 2000);
      });

    </script>
	</head>

	<body>
		<!-- Navbar primary -->
		<?php include 'nav.php' ?>

		<div class="section section-components">
			<div class="container">
				<div class="column align-content-center text-center">
					<h1 class="mb-0">Number of Available Parking Slots:<h1 class="display-1 mb-0" id ="numOfSlots"></h1></h1>
					<a href="parkingspots.php" class="btn btn-primary btn-lg" type="button">View Parking Lot</a>
				</div>
			</div>
		</div>
			
		<!-- Footer -->
		<?php include "footer.php"; ?>

		<!-- Scripts -->
		<?php include 'scripts.php' ?> 
		
	</body>
	
</html>