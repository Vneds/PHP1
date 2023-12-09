<?php
    $servername = "localhost";
    $username = "root";
    $password = "123456";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=product", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "dangnhap thanhcong";
    } 
    catch(PDOException $e) {
        // echo "thatbai: " . $e->getMessage();
    };


?>