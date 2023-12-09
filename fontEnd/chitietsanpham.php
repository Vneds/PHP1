<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="chitietsanpham.css">
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
                    <label for="" class="thoat">
                    <?php
                        if(isset($_SESSION['username'])){
                            echo '<img class="img_user" src="../'.$_SESSION['img'].'">';
                            echo '<a class="user">'.$_SESSION['username'].'</a>';
                            echo '<div class="dangxuat none"><a href="">đăng xuất</a></div>';
                        }
                        else {
                            echo '<a href="http://localhost/PHP/33-PS25766-Lê%20Quốc%20Việt-Assgnment/fontEnd/dangnhap.php"><img src="../img/icon 2.png" alt="" id="icon2" name></a>';
                        }
                    ?>
                    </label>
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
                <p class="home">HOMEPAGE/ BRAND/ H&M HOME/ BEDROOM/duvet cover sets</p>
            </header>

            <div class="col-8 main col-md-5">
                <img src="../img/img 10.png" alt="" >
                <img src="../img/img 11.png" alt="" class="img-main">
                <div class="thongtin col-12">
                    <p class="khungchu">Premium Selection</p>
                    <p class="khungchu1">King/queen duvet cover set in soft, washed linen for comfortable sleep. Duvet cover fastens at foot end with concealed metal snap fasteners. Two pillowcases with envelope opening. Linen is a durable, long-lasting fabric which, with proper care, will become softer and more attractive with every wash. Linen bedding is a good choice for those who struggle with overheating, as the material absorbs moisture for a cool and comfortable sleeping environment. Thread count 104.</p>
                    <p class="khungchu2"> Pieces/Pairs — 3</p>
                    <p class="khungchu3">Composition — <label for="">Linen 100%</label></p>
                    <p class="khungchu3">Art. No. —<label for=""> 0188589002</label></p>  
                </div>
                <img src="../img/img 12.png" alt="" class="none-img">
                <img src="../img/img 13.png" alt="" class="img-main none-img">
            </div>

            <div class="col-4 main-color">
                <h1>Linen King/Queen Duvet Cover Set</h1>
                <p class="tien">39.99 $ <img src="../img/icon 4.png" alt=""></p>
                <p class="color">Light gray</p>
                <div class="../img-icon">
                    <img src="../img/image 17.png" alt="" id="img">
                    <img src="../img/image 18.png" alt="">
                    <img src="../img/image 19.png" alt="">
                    <img src="../img/image 20.png" alt="">
                    <img src="../img/image 21.png" alt="">
                    <br>
                    <img src="../img/image 22.png" alt="">
                </div>
                <p class="star">Reviews (686) <img src="../img/star.png" alt=""></p>
                <p class="vector"><img src="../img/Vector 10.png" alt=""> Not available in stores</p>
                <div class="size">
                    <p>
                        Select Size
                        <img src="../img/vector 11.png" alt="">
                    </p>
                </div>
                <a href="../backEnd/giohang.php?id=<?php echo $_GET['id']?>"><button class="ADD">Add to shopping bag</button></a>
            </div>

            <div class="col-12 like">
                <h2>Also You May Like</h2>
                <div class="col-3 main-1">
                    <img src="../img/img 1.png" alt="" class="img-main-1">
                    <p class="name-1">Linen King/Queen Duvet Cover Set</p>
                    <img src="../img/icon9.png" alt="" class="color-main-1">
                    <p class="money-1">39.99$</p>
                </div>
                <div class="col-3 main-1">
                    <img src="../img/Rectangle 4.png" alt="" class="img-main-1">
                    <p class="name-1">Linen King/Queen Duvet Cover Set</p>
                    <img src="../img/icon9.png" alt="" class="color-main-1">
                    <p class="money-1">39.99$</p>
                </div>
                <div class="col-3 main-1">
                    <img src="../img/Rectangle 3.png" alt="" class="img-main-1">
                    <p class="name-1">Linen King/Queen Duvet Cover Set</p>
                    <img src="../img/icon9.png" alt="" class="color-main-1">
                    <p class="money-1">39.99$</p>
                </div>
                <div class="col-3 main-1" id="main">
                    <img src="../img/Rectangle 2.png" alt="" class="img-main-1">
                    <p class="name-1">Linen King/Queen Duvet Cover Set</p>
                    <img src="../img/icon9.png" alt="" class="color-main-1">
                    <p class="money-1">39.99$</p>
                </div>
            </div>
        </div>

        <img src="../img/Vector 8.png" alt="" class="left">
        <img src="../img/Vector 9.png" alt="" class="right">




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