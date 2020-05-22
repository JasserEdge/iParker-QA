<?php
session_start();

include 'dbConnection.php';
//session_start();

if(isset($_POST['submit'])){

  $password = test_input($_POST['password']);
  $password_co = test_input($_POST['co_password']);

  $errorEmpty = false;
  $errorPassword = false;
  $errorPassword_co = false;
  $errorConfirm = false;

  if(empty($password) && empty($password_co)){

      //fields are empty
      $errorEmpty = true;

  }else{

      $errorEmpty = false;

  }

  if(!empty($password) && strlen($password) < 8){

      //Password field is not empty and length is less than 8
      $errorPassword = true;

  }else{

      $errorPassword = false;

  }

  if(!empty($password_co) && strlen($password_co) < 8){

      //Password field is not empty and length is less than 8
      $errorPassword_co = true;

  }else{

      $errorPassword_co = false;

  }

  if($password_co != $password ){

      //if confirmed password not equal to given password
      $errorConfirm = true;

  }else{

      $errorConfirm = false;

  }






}//End of isset($_POST['submit']


?>

<script>

var errorEmpty = "<?php echo $errorEmpty; ?>";
var errorPassword = "<?php echo $errorPassword; ?>";
var errorPassword_co = "<?php echo $errorPassword_co; ?>";
var errorConfirm = "<?php echo $errorConfirm; ?>";

console.log(errorEmpty);


if(errorEmpty == true){

  $("#submitError").html("Please fill out the fields to continue.");
  $("#submitError").show();
  $("#submitSuccess").hide();


}else{

  $("#submitError").hide();

}

if(errorPassword == true){

  $("#passwordError").html("Minimum password length is atleast 8");
  $("#passwordError").show();
  $("#submitSuccess").hide();


}else{

  $("#passwordError").hide();

}

if(errorPassword_co == true){

  $("#errorCo_password").html("Minimum password length is atleast 8");
  $("#errorCo_password").show();
  $("#submitSuccess").hide();


}else{

  $("#errorCo_password").hide();

}

if(errorConfirm == true){

  $("#submitError").html("Confirmed Password does not match given password.");
  $("#submitError").show();
  $("#submitSuccess").hide();

}else{

    $("#submitError").hide();

}


if(!errorEmpty && !errorPassword && !errorPassword_co && !errorConfirm){

  <?php

      if (isset($password, $password_co,$_SESSION['email'])) {
          $new_pass = mysqli_real_escape_string($con, $password);
          $new_pass_c = mysqli_real_escape_string($con, $password_co);
        //  $token =;  // Grab to token that came from the email link

              if ($new_pass != $new_pass_c) {
                $invalid = 1;
              }
              // $new_pass = password_hash($new_pass, PASSWORD_DEFAULT);

              if ($stmt = $con->prepare("UPDATE accounts SET password=? WHERE email=?")){

               $stmt->bind_param('ss', $new_pass,$_SESSION['email']);
               $stmt->execute();

                unset($_SESSION['email']);

             }

      }


  ?>

var content = '';
  $("#submitSuccess").html(
function myFunction() {
  alert("You successfully changed yours password");
  window.location.href = "admin-login.php";
}
);
  $("#submitSuccess").show();


  document.getElementById("resetForm").reset();
}

</script>
<?php 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data, ENT_QUOTES);
  return $data;
}
?>