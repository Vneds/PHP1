<?php
session_start();
include "./connectdb.php";

$conn=connectdb();
$sql = "INSERT INTO donhang (pttt,name,dienthoai,email,diachi,tongdonhang) VALUES (?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt ->execute([$_POST['pttt'],$_POST['name'],$_POST['dienthoai'],$_POST['email'],$_POST['diachi'],$_POST['tongdonhang']]);
header ('location: ../fontEnd/index.php');

?>