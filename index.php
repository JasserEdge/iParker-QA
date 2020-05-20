<?php
session_start();

$_SESSION['edit'] = 0;
$_SESSION['vehicle'] = 0;
$_SESSION['delete'] = 0;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "softeng-iparker-db";
//create connection
	
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
	
if(!$conn){
	die("Connection Failed:" . mysqli_connect_error());
}
	
//get data
//get all information from  table
	
$query="SELECT * from vehicles";
//run the query and store data in a variable
$data = @mysqli_query($conn, $query);

$numOfSlots = 76 - mysqli_num_rows($data);
?> 

<html>
	<head>
		<?php include 'head.php' ?>
	</head>

	<body>
		
		<!-- Navbar primary -->
		<?php include 'nav.php' ?>

		<div class="section section-components">
			<div class="container mt-8">
				
				<div class="column align-content-center">
					<h1 class="mb-0">Number of Available Parking Slots:<h2><?php echo $numOfSlots?></h2></h1>
					<a href="parkingspots.php" class="btn btn-primary" type="button">View</a>
				</div>
				
					
					
				
			</div>
		</div>
		
		<!--<div class="wrapper">
			<div class="section section-hero section-shaped">
				<div class="shape shape-style-3 shape-default">
					<span class="span-150"></span>
					<span class="span-50"></span>
					<span class="span-50"></span>
					<span class="span-75"></span>
					<span class="span-100"></span>
					<span class="span-75"></span>
					<span class="span-50"></span>
					<span class="span-100"></span>
					<span class="span-50"></span>
					<span class="span-100"></span>
				</div>
				<div class="page-header">
					<div class="container shape-container d-flex align-items-center py-lg">
					<div class="col px-0">
						<div class="row align-items-center justify-content-center">
						<div class="col-lg-6 text-center">
							<h1 class="text-white display-1">Number of Available Parking Slots:</h1>
							<h2 class="display-4 font-weight-normal text-white"></h2>
							<div class="btn-wrapper mt-4">
							<a href="parkingspots.php" class="btn btn-warning btn-icon mt-3 mb-sm-0">
								View
							</a>
							</div>
						</div>
						</div>
					</div>
					</div>
				</div>
				<div class="separator separator-bottom separator-skew zindex-100">
					<svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
					<polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
					</svg>
				</div>
			</div>
			</div>-->
			
    <!-- Footer -->
	<?php include "footer.php"; ?>
	
	<!-- Scripts -->
	<?php include 'scripts.php' ?> 
		
	</body>
	
</html>