<?php
session_start();
include "./connectdb.php";
$conn=connectdb();
$id = $_GET['id'];

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $des = "img/". basename($_FILES["img"]['name']);
    $file = $_FILES["img"]["name"];
    move_uploaded_file($file, $des);
    $sql = "UPDATE user SET user=?, email=?, img=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$_POST['name'],$_POST['email'],$des,$id]);
    $_SESSION['username'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['img'] = $des;
    header ('location: http://localhost/PHP/33-PS25766-L%C3%AA%20Qu%E1%BB%91c%20Vi%E1%BB%87t-Assgnment/fontEnd/user.php');
}
?>