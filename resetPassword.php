<?php 
session_start();
if(!isset($_SESSION['email'])){
	header('Location: forgotPassword.php?');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>iParker</title>

<!-- js file-->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="js/submit.js"></script>
<?php include 'head.php'?>


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
<body>
<?php include 'nav.php' ?>

<section class="section section-shaped section-lg">
			
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-5">
						<div class="card bg-secondary shadow border-0">
							<div class="card-body px-lg-5 py-lg-5">
								<div class="text-center text-muted mb-4">
									<h3>Password Reset</h3>
								</div>
								<form id="resetForm" method="post" action="userValidatePassword.php">
									<div class="form-group mb-3">
										<div class="input-group input-group-alternative">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
											</div>
									
											<input id ="edit-password" class="form-control"  name="password" placeholder="Password"  type="password" minlength="8" required>
											<span id = "passwordError" style ="color:red"></span>
										</div>
									</div>
									<div class="form-group focused">
										<div class="input-group input-group-alternative">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
											</div>
											<input class="form-control text"  id ="edit-co_password" name="co_password" placeholder="Confirm Password" type="password" minlength="8" required>
											<span id = "errorCo_password" style ="color:red"></span>
										</div>
									</div>
									<br><br>
								<span id = "submitError" style ="color:red"></span>
								<span id = "submitSuccess" style ="color:green"></span>
									<div class="text-center">
									<input type="submit" class="btn btn-primary my-4" id ="edit-saveNewPassword" name = "saveDetails"  value="Reset" required>
								<p class ="form-message"></p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
	  </section>
<?php include "footer.php"; ?>
<!-- javscript js -->
<?php include 'scripts.php' ?>
</body>
</html>


