<html>
    <head>
		<?php include 'head.php' ?>
    </head>
   
    <body>

        <!-- Navbar primary -->
        <?php include 'nav.php' ?>
        
        <div class="container">
            
            <?php 
                if (isset($_GET['msg'])){
                    if ($_GET['msg'] == 1) {
                        echo 
                            "<div class='col-lg-4 col-sm-6 m-auto'>
                                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                    <!--<span class='alert-inner--icon'><i class='ni ni-support-16'></i></span>-->
                                    <span class='alert-inner--text'><strong>Incorrect email!</strong> Please Try Again!</span>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>
                            </div>";
                    }
                }
            ?>
            
            <section class="section section-shaped section-lg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card bg-secondary shadow border-0">
                                <div class="card-body px-lg-5 py-lg-5">
                                    <div class="text-center text-muted mb-4">
                                        <h3>Password Reset</h3>
                                        <small class="font-weight-bold">Enter your email to reset your password</small>
                                    </div>
                                    <form id="login-form" method="post" action="forgotPasswordValidation.php" class="form-group d-flex flex-column align-items-center">
                                        <input name="email" type="email" placeholder="Email" class="form-control" required/>
                                        <span id = "submitError" style ="color:red"></span>
                                        <button type="submit" name="forgot_password" id="submit" class="ml-1 btn btn-primary btn-lg mt-4">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
      

        <!-- Footer -->
		<?php include "footer.php"; ?>

        <!-- Scripts -->
        <?php include 'scripts.php' ?> 
    </body>
</html>