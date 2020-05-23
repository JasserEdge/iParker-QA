<?php 
session_start();

$numOfSlots = 15 - $_SESSION["slotsTaken"];
echo $numOfSlots;
?>