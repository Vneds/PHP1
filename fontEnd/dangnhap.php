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
    <link rel="stylesheet" href="dangnhap.css">
</head>
<body>
    <div class="swapper">
        <div class="container">
            <header class="col-12 col-sm-12">
                <p class="logo">
                    MOODY STUDIO
                    <img src="../img/icon 4.png" alt="" id="icon4">
                    <img src="../img/icon 3.png" alt="" id="icon3">
                    <img src="../img/icon 1.png" alt="" id="icon1">
                    <img src="../img/icon 2.png" alt="" id="icon2">
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
                <p class="home">HOMEPAGE/Singin</p>
            </header>

            <div class="col-12 dangnhap">
                <div class="singin">
                    <h1>Sign in</h1>
                    <form action="../backEnd/login.php" method ="post">
                        <p>Email <label for="">*</label></p>
                        <input name="user" type="text" id="email" required>
                        <p>Password <label for="">*</label></p>
                        <input type="password" name="pass" id="" required>
                        <div class="remember">
                            <button></button>
                            <label for="" class="remember-1">Remember me</label>
                            <a href=""><label for="" class="forgot">Forgot password? </label></a>
                        </div>
                        <input type="submit" name="dangnhap" value="Sign in" id="but1">
                    </form>
                    <a href="http://localhost/PHP/33-PS25766-L%C3%AA%20Qu%E1%BB%91c%20Vi%E1%BB%87t-Assgnment/fontEnd/dangky.php"><button id="but2">Become a menber</button></a>
                    <u>Membership info </u>
                </div>
            </div>
        </div>

        

        <footer class="col-12">
            <div class="container">
                <div class="col-4">
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
                <div class="col-4">
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