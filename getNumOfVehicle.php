<?php 
session_start();
 if (isset($_SESSION["slotsTaken"])){
    $numOfSlots = 15 - $_SESSION["slotsTaken"];
    echo $numOfSlots;
 }else{
     echo "15";
 }

?>