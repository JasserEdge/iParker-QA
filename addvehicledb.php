<?php
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
	
	$license = $_POST['plateNumber'];
	$timeIn = $_POST['timeIn'];
	$date = $_POST['dateToday'];
	
	//make sql insert statement
	$sql="INSERT into vehicles(license_plate, time_in, date) values ('" . $license . "','" . $timeIn . "','" . $date . "');" ;
	//run the query 
	if(mysqli_query($conn, $sql)){
		header("Location:index.php");
		exit;
	} else{
		echo("Input data is fail");
	}

	mysqli_close($conn);
?>