<?php
session_start();
include "./connectdb.php";
$conn=connectdb();
$id = $_GET['id'];

if((isset($_POST['update']))&&($_POST['update'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $des = "img/". basename($_FILES["img"]['name']);
    $file = $_FILES["img"]["name"];
    move_uploaded_file($file, $des);
    $sql = "UPDATE sanpham SET name='$name', price='$price', type='$type', img='$des' WHERE id='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header ('location: ../fontEnd/danhmuc.php');
}
?>