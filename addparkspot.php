<?php
    session_start();

    //first floor kayo mag loop kung kaya ninyo hahahah    
    $spot11 = $_POST["spot11"]; 
    $spot12 = $_POST["spot12"];     
    $spot13 = $_POST["spot13"]; 
    $spot14 = $_POST["spot14"];  
    $spot15 = $_POST["spot15"];
    
    if ($spot11 == "1-1"){
        $_SESSION["spot11"] = $spot11;
    } else if ($spot11 == "OFF11"){
        $_SESSION["spot11"] = "OFF11";
    } else if ($spot12 == "1-2"){
        $_SESSION["spot12"] = $spot12;
    } else if ($spot12 == "OFF12"){
        $_SESSION["spot12"] = "OFF12";
    } else if ($spot13 == "1-3"){
        $_SESSION["spot13"] = $spot13;
    } else if ($spot13 == "OFF13"){
        $_SESSION["spot13"] = "OFF13";
    } else if($spot14 == "1-4"){
        $_SESSION["spot14"] = $spot14;
    } else if ($spot14 == "OFF14"){
        $_SESSION["spot14"] = "OFF14";
    } else if($spot15 == "1-5"){
        $_SESSION["spot15"] = $spot15;
    } else if ($spot15 == "OFF15"){
        $_SESSION["spot15"] = "OFF15";
    } 

     //Second floor 
     $spot21 = $_POST["spot21"]; 
     $spot22 = $_POST["spot22"];     
     $spot23 = $_POST["spot23"]; 
     $spot24 = $_POST["spot24"];  
     $spot25 = $_POST["spot25"];
     
     if ($spot21 == "2-1"){
         $_SESSION["spot21"] = $spot21;
     } else if ($spot21 == "OFF21"){
         $_SESSION["spot21"] = "OFF21";
     } else if ($spot22 == "2-2"){
         $_SESSION["spot22"] = $spot22;
     } else if ($spot22 == "OFF22"){
         $_SESSION["spot22"] = "OFF22";
     } else if ($spot23 == "2-3"){
         $_SESSION["spot23"] = $spot23;
     } else if ($spot23 == "OFF23"){
         $_SESSION["spot23"] = "OFF23";
     } else if($spot24 == "2-4"){
         $_SESSION["spot24"] = $spot24;
     } else if ($spot24 == "OFF24"){
         $_SESSION["spot24"] = "OFF24";
     } else if($spot25 == "2-5"){
         $_SESSION["spot25"] = $spot25;
     } else if ($spot25 == "OFF25"){
         $_SESSION["spot25"] = "OFF25";
     } 


      //first floor    
    $spot31 = $_POST["spot31"]; 
    $spot32 = $_POST["spot32"];     
    $spot33 = $_POST["spot33"]; 
    $spot34 = $_POST["spot34"];  
    $spot35 = $_POST["spot35"];
    
    if ($spot31 == "3-1"){
        $_SESSION["spot31"] = $spot31;
    } else if ($spot31 == "OFF31"){
        $_SESSION["spot31"] = "OFF31";
    } else if ($spot32 == "3-2"){
        $_SESSION["spot32"] = $spot32;
    } else if ($spot32 == "OFF32"){
        $_SESSION["spot32"] = "OFF32";
    } else if ($spot33 == "3-3"){
        $_SESSION["spot33"] = $spot33;
    } else if ($spot33 == "OFF33"){
        $_SESSION["spot33"] = "OFF33";
    } else if($spot34 == "3-4"){
        $_SESSION["spot34"] = $spot34;
    } else if ($spot34 == "OFF34"){
        $_SESSION["spot34"] = "OFF34";
    } else if($spot35 == "3-5"){
        $_SESSION["spot35"] = $spot35;
    } else if ($spot35 == "OFF35"){
        $_SESSION["spot35"] = "OFF35";
    } 
   
	header("Location:addswitchpark.php");
	exit();
      
    

?>