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

    $timeOut = date("g:i:a");

    if(isset($_POST['get_post_btn'])){

        $sql="SELECT * FROM vehicles ORDER BY RAND() LIMIT 1";
        $query = mysqli_query($conn, $sql);
        
        if($query){ 
            while($row = @mysqli_fetch_array($query)){
                $id= $row['parking_id'];
                $sqlInsert = "UPDATE vehicles SET time_out='$timeOut' WHERE parking_id='$id'";

                if (mysqli_query($conn, $sqlInsert)) {
                    ?>
                        <input type="text" placeholder="License Plate" class="form-control" value="<?php echo $row['license_plate']?>" disabled />
                        <br>
                        <input type="text" placeholder="Time-In" class="form-control" value="<?php echo $row['time_in']?>" disabled/>
                        <br>
                        <input type="text" placeholder="Time-Out" class="form-control" value="<?php echo $timeOut?>" disabled/>
                        <br>
                        <input type="text" placeholder="Price" class="form-control" value="PHP 35" disabled/>
                        <br>
                <?php
                } else {
                    echo "failed";
                }
            }
            
        }else{
            echo "Database failure";
        }
    }

    mysqli_close($conn);
?>