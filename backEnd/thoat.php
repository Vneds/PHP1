<?php 
session_start();
session_destroy();
header ('location: ../fontEnd/index.php');
?>