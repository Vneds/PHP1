<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="user.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="swapper">
        <div class="container">
            <header class="col-12">
                <p class="logo">
                    MOODY STUDIO
                    <img src="../img/icon 4.png" alt="" id="icon4">
                    <img src="../img/icon 3.png" alt="" id="icon3">
                    <img src="../img/icon 1.png" alt="" id="icon1">
                    <?php
                        if(isset($_SESSION['username'])){
                            echo '<img class="img_user" src="../'.$_SESSION['img'].'">';
                            echo '<a class="user">'.$_SESSION['username'].'</a>';
                            echo '<div class="dangxuat none"><a href="../backEnd/thoat.php">đăng xuất</a></div>';
                        }
                        else {
                            echo '<a href="http://localhost/PHP/33-PS25766-Lê%20Quốc%20Việt-Assgnment/fontEnd/dangnhap.php"><img src="../img/icon 2.png" alt="" id="icon2" name></a>';
                        }
                    ?>
                </p>
                <hr>
                <ul class="menu">
                    <li><a href="http://localhost/PHP/33-PS25766-Lê%20Quốc%20Việt-Assgnment/fontEnd/index.php">HOME</a></li>
                    <li><a href="">STORE</a></li>
                    <li><a href="">ACCESSORIES</a></li>
                    <li><a href="http://localhost/PHP/33-PS25766-Lê%20Quốc%20Việt-Assgnment/fontEnd/sanpham.php">BRAND</a></li>
                    <li><a href="">PAGES</a></li>
                    <li><a href="">ABOUT US</a></li>
                    <li><a href="">NEWS</a></li>
                    <li><a href="">CONTACT US</a></li>
                </ul>
                <hr>
                <p class="home">HOMEPAGE/USER</p>
            </header>
        </div>

        <div class="col-12 khung">
        <div class="flex">
        <img class="user_avatar1" src="../<?php echo $_SESSION['img']?>" alt="">
        <form class="form" action="../backEnd/capnhatuser.php?id=<?php echo $_SESSION['iduser']?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="userName">Tên người dùng</label>
                <input type="text" name='name' class="form-control" id="userName" value="<?php echo $_SESSION['username'] ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text"name='email' class="form-control" id="email" value="<?php echo $_SESSION['email'] ?>" >
            </div>
            <div class="form-group">
                <label for="file">Ảnh đại diện</label>
                <input type="file" name='img' class="form-control" id="file">
            </div>
            <button type='submit' class="btn btn-primary" name="update">Cập nhật</button>
        </form>
        <a href="./changePassWord.php?id=<?php echo $_SESSION['iduser']?>">
        <a href="./doimk.php"><button class="btn btn-primary" >Đổi mật khẩu</button></a>
        </a>
    </div>
        </div>


        <footer class="col-12">
            <div class="container">
                <div class="col-4 footer">
                    <p class="khungchu9">URBAN OUTFITTERS</p>
                    <p class="khungchu10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    <p class="khungchu11">121 king street, Melbourne 3000</p>
                    <p class="khungchu11">+61 3 8376 6284</p>
                    <p class="khungchu11">contact@urbanoutfitters.com</p>
                    <div class="icon">
                        <img src="../img/icon5.png" alt="" id="icon5">
                        <img src="../img/icon6.png" alt="" id="icon6">
                        <img src="../img/icon7.png" alt="" id="icon7">
                        <img src="../img/icon8.png" alt="" id="icon8">
                    </div>
                </div>
                <div class="col-2">
                    <p class="shopping">SHOPPING</p>
                    <div class="shopping1">
                        <p>Your cart</p>
                        <p>Your orders</p>
                        <p>Compared items</p>
                        <p>Wishlist items</p>
                        <p>Shipping detail </p>
                    </div>
                </div>
                <div class="col-2">
                    <p class="shopping">MORE LINK</p>
                    <div class="shopping1">
                        <p>Blog</p>
                        <p>Gift Center</p>
                        <p>Buying Guides</p>
                        <p>New Arrivals</p>
                        <p>Clearance</p>
                    </div>
                </div>
                <div class="col-4 from">
                    <p class="blog">FROM THE BLOG</p>
                    <div>
                        <p class="ngay">26 <label for="">May</label></p>
                        <p class="thang">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="conments">3 comments</p>
                    </div>

                    <hr id="hr">

                    <div>
                        <p class="ngay">26 <label for="">May</label></p>
                        <p class="thang">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="conments">3 comments</p>
                    </div>
                </div>
            </div>

        </footer>
    </div>
</body>
</html>