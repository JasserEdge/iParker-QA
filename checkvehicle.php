<?php
    session_start();

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
	//data
    $plate = $_POST['licensePlate'];
    $_SESSION['checkplate'] = $plate;
    $_SESSION['checktype'] = 0;
	$_SESSION['yes'] = 0;
	$_SESSION['exists'] = 0;

    
	//make sql insert statement
	$sql="SELECT * FROM vehicles WHERE license_plate ='$plate'";
	//check if SQL is correctly formed
									
    $query = mysqli_query($conn, $sql); 
    
    if($query){
        while($row = @mysqli_fetch_array($query)) {
            $_SESSION['checktype'] = $row['vehicle_type'];
        }
	}
	
	if(mysqli_num_rows($query) > 0) {
		$_SESSION['exists'] = 1;
		header("Location:addvehicledb.php");
		exit;
	} else{
		$_SESSION['yes'] = 1;
		$_SESSION['exists'] = 0;
		header("Location:addvehicle.php");
		exit;
	}
	mysqli_close($conn);
?>
									
		