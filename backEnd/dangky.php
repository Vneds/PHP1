<?php
session_start();
include "./connectdb.php";

$conn=connectdb();
$sql = "INSERT INTO user (email,user,pass,date) VALUES (?,?,?,?)";
$stmt = $conn->prepare($sql);
$pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
$stmt ->execute([$_POST['email'],$_POST['user'],$pass,$_POST['date']]);
header ('location: ../fontEnd/dangnhap.php');

?>