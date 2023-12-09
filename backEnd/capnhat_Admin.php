<?php
session_start();
include "./connectdb.php";
$conn=connectdb();
$id = $_GET['id'];

if((isset($_POST['update']))&&($_POST['update'])){
    $user = $_POST['user'];
    $pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
    $role = $_POST['role'];
    $des = "img/". basename($_FILES["img"]['name']);
    $file = $_FILES["img"]["name"];
    move_uploaded_file($file, $des);
    $sql = "UPDATE user SET user='$user', pass='$pass', role ='$role', img='$des' WHERE id='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header ('location: ../fontEnd/admin_user.php');
}
?>