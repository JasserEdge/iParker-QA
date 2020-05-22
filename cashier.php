<html>
    <head>
		<?php include 'head.php' ?>
    </head>
   
    <body>

        <!-- Navbar primary -->
        <?php include 'nav.php' ?>
        
        <div class="container">
            
            <section class="section section-shaped section-lg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card bg-secondary shadow border-0">
                                <div class="card-body px-lg-5 py-lg-5">
                                    <div class="text-center text-muted mb-4">
                                        <h3>Cashier</h3>
                                    </div>
                                    <form id="login-form" method="post" action="forgotPasswordValidation.php" class="form-group d-flex flex-column align-items-center">
                                        <input name="email" type="text" placeholder="License Plate" class="form-control" required/>
                                        <br>
                                        <input name="email" type="text" placeholder="Time-In" class="form-control" required/>
                                        <br>
                                        <input name="email" type="text" placeholder="Time-Out" class="form-control" required/>
                                        <br>
                                        <input name="email" type="text" placeholder="Price" class="form-control" required/>
                                        <br>
                                        <button type="submit" name="forgot_password" id="submit" class="ml-1 btn btn-primary btn-lg mt-4">Scan Card</button>
                                        <button type="submit" name="forgot_password" id="submit" class="ml-1 btn btn-primary btn-lg mt-4">Pay</button>
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