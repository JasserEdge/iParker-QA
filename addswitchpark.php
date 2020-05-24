<?php 
session_start();
?>
<html>
	<head>
        <?php include 'head.php' ?>
    </head>
    
	<body>
		<!-- Navbar primary -->
        <?php include 'nav.php' ?>

        <div class="container mr-auto ml-auto mt-5 mb-6">
            <h1>Simulated Hardware Switch</h1>
        </div>
        <!-- Toggle buttons -->
        <div class="d-flex flex-row justify-content-even">
    
            <div class="d-flex flex-column align-items-center">
                <div class="mb-3">
                    <small class="text-uppercase font-weight-bold">1st Floor</small>
                </div>
                <div class="d-flex flex-row">
                    <small class="text-uppercase font-weight-bold mr-2">1</small>
                    <label class="custom-toggle">
                        <form method="post" id="form11" action="addparkspot.php"> 
                            <input type="checkbox" <?php if($_SESSION["spot11"] == "1-1"){echo "checked";} ?>>
                            <span class="custom-toggle-slider rounded-circle" ></span>
                        </form>
                    </label>
                    <button type="submit" form="form11" name="spot11" value="1-1" class="btn btn-warning btn-sm">ON</button>
                    <button type="submit" form="form11" name="spot11" value="OFF11" class="btn btn-success btn-sm">OFF</button>
                </div>
                <div class="d-flex flex-row">
                    <small class="text-uppercase font-weight-bold mr-2">2</small>
                    <label class="custom-toggle">
                        <form method="post" id="form12" action="addparkspot.php"> 
                            <input type="checkbox" <?php if($_SESSION["spot12"] == "1-2"){echo "checked";} ?>>
                            <span class="custom-toggle-slider rounded-circle" ></span>
                        </form>
                    </label>
                    <button type="submit" form="form12" name="spot12" value="1-2" class="btn btn-warning btn-sm">ON</button>
                    <button type="submit" form="form12" name="spot12" value="OFF12" class="btn btn-success btn-sm">OFF</button>
                </div>
                <div class="d-flex flex-row">
                    <small class="text-uppercase font-weight-bold mr-2">3</small>
                    <label class="custom-toggle">
                        <form method="post" id="form13" action="addparkspot.php"> 
                            <input type="checkbox" <?php if($_SESSION["spot13"] == "1-3"){echo "checked";} ?>>
                            <span class="custom-toggle-slider rounded-circle" ></span>
                        </form>
                    </label>
                    <button type="submit" form="form13" name="spot13" value="1-3" class="btn btn-warning btn-sm">ON</button>
                    <button type="submit" form="form13" name="spot13" value="OFF13" class="btn btn-success btn-sm">OFF</button>
                </div>
                <div class="d-flex flex-row">
                    <small class="text-uppercase font-weight-bold mr-2">4</small>
                    <label class="custom-toggle">
                        <form method="post" id="form14" action="addparkspot.php"> 
                            <input type="checkbox" <?php if($_SESSION["spot14"] == "1-4"){echo "checked";} ?>>
                            <span class="custom-toggle-slider rounded-circle" ></span>
                        </form>
                    </label>
                    <button type="submit" form="form14" name="spot14" value="1-4" class="btn btn-warning btn-sm">ON</button>
                    <button type="submit" form="form14" name="spot14" value="OFF14" class="btn btn-success btn-sm">OFF</button>
                </div>
                <div class="d-flex flex-row">
                    <small class="text-uppercase font-weight-bold mr-2">5</small>
                    <label class="custom-toggle">
                        <form method="post" id="form15" action="addparkspot.php"> 
                            <input type="checkbox" <?php if($_SESSION["spot15"] == "1-5"){echo "checked";} ?>>
                            <span class="custom-toggle-slider rounded-circle" ></span>
                        </form>
                    </label>
                    <button type="submit" form="form15" name="spot15" value="1-5" class="btn btn-warning btn-sm">ON</button>
                    <button type="submit" form="form15" name="spot15" value="OFF15" class="btn btn-success btn-sm">OFF</button>
                </div>
            </div>

            <div class="d-flex flex-column align-items-center">
                <div class="mb-3">
                    <small class="text-uppercase font-weight-bold">2nd Floor</small>
                </div>
                <div class="d-flex flex-row">
                    <small class="text-uppercase font-weight-bold mr-2">1</small>
                    <label class="custom-toggle">
                        <form method="post" id="form21" action="addparkspot.php"> 
                            <input type="checkbox" <?php if($_SESSION["spot21"] == "2-1"){echo "checked";} ?>>
                            <span class="custom-toggle-slider rounded-circle" ></span>
                        </form>
                    </label>
                    <button type="submit" form="form21" name="spot21" value="2-1" class="btn btn-warning btn-sm">ON</button>
                    <button type="submit" form="form21" name="spot21" value="OFF21" class="btn btn-success btn-sm">OFF</button>
                </div>
                <div class="d-flex flex-row">
                    <small class="text-uppercase font-weight-bold mr-2">2</small>
                    <label class="custom-toggle">
                        <form method="post" id="form22" action="addparkspot.php"> 
                            <input type="checkbox" <?php if($_SESSION["spot22"] == "2-2"){echo "checked";} ?>>
                            <span class="custom-toggle-slider rounded-circle" ></span>
                        </form>
                    </label>
                    <button type="submit" form="form22" name="spot22" value="2-2" class="btn btn-warning btn-sm">ON</button>
                    <button type="submit" form="form22" name="spot22" value="OFF22" class="btn btn-success btn-sm">OFF</button>
                </div>
                <div class="d-flex flex-row">
                    <small class="text-uppercase font-weight-bold mr-2">3</small>
                    <label class="custom-toggle">
                        <form method="post" id="form23" action="addparkspot.php"> 
                            <input type="checkbox" <?php if($_SESSION["spot23"] == "2-3"){echo "checked";} ?>>
                            <span class="custom-toggle-slider rounded-circle" ></span>
                        </form>
                    </label>
                    <button type="submit" form="form23" name="spot23" value="2-3" class="btn btn-warning btn-sm">ON</button>
                    <button type="submit" form="form23" name="spot23" value="OFF23" class="btn btn-success btn-sm">OFF</button>
                </div>
                <div class="d-flex flex-row">
                    <small class="text-uppercase font-weight-bold mr-2">4</small>
                    <label class="custom-toggle">
                        <form method="post" id="form24" action="addparkspot.php"> 
                            <input type="checkbox" <?php if($_SESSION["spot24"] == "2-4"){echo "checked";} ?>>
                            <span class="custom-toggle-slider rounded-circle" ></span>
                        </form>
                    </label>
                    <button type="submit" form="form24" name="spot24" value="2-4" class="btn btn-warning btn-sm">ON</button>
                    <button type="submit" form="form24" name="spot24" value="OFF24" class="btn btn-success btn-sm">OFF</button>
                </div>
                <div class="d-flex flex-row">
                    <small class="text-uppercase font-weight-bold mr-2">5</small>
                    <label class="custom-toggle">
                        <form method="post" id="form25" action="addparkspot.php"> 
                            <input type="checkbox" <?php if($_SESSION["spot25"] == "2-5"){echo "checked";} ?>>
                            <span class="custom-toggle-slider rounded-circle" ></span>
                        </form>
                    </label>
                    <button type="submit" form="form25" name="spot25" value="2-5" class="btn btn-warning btn-sm">ON</button>
                    <button type="submit" form="form25" name="spot25" value="OFF25" class="btn btn-success btn-sm">OFF</button>
                </div>
            </div>

            <div class="d-flex flex-column align-items-center">
                <div class="mb-3">
                    <small class="text-uppercase font-weight-bold">3rd Floor</small>
                </div>
                <div class="d-flex flex-row">
                    <small class="text-uppercase font-weight-bold mr-2">1</small>
                    <label class="custom-toggle">
                        <form method="post" id="form31" action="addparkspot.php"> 
                            <input type="checkbox" <?php if($_SESSION["spot31"] == "3-1"){echo "checked";} ?>>
                            <span class="custom-toggle-slider rounded-circle" ></span>
                        </form>
                    </label>
                    <button type="submit" form="form31" name="spot31" value="3-1" class="btn btn-warning btn-sm">ON</button>
                    <button type="submit" form="form31" name="spot31" value="OFF31" class="btn btn-success btn-sm">OFF</button>
                </div>
                <div class="d-flex flex-row">
                    <small class="text-uppercase font-weight-bold mr-2">2</small>
                    <label class="custom-toggle">
                        <form method="post" id="form32" action="addparkspot.php"> 
                            <input type="checkbox" <?php if($_SESSION["spot32"] == "3-2"){echo "checked";} ?>>
                            <span class="custom-toggle-slider rounded-circle" ></span>
                        </form>
                    </label>
                    <button type="submit" form="form32" name="spot32" value="3-2" class="btn btn-warning btn-sm">ON</button>
                    <button type="submit" form="form32" name="spot32" value="OFF32" class="btn btn-success btn-sm">OFF</button>
                </div>
                <div class="d-flex flex-row">
                    <small class="text-uppercase font-weight-bold mr-2">3</small>
                    <label class="custom-toggle">
                        <form method="post" id="form33" action="addparkspot.php"> 
                            <input type="checkbox" <?php if($_SESSION["spot33"] == "3-3"){echo "checked";} ?>>
                            <span class="custom-toggle-slider rounded-circle" ></span>
                        </form>
                    </label>
                    <button type="submit" form="form33" name="spot33" value="3-3" class="btn btn-warning btn-sm">ON</button>
                    <button type="submit" form="form33" name="spot33" value="OFF33" class="btn btn-success btn-sm">OFF</button>
                </div>
                <div class="d-flex flex-row">
                    <small class="text-uppercase font-weight-bold mr-2">4</small>
                    <label class="custom-toggle">
                        <form method="post" id="form34" action="addparkspot.php"> 
                            <input type="checkbox" <?php if($_SESSION["spot34"] == "3-4"){echo "checked";} ?>>
                            <span class="custom-toggle-slider rounded-circle" ></span>
                        </form>
                    </label>
                    <button type="submit" form="form34" name="spot34" value="3-4" class="btn btn-warning btn-sm">ON</button>
                    <button type="submit" form="form34" name="spot34" value="OFF34" class="btn btn-success btn-sm">OFF</button>
                </div>
                <div class="d-flex flex-row">
                    <small class="text-uppercase font-weight-bold mr-2">5</small>
                    <label class="custom-toggle">
                        <form method="post" id="form35" action="addparkspot.php"> 
                            <input type="checkbox" <?php if($_SESSION["spot35"] == "3-5"){echo "checked";} ?>>
                            <span class="custom-toggle-slider rounded-circle" ></span>
                        </form>
                    </label>
                    <button type="submit" form="form35" name="spot35" value="3-5" class="btn btn-warning btn-sm">ON</button>
                    <button type="submit" form="form35" name="spot35" value="OFF35" class="btn btn-success btn-sm">OFF</button>
                </div>
            </div>

        </div>
       
        <!-- Footer -->
	    <?php include "footer.php"; ?>

        <!-- Scripts -->
        <?php include 'scripts.php' ?> 
	</body>
</html>