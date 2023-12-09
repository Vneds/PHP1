<?php
session_start();
unset($_SESSION["cart"][$_GET["index"]]);
$_SESSION["cart"]= array_values($_SESSION["cart"]);
header ('location: ../fontEnd/giohang.php'); 
?>