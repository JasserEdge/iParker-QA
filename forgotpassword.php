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
                                    <span class='alert-inner--text'><strong>Invalid Email!</strong> Please Try Again!</span>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>
                            </div>";
                    }
                }
            ?>
            
            <div class="col-lg-4 col-sm-6 m-auto">
                <h4>Forgot your password?</h4>
                <small class="font-weight-bold">Enter your email and we'll send you a link to reset your password</small>
                <form id="login-form" method="post" action="forgotPasswordValidation.php" class="form-group">
                    <input name="email" type="email" placeholder="Email" class="form-control" required/>
                    <button type="submit" name="forgot_password" id="submit" class="ml-1 btn btn-primary btn-lg">Send link</button>
                </form>

                <!-- PAG INVALID EMAIL IDK PA HOW APPLY DIS HAHA -->
                <!--<div class="form-group has-danger">
                    <input type="email" placeholder="Error Input" class="form-control is-invalid" />
                </div>-->
            </div>
        </div>

        <!-- Footer -->
		<?php include "footer.php"; ?>

        <!-- Scripts -->
        <?php include 'scripts.php' ?> 
    </body>
</html>