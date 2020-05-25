
<html>
	<head>
		<?php include "head.php"; ?>
	</head>

	<body>
		<!-- Nav -->
		<?php include 'nav.php' ?>
	           
		<?php 
                if (isset($_GET['msg'])){
                    if ($_GET['msg'] == 1) {
                        echo 
                            "<div class='col-lg-4 col-sm-6 m-auto'>
                                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                    <!--<span class='alert-inner--icon'><i class='ni ni-support-16'></i></span>-->
                                    <span class='alert-inner--text'><strong>Incorrect email or password</strong> Please try again.</span>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>
                            </div>";
                    }
                }
            ?>
		<!--<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>-->
			
		<!-- Banner 
		<section id="banner">
				<div class="feature">
					<div class="containersmall box center">
						<header class="align-center">
							<h2>Log In</h2>
						</header>
						<footer class="align-center">
							<form class=" form" action="login.php" method="post">
								<input type="email" name="email" required="required" placeholder="Email" autocomplete="off"/></br>
								<input type="password" name="password" required="required" placeholder="Password" autocomplete="off"/></br>
								<p><input class="button special" type='submit' value='Login'/><p>
							</form>
						</footer>			
					</div>
				</div>
			
		</section> -->

		<section class="section section-shaped section-lg">
			
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-5">
						<div class="card bg-secondary shadow border-0">
							<div class="card-body px-lg-5 py-lg-5">
								<div class="text-center text-muted mb-4">
									<h3>Login</h3>
								</div>
								<form id="login-form" method="post" action="login.php">
									<div class="form-group mb-3">
										<div class="input-group input-group-alternative">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="ni ni-email-83"></i></span>
											</div>
											<input class="form-control" placeholder="Email" type="email" name="email" required>
										</div>
									</div>
									<div class="form-group focused">
										<div class="input-group input-group-alternative">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
											</div>
											<input class="form-control text" placeholder="Password" type="password" name="password" required>
										</div>
									</div>
									<div class="custom-control custom-control-alternative custom-checkbox">
										<input class="custom-control-input" id="customCheckLogin" type="checkbox">
										<label class="custom-control-label" for="customCheckLogin"><span>Remember me</span></label>
									</div>
									
									<div class="text-center">
										<input type="submit" class="btn btn-primary my-4" value="Sign in"/>
									</div>
								</form>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-6">
								<a href="forgotpassword.php" class="text"><small>Forgot password?</small></a>
							</div>
							<div class="col-6 text-right">
								<a href="#" class="text"><small>Create new account</small></a>
							</div>
						</div>
					</div>
				</div>
			</div>
	  </section>
	  
	<!-- Footer -->
	<?php include "footer.php"; ?>

	<!-- Scripts 
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
		<script> 
		if (location.href.indexOf('reload')==-1){
			location.href=location.href+'?reload';
		}
		</script> -->

	<!-- Scripts -->
	<?php include 'scripts.php' ?> 

	</body>
</html>