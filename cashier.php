<html>
    <head>
		<?php include 'head.php' ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script>
        $(document).ready(function() {
            $('#getData').click(function (e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "getvehicle.php",
                    data: {
                        "get_post_btn": 1
                    },
                    dataType: "text",
                    success: function (response){
                        $("#cashier-form").html(response);

                    }

                });

            });
        });
        </script>
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
                                    <form id="cashier-form" method="post" action="" class="form-group d-flex flex-column align-items-center">
                                        <input name="email" type="text" placeholder="License Plate" class="form-control" disabled/>
                                        <br>
                                        <input name="email" type="text" placeholder="Time-In" class="form-control" disabled/>
                                        <br>
                                        <input name="email" type="text" placeholder="Time-Out" class="form-control" disabled/>
                                        <br>
                                        <input name="email" type="text" placeholder="Price" class="form-control" disabled/>
                                    </form>
                                        <div class="text-center">
                                           <button type="submit" id="getData" value="" class="ml-1 btn btn-primary btn-lg mt-4">Scan Card</button>
                                            <br>
                                            <button type="submit" id="submit" class="ml-1 btn btn-primary btn-lg mt-4" data-toggle="modal" data-target="#exampleModalCenter">Pay</button>
                                        </div>
                                        
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">CASHIER</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>CASH REGISTER OPENED</h2>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
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