
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
        .linkPage{
        text-align: center;
        margin-bottom: 20px ;
        margin-top: 20px ;
        }
        #linkNum{
        padding: 8px;
        border-radius: 50%;
        font-family: arial;
        color: white;
        background-color: rgb(198, 49, 49);
        margin: 10px;
        text-decoration: none;
        }
@media screen and (max-width: 600px) { 
table#cart tbody td .form-control { 
width:20%; 
display: inline !important;
} 
 
.actions .btn { 
width:36%; 
margin:1.5em 0;
} 
 
.actions .btn-info { 
float:left;
} 
 
.actions .btn-danger { 
float:right;
} 
 
table#cart thead {
display: none;
} 
 
table#cart tbody td {
display: block;
padding: .6rem;
min-width:320px;
} 
 
table#cart tbody tr td:first-child {
background: #333;
color: #fff;
} 
 
table#cart tbody td:before { 
content: attr(data-th);
font-weight: bold; 
display: inline-block;
width: 8rem;
} 
 
table#cart tfoot td {
display:block;
} 
table#cart tfoot td .btn {
display:block;
}
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
    <a href="./donhang.php">Đơn hàng</a>
    <a href="../backEnd/thoat.php">Thoát</a>
    </div>

<h2 class="text-center">Tài khoản</h2>
<div class="container"> 
    <table id="cart" class="table table-hover table-condensed"> 
    <thead> 
        <tr> 
            <th style="width:50%">Email</th> 
            <th style="width:10%">tên</th> 
            <th style="width:8%">Ngày sinh</th> 
            <th style="width:22%" class="text-center">ID</th> 
            <th style="width:10%"> </th> 
    </tr> 
  </thead> 
    <div>
        <?php
        include "../backEnd/db.php";
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($page - 1) *5;
        $stmt = $conn ->query("select * from user limit 5 offset " . $offset);
        $result = $stmt ->FetchAll(PDO::FETCH_NUM);
        foreach($result as $row){
        ?>
        <tr>
            <td data-th="Product"> 
                <div class="row"> 
                    <div class="col-sm-2 hidden-xs"><img src="../<?php echo $row['6']?>" alt="Sản phẩm 1" class="img-responsive" width="100"></div> 
                    <div class="col-sm-10"> 
                        <h4 class="nomargin"><?php echo $row['1'] ?></h4> 
                        <p></p> 
                    </div> 
                </div> 
            </td> 
            <td data-th="Price"><?php echo $row['2'] ?></td> 
            <td data-th="Quantity"><input class="form-control text-center" value="<?php echo $row['5']?>" type=""></td> 
            <td data-th="Subtotal" class="text-center" id="name"><?php
                                                        if($row['4'] == 1){
                                                            echo ("admin");
                                                        }
                                                        else {
                                                            echo "user";
                                                        }
                                                        ?></td> 
            <td class="actions" data-th="">
                <a href="./suaAdmin_user.php?id=<?php echo $row['0'] ?>"><button class="btn btn-info btn-sm">Sửa</i></button></a> 
                <a href="../backEnd/xoa_Admin.php?id=<?php echo $row['0'] ?>"><button class="btn btn-danger btn-sm">Xóa</i></button></a>
            </td>
        </tr>
        <?php
        }
        ?>
        <div class="linkPage">
            <!-- <?php
                $stmtl = $conn -> query("select * from sanpham");
                for ($i = 1; $i<= ceil($stmtl->rowCount() / 5); $i++){
                echo '<a id="linkNum" href="?page=' . $i . '">' . $i . '</a>';
                }
            ?> -->
        </div>
    </div>
    <!-- <a href="./themsanpham.php"><button class="btn-sm btn-info">thêm sản phẩm</button></a> -->
</div>
</body>
</html>