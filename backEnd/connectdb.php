<?php
    function connectdb(){
        $servername = "localhost";
        $username = "root";
        $password = "123456";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=product", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
        } 
        catch(PDOException $e) {
            // echo "Connection failed: " . $e->getMessage();
        }
        return $conn;
    }
    
    
    function getuser($user,$pass){
        $conn=connectdb();
        $stmt= $conn->prepare("SELECT * FROM user Where user=?");
        $stmt->execute([$user]);
        $kq = $stmt->fetchAll();
        if(password_verify($pass,$kq[0]['pass'])){ 
            return $kq;
        }
    }

    /// 1.Lấy bằng username 
    // 2. lấy đc pâss
    // 3. kt mk 
    // 4 neu dung tri
?>