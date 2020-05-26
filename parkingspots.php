<?php
    session_start();
    $numberTaken = 0;

    if(!isset($_SESSION['firstRun'])){
        $_SESSION['firstRun'] = 1;
        
        $_SESSION["spot11"] = 0;
        $_SESSION["spot12"] = 0;
        $_SESSION["spot13"] = 0;
        $_SESSION["spot14"] = 0;
        $_SESSION["spot15"] = 0;
    
        $_SESSION["spot21"] = 0;
        $_SESSION["spot22"] = 0;
        $_SESSION["spot23"] = 0;
        $_SESSION["spot24"] = 0;
        $_SESSION["spot25"] = 0;
    
        $_SESSION["spot31"] = 0;
        $_SESSION["spot32"] = 0;
        $_SESSION["spot33"] = 0;
        $_SESSION["spot34"] = 0;
        $_SESSION["spot35"] = 0;
    
        $_SESSION["slotsTaken"] = 0;
    }
?> 
<html>
    <head>
		<?php include 'head.php' ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(document).ready(function() {
        setInterval(function(){
          $("#numOfSlots").load("getNumOfVehicle.php")
          }, 2000);
      });

    </script>
	</head>
        
	<body>
		<!-- Navbar primary -->
		<?php include 'nav.php' ?>
    
        <div class="section section-components">
            <div class="container">
            <h2 class="mb-0 text-center">Number of Available Parking Slots:<p class="display-1 mb-0" id ="numOfSlots"></p></h2>
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
                                    <img class="img-fluid parking-lot" src="images/parking.jpg" alt="">
                                    <img class="slot-1" <?php
                                        if($_SESSION["spot11"] == "1-1"){
                                            echo "src='images/red.png'";
                                            $numberTaken++;
                                        } else {
                                            echo "src='images/green.png'";
                                        }?> alt="">
                                    <img class="slot-2" <?php
                                        if($_SESSION["spot12"] == "1-2"){
                                            echo "src='images/red.png'";
                                            $numberTaken++;
                                        } else {
                                            echo "src='images/green.png'";
                                        }?> alt="">
                                    <img class="slot-3" <?php
                                        if($_SESSION["spot13"] == "1-3"){
                                            echo "src='images/red.png'";
                                            $numberTaken++;
                                        } else {
                                            echo "src='images/green.png'";
                                        }?> alt="">
                                    <img class="slot-4" <?php
                                        if($_SESSION["spot14"] == "1-4"){
                                            echo "src='images/red.png'";
                                            $numberTaken++;
                                        } else {
                                            echo "src='images/green.png'";
                                        }?> alt="">
                                    <img class="slot-5" <?php
                                        if($_SESSION["spot15"] == "1-5"){
                                            echo "src='images/red.png'";
                                            $numberTaken++;
                                        } else {
                                            echo "src='images/green.png'";
                                        }?> alt="">
                                </figure>
                                <figure class="tab-pane fade" id="tabs-text-2" role="tabpanel" aria-labelledby="tabs-text-2-tab">
                                    <img class="img-fluid parking-lot" src="images/parking.jpg" alt="">
                                    <img class="slot-1" <?php
                                        if($_SESSION["spot21"] == "2-1"){
                                            echo "src='images/red.png'";
                                            $numberTaken++;
                                        } else {
                                            echo "src='images/green.png'";
                                        }?> alt="">
                                    <img class="slot-2" <?php
                                        if($_SESSION["spot22"] == "2-2"){
                                            echo "src='images/red.png'";
                                            $numberTaken++;
                                        } else {
                                            echo "src='images/green.png'";
                                        }?> alt="">
                                    <img class="slot-3" <?php
                                        if($_SESSION["spot23"] == "2-3"){
                                            echo "src='images/red.png'";
                                            $numberTaken++;
                                        } else {
                                            echo "src='images/green.png'";
                                        }?> alt="">
                                    <img class="slot-4" <?php
                                        if($_SESSION["spot24"] == "2-4"){
                                            echo "src='images/red.png'";
                                            $numberTaken++;
                                        } else {
                                            echo "src='images/green.png'";
                                        }?> alt="">
                                    <img class="slot-5" <?php
                                        if($_SESSION["spot25"] == "2-5"){
                                            echo "src='images/red.png'";
                                            $numberTaken++;
                                        } else {
                                            echo "src='images/green.png'";
                                        }?> alt="">
                                </figure>
                                <figure class="tab-pane fade" id="tabs-text-3" role="tabpanel" aria-labelledby="tabs-text-3-tab">
                                    <img class="img-fluid parking-lot" src="images/parking.jpg" alt="">
                                    <img class="slot-1" <?php
                                        if($_SESSION["spot31"] == "3-1"){
                                            echo "src='images/red.png'";
                                            $numberTaken++;
                                        } else {
                                            echo "src='images/green.png'";
                                        }?> alt="">
                                    <img class="slot-2" <?php
                                        if($_SESSION["spot32"] == "3-2"){
                                            echo "src='images/red.png'";
                                            $numberTaken++;
                                        } else {
                                            echo "src='images/green.png'";
                                        }?> alt="">
                                    <img class="slot-3" <?php
                                        if($_SESSION["spot33"] == "3-3"){
                                            echo "src='images/red.png'";
                                            $numberTaken++;
                                        } else {
                                            echo "src='images/green.png'";
                                        }?> alt="">
                                    <img class="slot-4" <?php
                                        if($_SESSION["spot34"] == "3-4"){
                                            echo "src='images/red.png'";
                                            $numberTaken++;
                                        } else {
                                            echo "src='images/green.png'";
                                        }?> alt="">
                                    <img class="slot-5" <?php
                                        if($_SESSION["spot35"] == "3-5"){
                                            echo "src='images/red.png'";
                                            $numberTaken++;
                                        } else {
                                            echo "src='images/green.png'";
                                        }?> alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $_SESSION["slotsTaken"] = $numberTaken;?>

            <div class="col-md-4 m-auto pt-4">
                <button onclick='goBack()' class='btn btn-block btn-primary btn-lg m-auto mb-3'>Go Back</button>
            </div>
        </div>
                
        <!-- Footer -->
        <?php include "footer.php"; ?>
        
        <!-- Scripts -->
        <?php include 'scripts.php' ?> 
		
		<script>
            function goBack() {
                window.history.back();
            }
            // setTimeout(function(){ document.getElementById("addToDb").submit(); }, 10000);
        </script>
	</body>
</html>