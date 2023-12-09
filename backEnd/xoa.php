<?php
include "./connectdb.php";
$conn=connectdb();

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = "DELETE FROM sanpham WHERE id=".$id; 
    $conn->exec($sql);
}
header ('location: ../fontEnd/danhmuc.php');
?>