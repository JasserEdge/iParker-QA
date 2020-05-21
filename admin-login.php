<?php
session_start();

$_SESSION['edit'] = 0;
$_SESSION['vehicle'] = 0;
$_SESSION['delete'] = 0;

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
	
//get data
//get all information from  table
	
$query="SELECT * from vehicles";
//run the query and store data in a variable
$data = @mysqli_query($conn, $query);

$numOfSlots = 76 - mysqli_num_rows($data);
?> 
<html>
	<head>
		<?php include "head.php"; ?>
	</head>

	<body>
		<?php
			if ($_SESSION['login'] == 1){
				echo "<div class=\"alert align-center fixed-top\">
						<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
						<strong>Invalid Login!</strong> Email or password might be incorrect. Please try again.
						</div> ";
			}
			$_SESSION['login'] = 0;

			
		?>
		<!-- Nav -->
		<?php include 'nav.php' ?>

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
								<form role="form">
									<div class="form-group mb-3">
										<div class="input-group input-group-alternative">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="ni ni-email-83"></i></span>
											</div>
											<input class="form-control" placeholder="Email" type="email">
										</div>
									</div>
									<div class="form-group focused">
										<div class="input-group input-group-alternative">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
											</div>
											<input class="form-control text" placeholder="Password" type="password">
										</div>
									</div>
									<div class="custom-control custom-control-alternative custom-checkbox">
										<input class="custom-control-input" id="customCheckLogin" type="checkbox">
										<label class="custom-control-label" for="customCheckLogin"><span>Remember me</span></label>
									</div>
									<div class="text-center">
										<button type="button" class="btn btn-primary my-4">Sign in</button>
									</div>
								</form>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-6">
								<a href="#" class="text"><small>Forgot password?</small></a>
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