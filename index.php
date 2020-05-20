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
			
		<!-- Footer -->
		<?php include "footer.php"; ?>

		<!-- Scripts -->
		<?php include 'scripts.php' ?> 
		
	</body>
	
</html>