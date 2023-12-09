<?php
session_start();
include "./connectdb.php";
$conn=connectdb();
$stmt = $conn->prepare("SELECT * FROM user WHERE pass=? AND id = ?");
$stmt->execute([$_POST['pass'],$_SESSION['iduser']]);
if ($stmt->rowCount()>0){
    $sql = "UPDATE user SET pass=? WHERE id=?";
    $stmt_2 = $conn->prepare($sql);
    $stmt_2->execute([$_POST['newpass'],$_SESSION['iduser']]);
}
header ('location: http://localhost/PHP/33-PS25766-L%C3%AA%20Qu%E1%BB%91c%20Vi%E1%BB%87t-Assgnment/fontEnd/user.php');
?>