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
        $spot = $_POST['parkingSpots'];
        
        $sql="UPDATE vehicles SET 
                parking_spot = '$spot'
                ORDER BY parking_id desc limit 1";
        
        if(mysqli_query($conn, $sql)){ 
	        header("Location:contactus.php");
        }else{
            header("Location:contactus.php");
            exit();
        }
    
    mysqli_close($conn);
?>