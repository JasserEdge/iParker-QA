<?php
    session_start();
    $_SESSION['edit'] = 0;

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

        $id=$_SESSION['editID'];
        $license = $_POST['licensePlate'];
	    $type = $_POST['vehicleType'];

        $sql="UPDATE vehicles SET license_plate= '$license',
                                vehicle_type= '$type',
                                WHERE parking_id= $id";
        
        if(mysqli_query($conn, $sql)){ 
            $_SESSION['edit'] = 1;
	        header("Location:parkmanage.php");
	        exit();
        }else{
            $_SESSION['edit'] = 2;
            header("Location:parkmanage.php");
            exit();
        }
    
    mysqli_close($conn);
?>