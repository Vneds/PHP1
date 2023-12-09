<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
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
                    <div class="buy">
                        <img src="../img/Vector.png" alt="">
                        <label for="" class="gobuy">FREE SHIPPING</label>
                        <img src="../img/Vector (1).png" alt="" id="v">
                        <label for=""class="gobuy">100% MONEY BACK</label>
                        <img src="../img/Vector (2).png" alt="">
                        <label for="" class="gobuy">SUPPORT 24/7</label>
                    </div>
            </header>
        </div>
        
        <div class="col-12 khung col-sm-12">
            <img src="../img/image 1.png" alt="">
            <div>
                <p class="khungchu">HOT DEALS THIS WEEK</p>
                <p class="khungchu1">SALE UP <label for="">50%</label> MODERN FURNITURE </p>
                <button id="but1">VIEW NOW</button>
            </div>
        </div>

        <div class="container">
            <div class="col-sm-12">
                <div class="col-6 khung2 col-sm-12">
                    <img src="../img/image 2.png" alt="">
                    <p class="khungchu2">INY VINTAGE CHAIR</p>
                    <button id="but2">VIEW DETAILS</button>
                </div>
                <div class="col-6 khung3">
                    <img src="../img/image 3.png" alt="">
                    <p class="khungchu3">LARGE TERRACOTA VASE</p>
                    <button id="but3">VIEW DETAILS</button>
                </div>
            </div>

            <div class="col-3 main1">
                <img src="../img/Rectangle 1.png" alt="">
            </div>
            <div class="col-3 main">
                <img src="../img/Rectangle 2.png" alt="">
                <p class="name">Linen Beach Towel</p>
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (4).png" alt="" class="star">
                <p class="tien">15$</p>
            </div>
            <div class="col-3 main">
                <img src="../img/Rectangle 3.png" alt="">
                <p class="name">Square Clear Glass Box</p>
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (4).png" alt="" class="star">
                <p class="tien">20$</p>
            </div>
            <div class="col-3 main" id="main-img-3">
                <img src="../img/Rectangle 4.png" alt="">
                <p class="name">4-pack Small Ceramic Plates</p>
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (4).png" alt="" class="star">
                <p class="tien">10$</p>
            </div>



            <div class="col-3 main" id="main">
                <img src="../img/Rectangle 5.png" alt="">
                <p class="name">Large Clear Glass Box </p>
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (4).png" alt="" class="star">
                <p class="tien">18$</p>
            </div>
            <div class="col-3 main" id="main">
                <img src="../img/Rectangle 6.png" alt="">
                <p class="name">Round Jute Placemat</p>
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (4).png" alt="" class="star">
                <p class="tien">8$</p>
            </div>
            <div class="col-3 main" id="main">
                <img src="../img/Rectangle 7.png" alt="">
                <p class="name">Metal Wire Basket</p>
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (5).png" alt="" class="star">
                <img src="../img/Vector (4).png" alt="" class="star">
                <p class="tien">14$</p>
            </div>
            <div class="col-3 main1" id="main1">
                <img src="../img/Rectangle 8.png" alt="">
            </div>

        </div>

        <div class="col-12 khung1 col-sm-12">
            <img src="../img/Rectangle 9.png" alt="">
            <div class="khung4">
                <p class="khungchu4">BEDSHEET SETS</p>
                <p class="tien1">$50.00        
                    <label for="" class="tien2"><del>220.00$</del></label>
                </p>
                <p class="khungchu5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <button id="but4">VIEW DETAILS</button>
            </div>
        </div>

        <div class="container">
            <div class="col-12 khungchu6 col-sm-12">
                <p>TOP RATING</p>
            </div>

            <div class="col-4 main2">
                <img src="../img/Rectangle 10.png" alt="" class="img">
                <div class="khung5">
                    <p class="name1">Tray with Foot</p>
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (4).png" alt="" class="star1" >
                    <p class="tien3">15$</p>
                </div>

            </div>
            <div class="col-4 main2" id="none">
                <img src="../img/Rectangle 10.png" alt="" class="img">
                <div class="khung5">
                    <p class="name1">Tray with Foot</p>
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (4).png" alt="" class="star1" >
                    <p class="tien3">15$</p>
                </div>
            </div>
            <div class="col-4 main2" id="main2">
                <img src="../img/Rectangle 10.png" alt="" class="img">
                <div class="khung5">
                    <p class="name1">Tray with Foot</p>
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (4).png" alt="" class="star1" >
                    <p class="tien3">15$</p>
                </div>
            </div>

            <div class="col-4 main2">
                <img src="../img/Rectangle 10.png" alt="" class="img">
                <div class="khung5">
                    <p class="name1">Tray with Foot</p>
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (4).png" alt="" class="star1" >
                    <p class="tien3">15$</p>
                </div>

            </div>
            <div class="col-4 main2" id="none">
                <img src="../img/Rectangle 10.png" alt="" class="img">
                <div class="khung5">
                    <p class="name1">Tray with Foot</p>
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (4).png" alt="" class="star1" >
                    <p class="tien3">15$</p>
                </div>
            </div>
            <div class="col-4 main2" id="main2">
                <img src="../img/Rectangle 10.png" alt="" class="img">
                <div class="khung5">
                    <p class="name1">Tray with Foot</p>
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (4).png" alt="" class="star1" >
                    <p class="tien3">15$</p>
                </div>
            </div>

            <div class="col-4 main2">
                <img src="../img/Rectangle 10.png" alt="" class="img">
                <div class="khung5">
                    <p class="name1">Tray with Foot</p>
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (4).png" alt="" class="star1" >
                    <p class="tien3">15$</p>
                </div>

            </div>
            <div class="col-4 main2">
                <img src="../img/Rectangle 10.png" alt="" class="img">
                <div class="khung5">
                    <p class="name1">Tray with Foot</p>
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (4).png" alt="" class="star1" >
                    <p class="tien3">15$</p>
                </div>
            </div>
            <div class="col-4 main2" id="main2">
                <img src="../img/Rectangle 10.png" alt="" class="img">
                <div class="khung5">
                    <p class="name1">Tray with Foot</p>
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (5).png" alt="" class="star1" >
                    <img src="../img/Vector (4).png" alt="" class="star1" >
                    <p class="tien3">15$</p>
                </div>
            </div>
        </div>

        <button id="but5">load more products</button>

        <div class="container">
            <label class="khungchu7">
            <form action="">
                    <button id="but6"><img src="../img/Vector (7).png" alt=""></button>
                <input name="email" type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" class="form-control" placeholder="Email*" id="email" required="">
                </form>
                SING UP FOR THE NEWSLETTER
            </label>
            <p class="khungchu8">Subscribe for the latest stories and promotions</p>
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
                <div class="col-4">
                    <p class="blog">FROM THE BLOG</p>
                    <div class="blog">
                        <p class="ngay">26 <label for="">May</label></p>
                        <p class="thang">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="conments">3 comments</p>
                    </div>

                    <hr id="hr">

                    <div class="blog">
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