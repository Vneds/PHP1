<?php
session_start();
include "./connectdb.php";

if ((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $kq = getuser($user,$pass);
    $role = $kq[0]['role'];
    $id = $kq[0]['id'];
        if($role == 1){
            $_SESSION['role'] = $role;
            echo("admin");
            header ('location: ../fontEnd/admin.php');
        }
        else if ($id >0){
            $_SESSION['role']=$role;
            $_SESSION['iduser']=$kq[0]['id'];
            $_SESSION['username']=$kq[0]['user'];
            $_SESSION['email']=$kq[0]['email'];
            $_SESSION['img']=$kq[0]['img'];
            echo("user");
            header ('location: ../fontEnd/user.php');
            return;
        }
        else {
            header ('location: ../fontEnd/dangnhap.php');
        }
}
  
?>