<?php

	session_start();

	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $dbname = "softeng-iparker-db";

	if ($_SESSION['login'] == 2){
		echo "<div class=\"alert success align-center fixed-top\">
				<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
				<strong>Successfully Logged in!</strong> 
				</div> ";
	}
	$_SESSION['login'] = 0;

	if(isset($_POST['search'])){
			$searchValue = $_POST['searchValue'];
			$query = "SELECT * FROM `vehicles` WHERE CONCAT(`parking_id`, `license_plate`, `vehicle_type`, `school_occupation`, `parking_spot`, `time_in`, `time_out`, `date`) LIKE '%".$searchValue."%' ";
			$data = searchTable($query);

		} else {
			$query= "SELECT * FROM vehicles where status=0";
			$data = searchTable($query);
		}
		function searchTable($query){
			$conn = mysqli_connect("localhost", "root", "", "softeng-iparker-db");
			$result = @mysqli_query($conn, $query);
			return $result;
		}

	//create connection
	// $conn = mysqli_connect($servername, $username, $password, $dbname);
	//check connection
	// if(!$conn){
	// 	die("Connection Failed:" . mysqli_connect_error());
	// }

	//get data
	//get all information from  table
	// $query="SELECT * from vehicles where status=0";
	//run the query and store data in a variable
	// $data = @mysqli_query($conn, $query);
	//display data

	$numOfSlots = 76 - mysqli_num_rows($data);


?>

<html>
	<head>
		<title>iParker Management System</title>
		<meta charset="utf-8" />
		<meta http-equiv="refresh" content="30" >
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--Main CSS-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/alert.css" />
		<link rel="stylesheet" href="assets/css/button.css" />
		<link rel="stylesheet" href="assets/css/modal.css" />
		<!--Font Awesome Icons-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<?php include 'head.php' ?>


	</head>
	<body class="landing">
		<?php
			if ($_SESSION['vehicle'] == 1){
				echo "<div class=\"alert success align-center fixed-top\">
						<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span>
						<strong>Vehicle successfully added!</strong>
						</div> ";
			}
			if ($_SESSION['vehicle'] == 2){
				echo "<div class=\"alert align-center fixed-top\">
						<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span>
						<strong>ERROR!</strong> vehicle invalid!
						</div> ";
			}
			$_SESSION['vehicle'] = 0;

			if ($_SESSION['delete'] == 1){
				echo "<div class=\"alert success align-center fixed-top\">
						<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span>
						<strong>Vehicle successfully deleted!</strong>
						</div> ";
			}
			if ($_SESSION['delete'] == 2){
				echo "<div class=\"alert align-center fixed-top\">
						<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span>
						<strong>ERROR!</strong> vehicle not deleted!
						</div> ";
			}
			$_SESSION['delete'] = 0;

			if ($_SESSION['edit'] == 1){
				echo "<div class=\"alert success align-center fixed-top\">
						<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span>
						<strong>Vehicle successfully update!</strong>
						</div> ";
			}
			if ($_SESSION['edit'] == 2){
				echo "<div class=\"alert align-center fixed-top\">
						<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span>
						<strong>ERROR!</strong> vehicle not updated!
						</div> ";
			}
			$_SESSION['edit'] = 0;


		?>
		<!-- Header -->
		<?php include 'nav.php' ?>


		<!-- Banner -->
			<section id="banner" class="wrapper style1">
				<header class="major special">
					<h2>iParker Management System<h2>
				</header>
				<div class="container">
					<div class="search">
					<form action="parkmanage.php" method="post">
					<label>Search: </label>
					<input type="text" class="text-center" name="searchValue" style="width: 50%;margin:0 auto;	 text-align: center!important;"/><br>
					<input type="submit" name="search" value="Search"/>
				</form>
				</div>
				<div class="container">
						<div style="color:white; width: 900.4px; margin: 0 auto; height:400px; overflow:auto;">
						<table >
							<tr>
								<th><h4 style="color:white">ID</h4></th>
								<th><h4 style="color:white">License Plate</h4></th>
								<th><h4 style="color:white">Vehicle Type</h4></th>
								<th><h4 style="color:white">Parking Spot</h4></th>
								<th><h4 style="color:white">Time-in</h4></th>
								<th><h4 style="color:white">Time-out</h4></th>
								<th><h4 style="color:white">Date</h4></th>
								<th></th>
							</tr>
							<?php
								if($data) {
									while($row = @mysqli_fetch_array($data)){ ?>
										<tr><td><?php echo $row['parking_id'];?></td>
										<td> <?php echo $row['license_plate'];?></td>
										<td> <?php echo $row['vehicle_type'];?></td>
										<td> <?php echo $row['parking_spot'];?></td>
										<td> <?php echo $row['time_in'];?></td>
										<td> <?php echo $row['time_out'];?></td>
										<td> <?php echo $row['date'];?></td>
										<td><a href="editplus.php?id='<?php echo $row['parking_id'];?>'" class="button buttoncolor edit small icon "><i class="fa fa-edit" style="font-size:24px"></i></a>
										<a href="deletevehicle.php?id='<?php echo $row['parking_id'];?>'" class="button buttoncolor delete small icon " onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o" style="font-size:24px"></i></a></td>
										</tr>
									<?php
									}
								}
								// mysqli_close($conn); //close connection
							?>
						</table>
						<button id="myBtn" class="button special">Add a Vehicle</button>
						</div>
					
				</div>
				<div class="container">
							<p>Number of Available slots:</p><p style="color:white"><?php echo $numOfSlots?></p>
				</div>
				<a href="pastdocumentation.php" class="button special">View Past Documentations</a>
				<a href="parkingspots.php" style="background-color: #0077be" class="button special">View parking spots layout</a><br><br>
				<a href="savedocumentation.php" class="button" onclick="return confirm('Are you sure you want to add to documentations? \nThis will close the day for management and clear the table.')">Add to Documentations</a>


				<!--Modal-->
				<div id="myModal" class="modal">
					<div class="modal-content ">
							<div class="modal-body containersmall align-center">
								<span class="close">&times;</span>
								<form class="form" action="checkvehicle.php" method="post">
									<p style="color:black">*License Plate: <input type="text" name="licensePlate" required="required" placeholder="ABC-1234" autocomplete="off"/></p>
									<p><input class="button special" type='submit' value='Add Vehicle'/><p>
								</form>
							</div>

					</div>
				</div>
			</section>



		<!-- Footer -->
		<?php include "footer.php"; ?>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script>
				// Get the modal
				var modal = document.getElementById("myModal");

				// Get the button that opens the modal
				var btn = document.getElementById("myBtn");

				// Get the <span> element that closes the modal
				var span = document.getElementsByClassName("close")[0];

				// When the user clicks the button, open the modal
				btn.onclick = function() {
				modal.style.display = "block";
				}

				// When the user clicks on <span> (x), close the modal
				span.onclick = function() {
				modal.style.display = "none";
				}

				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
				}
			</script>

			<?php include 'scripts.php' ?> 
	</body>
</html>
