<?php 
session_start();
// if(!isset($_SESSION['email'])){
// 	header('Location: forgotPassword.php?');
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>iParker</title>

<!-- js file-->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="js/submit.js"></script>


<!-- Validate Change Password form-->
<script>

  $(document).ready(function() {
      $("form").submit(function(event) {

          event.preventDefault();
          var password = $("#edit-password").val();
          var co_password = $("#edit-co_password").val();
					var submit = $("#edit-saveNewPassword").val();

          $(".form-message").load("userValidatePassword.php", {
                password: password,
                co_password:co_password,
				submit:submit

          });
      });
  });
</script>
</head>
<body >
<!-- Enter email (forgot password) -->
<section id="login" >
    <div class="container">
      <div class="row">
        <div >
			    <div class="wow fadeInUp section-title" data-wow-delay="0.3s" >
			      <h2>Password Reset</h2>

					</div>

				  <div class="login-form wow fadeInUp" data-wow-delay="0.7s">
						<form id="resetForm" method="post" action="userValidatePassword">

								<label for="password"><h4>Passsword:</h4></label>
								<input type="password"  id ="edit-password" name="password">
								<!-- display error message -->
								<span id = "passwordError" style ="color:red"></span>


								<label for="co_password"><h4>Confirm Password:</h4></label>
								<input type="password"  id ="edit-co_password" name="co_password" required>
								<!-- display error message -->
								<span id = "errorCo_password" style ="color:red"></span>

								<br><br>
								<span id = "submitError" style ="color:red"></span>
								<span id = "submitSuccess" style ="color:green"></span>


								<div class="panel-body">
								<input type="submit" id ="edit-saveNewPassword" name = "saveDetails"  value="Submit" required>
								<p class ="form-message"></p>
								</div>

						</form>
					 </div>
			 </div>
		 </div>
	 </div>
</section>

<!-- javscript js -->

</body>
</html>
<script>


