<?php
        include './connectdb.php';
        $conn=connectdb();
        $sql = "INSERT INTO sanpham (name,price,type,img) VALUES (?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $des = "img/". basename($_FILES["img"]['name']);
        $file = $_FILES["img"]["name"];
        move_uploaded_file($file, $des);
        $stmt ->execute([$_POST['name'],$_POST['price'],$_POST['type'],$des]);
        header ('location: ../fontEnd/danhmuc.php');


    ?>