<?php

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
    $query = array(
        "SELECT * from vehicles WHERE parking_spot='1-2nd'", 
        "SELECT * from vehicles WHERE parking_spot='2-2nd'",
        "SELECT * from vehicles WHERE parking_spot='3-2nd'",
        "SELECT * from vehicles WHERE parking_spot='4-2nd'",
        "SELECT * from vehicles WHERE parking_spot='5-2nd'",
        "SELECT * from vehicles WHERE parking_spot='6-2nd'",
        "SELECT * from vehicles WHERE parking_spot='7-2nd'",
        "SELECT * from vehicles WHERE parking_spot='8-2nd'",
        "SELECT * from vehicles WHERE parking_spot='9-2nd'",
        "SELECT * from vehicles WHERE parking_spot='10-2nd'",
        "SELECT * from vehicles WHERE parking_spot='11-2nd'",
        "SELECT * from vehicles WHERE parking_spot='12-2nd'",
        "SELECT * from vehicles WHERE parking_spot='13-2nd'",
        "SELECT * from vehicles WHERE parking_spot='14-2nd'",
        "SELECT * from vehicles WHERE parking_spot='15-2nd'",
        "SELECT * from vehicles WHERE parking_spot='16-2nd'",
        "SELECT * from vehicles WHERE parking_spot='17-2nd'",
        "SELECT * from vehicles WHERE parking_spot='18-2nd'",
        "SELECT * from vehicles WHERE parking_spot='19-2nd'",
        "SELECT * from vehicles WHERE parking_spot='20-2nd'",
        "SELECT * from vehicles WHERE parking_spot='21-2nd'",
        "SELECT * from vehicles WHERE parking_spot='22-2nd'",
        "SELECT * from vehicles WHERE parking_spot='23-2nd'",
        "SELECT * from vehicles WHERE parking_spot='24-2nd'",
        "SELECT * from vehicles WHERE parking_spot='25-2nd'",
        "SELECT * from vehicles WHERE parking_spot='26-2nd'",
        "SELECT * from vehicles WHERE parking_spot='27-2nd'",
        "SELECT * from vehicles WHERE parking_spot='28-2nd'",
        "SELECT * from vehicles WHERE parking_spot='29-2nd'",
        "SELECT * from vehicles WHERE parking_spot='30-2nd'",
        "SELECT * from vehicles WHERE parking_spot='31-2nd'",
        "SELECT * from vehicles WHERE parking_spot='32-2nd'",
        "SELECT * from vehicles WHERE parking_spot='33-2nd'",
        "SELECT * from vehicles WHERE parking_spot='34-2nd'");
    $query0 = array(
        "SELECT * from vehicles WHERE parking_spot='1-4th'", 
        "SELECT * from vehicles WHERE parking_spot='2-4th'",
        "SELECT * from vehicles WHERE parking_spot='3-4th'",
        "SELECT * from vehicles WHERE parking_spot='4-4th'",
        "SELECT * from vehicles WHERE parking_spot='5-4th'",
        "SELECT * from vehicles WHERE parking_spot='6-4th'",
        "SELECT * from vehicles WHERE parking_spot='7-4th'",
        "SELECT * from vehicles WHERE parking_spot='8-4th'",
        "SELECT * from vehicles WHERE parking_spot='9-4th'",
        "SELECT * from vehicles WHERE parking_spot='10-4th'",
        "SELECT * from vehicles WHERE parking_spot='11-4th'",
        "SELECT * from vehicles WHERE parking_spot='12-4th'",
        "SELECT * from vehicles WHERE parking_spot='13-4th'",
        "SELECT * from vehicles WHERE parking_spot='14-4th'",
        "SELECT * from vehicles WHERE parking_spot='15-4th'",
        "SELECT * from vehicles WHERE parking_spot='16-4th'",
        "SELECT * from vehicles WHERE parking_spot='17-4th'",
        "SELECT * from vehicles WHERE parking_spot='18-4th'",
        "SELECT * from vehicles WHERE parking_spot='19-4th'",
        "SELECT * from vehicles WHERE parking_spot='20-4th'",
        "SELECT * from vehicles WHERE parking_spot='21-4th'",
        "SELECT * from vehicles WHERE parking_spot='22-4th'",
        "SELECT * from vehicles WHERE parking_spot='23-4th'",
        "SELECT * from vehicles WHERE parking_spot='24-4th'",
        "SELECT * from vehicles WHERE parking_spot='25-4th'",
        "SELECT * from vehicles WHERE parking_spot='26-4th'",
        "SELECT * from vehicles WHERE parking_spot='27-4th'",
        "SELECT * from vehicles WHERE parking_spot='28-4th'",
        "SELECT * from vehicles WHERE parking_spot='29-4th'",
        "SELECT * from vehicles WHERE parking_spot='30-4th'",
        "SELECT * from vehicles WHERE parking_spot='31-4th'",
        "SELECT * from vehicles WHERE parking_spot='32-4th'",
        "SELECT * from vehicles WHERE parking_spot='33-4th'",
        "SELECT * from vehicles WHERE parking_spot='34-4th'",
        "SELECT * from vehicles WHERE parking_spot='35-4th'",
        "SELECT * from vehicles WHERE parking_spot='36-4th'",
        "SELECT * from vehicles WHERE parking_spot='37-4th'",
        "SELECT * from vehicles WHERE parking_spot='38-4th'",
        "SELECT * from vehicles WHERE parking_spot='39-4th'",
        "SELECT * from vehicles WHERE parking_spot='40-4th'",
        "SELECT * from vehicles WHERE parking_spot='41-4th'",
        "SELECT * from vehicles WHERE parking_spot='42-4th'");
?> 
<html>
    <head>
		<?php include 'head.php' ?>
	</head>
        
	<body>
		<!-- Navbar primary -->
		<?php include 'nav.php' ?>
    
        <div class="section section-components">
            <div class="container">
                <h3 class="h4 font-weight-bold mb-4">Available Parking Slots</h4>
                <div class="column justify-content-center">
                    <div class="nav-wrapper">
                        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-text" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-text-1-tab" data-toggle="tab" href="#tabs-text-1" role="tab" aria-controls="tabs-text-1" aria-selected="true">1st Floor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-2-tab" data-toggle="tab" href="#tabs-text-2" role="tab" aria-controls="tabs-text-2" aria-selected="false">2nd Floor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-3-tab" data-toggle="tab" href="#tabs-text-3" role="tab" aria-controls="tabs-text-3" aria-selected="false">3rd Floor</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card shadow">
                        <div class="card-body d-flex justify-content-center">
                            <div class="tab-content" id="myTabContent">
                                <figure class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
                                    <img class="img-fluid parking-lot" src="images/2ndflr.jpg" alt="">
                                    <img class="slot-1" src="images/green.png" alt="">
                                    <img class="slot-2" src="images/green.png" alt="">
                                    <img class="slot-3" src="images/red.png" alt="">
                                    <img class="slot-4" src="images/green.png" alt="">
                                    <img class="slot-5" src="images/red.png" alt="">
                                </figure>
                                <figure class="tab-pane fade" id="tabs-text-2" role="tabpanel" aria-labelledby="tabs-text-2-tab">
                                    <img class="img-fluid parking-lot" src="images/2ndflr.jpg" alt="">
                                    <img class="slot-1" src="images/red.png" alt="">
                                    <img class="slot-2" src="images/red.png" alt="">
                                    <img class="slot-3" src="images/red.png" alt="">
                                    <img class="slot-4" src="images/green.png" alt="">
                                    <img class="slot-5" src="images/red.png" alt="">
                                </figure>
                                <figure class="tab-pane fade" id="tabs-text-3" role="tabpanel" aria-labelledby="tabs-text-3-tab">
                                    <img class="img-fluid parking-lot" src="images/2ndflr.jpg" alt="">
                                    <img class="slot-1" src="images/green.png" alt="">
                                    <img class="slot-2" src="images/green.png" alt="">
                                    <img class="slot-3" src="images/green.png" alt="">
                                    <img class="slot-4" src="images/green.png" alt="">
                                    <img class="slot-5" src="images/green.png" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 m-auto pt-4">
                <button type="button" class="btn btn-block btn-primary btn-lg m-auto mb-3" data-toggle="modal" data-target="#modal-default">Park now</button>
                <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="modal-title-default">Thank you for using iParker!</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Time In: 12:00 PM</p>
                                <p>Parking Fee: 1 million</p>
                                <p>Etc etc etc</p>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-primary btn-lg">Done</button>
                                <!--<button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                
        <!-- Footer -->
        <?php include "footer.php"; ?>
        
        <!-- Scripts -->
        <?php include 'scripts.php' ?> 
		
		<!-- Scripts 
			<script src="assets/js/jquery.min.js"></script>	
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script> 

            <script>
                var slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                showSlides(slideIndex = n);
                }

                function goBack() {
                    window.history.back();
                }

                function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                if (n > slides.length) {slideIndex = 1}    
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slides[slideIndex-1].style.display = "block";  
                }
            </script>-->
	</body>
</html>