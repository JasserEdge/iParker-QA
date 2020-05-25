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
	//get data from form
	$email = test_input($_POST['email']);
	$password = test_input($_POST['password']);
	//make sql
	$sql="SELECT * FROM accounts WHERE email='$email' AND password='$password'";
	//check if SQL is correctly formed
	$query = mysqli_query($conn, $sql); 

	if(mysqli_num_rows($query) > 0){
		
		while($row = @mysqli_fetch_array($query)){
			$emailtemp= $row['email'];
			$passtemp = $row['password'];
		}
			if(strcmp($passtemp,$password) == 0  ){
				$_SESSION['login'] = 1;
				header("Location:adminlog2.php");
				exit;
				
			}else{
				header("Location:admin-login.php?msg=1");
			}

	
	}else if($_POST['email'] == NULL || $_POST['password'] == NULL){
		header("Location:admin-login.php?msg=2");
	} else{
		mysqli_error($conn);
		
		header("Location:admin-login.php?msg=1");
		exit;
	}
	mysqli_close($conn);


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data, ENT_QUOTES);
  return $data;
}

?>
									
		