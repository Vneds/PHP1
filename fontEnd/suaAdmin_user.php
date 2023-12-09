<?php
session_start();
include "../backEnd/connectdb.php";
$conn=connectdb();
if(isset($_GET['id'])){
        $stmt = $conn->prepare("SELECT * FROM user WHERE id=?");
        $stmt->execute([$_GET['id']]);
        $result = $stmt -> setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetch();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
            padding:0px;
            margin: 0px;
        }
        .admin{
            height: 200px;
            background: #DBD0CC;
        }
        .admin a {
            margin-right: 10px ;
        }
    .dangky{
    width: 636px;
    height: 679px;
    background: #FAF9F8;
    margin: 0 auto;
  }
  .singin{
    width: 536px;
    margin: 0 auto;
  }
  .singin p {
    font-weight: 550;
  font-size: 18px;
  margin-bottom: 4px;
  margin-top: 22px;
  }
  .singin p label {
    color: #d6001c;
  }
  input{
    width: 100%;
    height: 54px;
    margin-bottom: 20px;
    font-size: 18px;
    font-weight: 500;
    padding-left: 10px;
  }
  #input{
    margin-bottom: 7px;
    padding-left: 20px;
  }
  #input1{
    margin-bottom: 0px;
  }
  #input2{
    text-align: center;
    border: 1px solid;
    padding: 11px;
  }
  #input3{
    font-size: 16px;
    padding-left: 10px;
    margin-top: 10px;
  }
  label{
    font-size: 14px;
    color: #707070;
    margin-bottom: 50px;
  }
  select{
    font-size: 16px;
    padding-left: 10px;
    margin-top: 10px;
    width: 100%;
    height: 54px;

  }
  button{
    width: 100%;
    height: 54px;
    margin-bottom: 20px;
  }
  #but1{
    background: #323334;
    font-size: 16px;
    color: #FFFFFF;
    text-transform: uppercase;
    font-weight: 700;
  }
  u{
    font-size: 16px;
    margin-left: 250px;
    margin-bottom: 39px;
    color: #000000;
  }
    </style>
</head>
<body>
    <div class="admin">
    <br>
    <h1>ADMIN-WEBSITE</h1>
    <br>
    <a href="">Trang chủ</a>
    <a href="./danhmuc.php">Danh mục</a>
    <a href="./admin_user.php">tài khoản</a>
    <a href="">Đơn hàng</a>
    <a href="../fontEnd/index.php">Thoát</a>
    </div>

    <div class="col-12 dangky">
                <div class="singin">
                    <form action="../backEnd/capnhat_Admin.php?id=<?php echo $kq['id']?>" method ="post" enctype="multipart/form-data">
                        <p>Name <label for="">*</label></p>
                        <input name="user" type="name" id="email" required value="<?php echo $kq['user']?>">
                        <p>PASS <label for="">*</label></p>
                        <input type="text" placeholder="" id="input3" name="pass" value="">
                        <p>Type <label for="">*</label></p>
                        <select name="role" id="input1" value="<?php echo $kq['role']?>">
                          <option value="0">User</option>
                          <option value="1">Admin</option>

                        </select>
                        <p>File <label for="">*</label></p> 
                        <input type="file" name="img" id="input2">
                        <input type="submit" id="but1" value="Update" name='update'>
                    </form>
                    <a href="./danhmuc.php"><u>Back to</u></a>
                </div>
            </div>
        </div>
</body>
</html>