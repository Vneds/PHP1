<?php
session_start();
include "./connectdb.php";
$conn=connectdb();
$stmt = $conn->prepare("SELECT * FROM sanpham WHERE id = ?");
$stmt->execute([$_GET['id']]);
$result = $stmt -> setFetchMode(PDO::FETCH_ASSOC);
$kq = $stmt->fetch();


$_SESSION['sanpham'] = $kq;
if (!$_SESSION["cart"]){
    $_SESSION["cart"] = [];
}
array_push($_SESSION["cart"],$kq);
header ('location: ../fontEnd/giohang.php');
?>