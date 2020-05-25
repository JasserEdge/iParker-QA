<?php
    $month = date('m');
	$day = date('d');
	$year = date('Y');

	$today = $year . '-' . $month . '-' . $day;
    $time = date("g:i:a");
    
    $fourRandom = rand(1000,9999);
    $threeRandom = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 3)), 0, 3);

    $plateNumber = $threeRandom . " " . $fourRandom;
?> 
<html>
    <head>
		<?php include 'head.php' ?>
         <script>
      $(document).ready(function() {
        setInterval(function(){
          $("#numOfSlots").load("getNumOfVehicle.php")
          }, 2000);
      })
    </script>
	</head>
        
	<body>
		<!-- Navbar primary -->
		<?php include 'nav.php' ?>
    
        <div class="section section-components">
            <div class="container">
                <h2 class="mb-0">Number of Available Parking Slots:<h2 class="display-1 mb-0" id ="numOfSlots"></h2></h2>
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
                <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                        <div class="modal-content text-center">
                            <div class="modal-header">
                                <h3 class="modal-title" id="modal-title-default">Thank you for using iParker!</h3>
                            </div>
                            <div class="modal-body">
                                <h6>Plate Number:</h6><p><?php echo $plateNumber?></p>
                                <h6>Date:</h6> <p><?php echo $today?></p>
                                <h6>Time In:</h6> <p><?php echo $time?></p>
                                <h6>Parking Fee:</h6> <p> PHP 35</p>
                            </div>
                            <div class="modal-footer justify-content-center">
                            <form id="addToDb" action="addvehicledb.php" method="post">
                                <input type="hidden" id="plateNumber" name="plateNumber" value="<?php echo $plateNumber ?>">
                                <input type="hidden" id="timeIn" name="timeIn" value="<?php echo $time ?>">
                                <input type="hidden" id="dateToday" name="dateToday" value="<?php echo $today ?>">
                            </form>
                                <button type="submit" id="done" form="addToDb" class="btn btn-primary btn-lg">Done</button>
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
		
		<script>
            // setTimeout(function(){ document.getElementById("addToDb").submit(); }, 10000);
        </script>
	</body>
</html>