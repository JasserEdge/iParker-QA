<?php 

include("dbConnection.php");
session_start();

if ( isset($_REQUEST['forgot_password'], $_REQUEST['email']) ) {
    if ($stmt = $con->prepare("SELECT email FROM accounts WHERE email=?")){
        $stmt->bind_param("s", $_REQUEST['email']);
        $stmt->execute();
        $result = $stmt->get_result();
        $rownum=mysqli_num_rows($result);
     
    
            if ($rownum> 0){
                while($row = $result->fetch_assoc()){//get result
                    $_SESSION['email'] = $row['email'];
                }
                
                header('Location: resetPassword.php?msg=' . $error);
    
    
            }else{
                
                header('Location: forgotPassword.php?msg=' . 1);
            }
    }
}


?>