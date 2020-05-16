<?php
	session_start();
	$_SESSION['vehicle'] = 0;

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "softeng-iparker-db";

	$month = date('m');
	$day = date('d');
	$year = date('Y');

	$today = $year . '-' . $month . '-' . $day;
	$time = date("g:i:a");
	//create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	//check connection
	if(!$conn){
		die("Connection Failed:" . mysqli_connect_error());
	}
	
	
	//get data
	//get all information from  table
	if ($_SESSION['exists'] != 1) {
		$license = $_POST['licensePlate'];
		$type = $_POST['vehicleType'];

	} else {
		$license = $_SESSION['checkplate'];	
		$type =  $_SESSION['checktype'];
	}
	
	
	//$spot = "none";
	$timeIn = $time;
	//$timeOut = "none";
	$date = $today;
	
	//make sql insert statement
	$sql="INSERT into vehicles(license_plate, vehicle_type, time_in, date) values ('" . $license . "','" . $type . "','" . $timeIn . "','" . $date . "');" ;
	//run the query 
	if(mysqli_query($conn, $sql)){
		$_SESSION['vehicle'] = 1;
		header("Location:parkmanage.php");
		exit;
	} else{
		$_SESSION['vehicle'] = 2;
		header("Location:parkmanage.php");
		exit;
	}

	mysqli_close($conn);
?>