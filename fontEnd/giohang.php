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
    <link rel="stylesheet" href="giohang.css">
</head>
<body>
    <div class="swapper">
        <div class="container">
            <header class="col-12 col-sm-12">
                <p class="logo">
                    MOODY STUDIO
                    <img src="../img/icon 4.png" alt="" id="icon4">
                    <img src="../img/icon 3.png" alt="" id="icon3">
                    <a href="http://localhost/PHP/33-PS25766-Lê%20Quốc%20Việt-Assgnment/fontEnd/dangnhap.php"><img src="../img/icon 2.png" alt="" id="icon2"></a>
                    <img src="../img/icon 1.png" alt="" id="icon1">
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
                <p class="home">HOMEPAGE/ shopping bag</p>
                <h1>Shopping bag</h1>
            </header>

            <div class="col-7">
                <?php
                $i = 0;
                $total_money = 0;
                    foreach($_SESSION["cart"] as $cart){
                        $pass = (int)$cart['price']; 
                        $total_money += $pass;
                        
                ?>
                <div class="main">
                    <img src="../<?php echo $cart['img']?>" alt="" class="img">
                    <div>
                        <p class="name"><?php echo $cart['name']?></p>
                        <p class="money"> <?php echo $cart['price']?>$</p>
                        <p>
                            Art. No.:
                            <label for="" class="art">54637253</label>
                            <label for="" class="size">Size:</label>
                            <label for="" class="art">21*45</label>
                        </p>
                        <p>
                            Color:
                            <label for="" class="color">light gray</label>
                            <label for="" class="size">Total:</label>
                            <label for="" class="art">39.99</label>
                        </p>
                        <input type="text" class="heart">
                        <img src="../img/icon 4.png" alt="" class="heart-img">
                        <input type="text" placeholder=" 1" class="heart-input">
                        <img src="../img/vector 11.png" alt="" class="heart-img-1">
                    </div>
                    <div>
                        <a href="../backEnd/xoagiohang.php?index=<?php echo $i?>"><img src="../img/vector 12.png" alt="" class="xoa"></a>
                    </div>
                </div>
                <?php 
                    $i++;
                }
                ?>
                <p class="total">Total</p>
                <hr class="total-hr">
                <p class="total"><?php echo $total_money ?>$</p>
            </div>
            <?php ?>
            <div class="col-4 checkout">
                <div class="checkout-add">
                    <p class="dis">
                        Discounts
                        <label for="">Apply discount</label>
                    </p>
                    <h3>Add A DISCOUNT CODE</h3>
                    <div class="add">
                        <button class="add-1">ADD</button>
                    </div>

                    <h3>Log in to use your member offers.</h3>
                    <button class="add-2">LOG IN</button>
                    <p class="total-1">
                        Order value:
                        <label for=""><?php echo $total_money ?>$</label>
                    </p>
                    <p class="total-1">
                        Shipping:
                        <label for="">0.0 $</label>
                    </p>
                    <hr class="hr">
                    <p class="total-1">
                        Total
                        <label for=""><?php echo $total_money ?>$</label>
                    </p>
                    <a href="thanhtoan.php"><button class="add-3">Continue to checkout</button></a>
                </div>
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