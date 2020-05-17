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
        $spot = $_POST['parkingSpot'];
        
        $sql="UPDATE vehicles SET 
                parking_spot= '$spot'
                WHERE parking_id = ( SELECT * from ( SELECT MAX(parking_id) from vehicles) as t)";
        
        if(mysqli_query($conn, $sql)){ 
	        header("Location:parkmanage.php");
	        exit();
        }else{
            header("Location:contactus.php");
            exit();
        }
    
    mysqli_close($conn);
?>