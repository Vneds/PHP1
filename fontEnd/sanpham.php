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
    <link rel="stylesheet" href="sanpham.css">
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
                    <a href="http://localhost/PHP/33-PS25766-Lê%20Quốc%20Việt-Assgnment/fontEnd/dangnhap.php"><img src="../img/icon 2.png" alt="" id="icon2"></a>
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
                <p class="home">HOMEPAGE/ BRAND/ H&M HOME/ BEDROOM</p>
            </header>
        </div>

        <div class="col-12 khung">
            <p class="khungchu1">Member Exclusive</p>
            <p class="khungchu2"><label for="" id="khungchu2">15%</label> OFF EVERYTHING + EXTRA <label for="" id="khungchu2">$10</label> OFF FOR PLUS STATUS</p>
            <p class="khungchu3">Not a member? Join now to shop.</p>
        </div>


        <div class="container">
            <div class="col-3 brand">
                <div class="khung1">
                    <p class="menu-shop">New arrivals</p>
                    <p class="shop">New Products</p>
                </div>

                <div class="khung2">
                    <p class="menu-shop">shop by room</p>
                    <p class="shop red">bedroom</p>
                        <p class="shopcon">duvet cover sets</p>
                        <p class="shopcon">sheets</p>
                        <p class="shopcon">bedspreads & blankets</p>
                        <p class="shopcon">blankets</p>
                        <p class="shopcon">cutains</p>
                        <p class="shopcon">pillowcases</p>
                        <p class="shopcon" id="fix">rugs</p>
                    <p class="shop">living room</p>
                    <p class="shop">child room</p>
                    <p class="shop">bathroom</p>
                    <p class="shop">Outdoor</p>
                </div>

                <div class="khung3">
                    <p class="menu-shop">shop by concept</p>
                    <p class="shop">Conscious</p>
                    <p class="shop">premium quality</p>
                    <p class="shop">classic collection</p>
                </div>

                <div class="khung4">
                    <p class="menu-shop">Gender</p>
                    <p class="shop"><img src="../img/color 0.png" alt=""> Man</p>
                    <p class="shop"><img src="../img/color 0.png" alt=""> woman</p>
                </div>

                <div class="khung5">
                    <p class="menu-shop">Color</p>
                    <img src="../img/color 0.png" alt="">
                    <img src="../img/color 1.png" alt="">
                    <img src="../img/color 2.png" alt="">
                    <img src="../img/color 3.png" alt="">
                    <img src="../img/color 4.png" alt="">
                    <img src="../img/color 5.png" alt="">
                    <br>
                    <img src="../img/color 6.png" alt="">
                    <img src="../img/color 7.png" alt="">
                    <img src="../img/color 8.png" alt="">
                    <img src="../img/color 9.png" alt="">
                    <img src="../img/color 10.png" alt="">
                    <img src="../img/color 11.png" alt="">
                    <br>
                    <img src="../img/color 12.png" alt="">
                    <img src="../img/color 13.png" alt="">
                    <img src="../img/color 14.png" alt="">
                    <img src="../img/color 15.png" alt="">
                    <img src="../img/color 16.png" alt="">
                    <img src="../img/color 17.png" alt="">
                </div>

                <div class="khung6">
                    <p class="menu-shop">Price</p>
                    <p class="shop"><img src="../img/color 0.png" alt=""> 0$ – 40$</p>
                    <p class="shop"><img src="../img/color 0.png" alt=""> 40$ – 100$</p>
                    <p class="shop"><img src="../img/color 0.png" alt=""> 100$ – 150$</p>
                    <p class="shop"><img src="../img/color 0.png" alt=""> 150$ – 175$</p>
                    <p class="shop"><img src="../img/color 0.png" alt=""> 175$ – 250$</p>
                    <p class="shop"><img src="../img/color 0.png" alt=""> 250$ – 350$</p>
                </div>
            </div>

            <div class="col-9 sanpham">
                <h1>BEDROOM</h1>
                <p class="khungchu4">ITS EASY TO TRANSFORM YOUR BEDROOM INTERIOR WITH OUR GREAT SELECTION OF ACCESSORIES.</p>
                <p class="sort"><img src="../img/Vector 6.png" alt=""> filter & sort
                    <label for="">products</label>
                    <label for="" class="red">Models</label>
                </p>
                <div>
                <?php
                    include "../backEnd/db.php"; 
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $offset = ($page - 1) *9;
                    $stmt = $conn ->query("select * from sanpham limit 9 offset " . $offset);
                    $result = $stmt ->FetchAll(PDO::FETCH_NUM);
                    foreach($result as $row){
                ?>
                    <div class="col-4 main">
                        <a href="./chitietsanpham.php?id=<?php echo $row['0']?>"><img src="../<?php echo $row['4']?>" alt="" class="img-main"></a>
                        <p class="name"><?php echo $row['1'] ?></p>
                        <img src="../<?php echo $row['5']?>" alt="" class="color-main">
                        <p class="money"><?php echo $row['3'] ?>$</p>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="linkPage">
                    <?php
                    $stmtl = $conn -> query("select * from sanpham");
                    for ($i = 1; $i<= ceil($stmtl->rowCount() / 9); $i++){
                    echo '<a id="linkNum" href="?page=' . $i . '">' . $i . '</a>';
                    }
                    ?>
                </div>

                <button class="next">load more products</button>
            </div>

            <div class="col-12 like">
                <h2>Also You May Like</h2>
                <div class="col-3 main">
                    <img src="../img/img 1.png" alt="" class="img-main">
                    <p class="name">Linen King/Queen Duvet Cover Set</p>
                    <img src="../img/icon9.png" alt="" class="color-main">
                    <p class="money">39.99$</p>
                </div>
                <div class="col-3 main">
                    <img src="../img/Rectangle 3.png" alt="" class="img-main">
                    <p class="name">Linen King/Queen Duvet Cover Set</p>
                    <img src="../img/icon9.png" alt="" class="color-main">
                    <p class="money">39.99$</p>
                </div>
                <div class="col-3 main">
                    <img src="../img/Rectangle 4.png" alt="" class="img-main">
                    <p class="name">Linen King/Queen Duvet Cover Set</p>
                    <img src="../img/icon9.png" alt="" class="color-main">
                    <p class="money">39.99$</p>
                </div>
                <div class="col-4 main" id="main">
                    <img src="../img/Rectangle 2.png" alt="" class="img-main">
                    <p class="name">Linen King/Queen Duvet Cover Set</p>
                    <img src="../img/icon9.png" alt="" class="color-main">
                    <p class="money">39.99$</p>
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