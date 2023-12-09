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
    <link rel="stylesheet" href="thanhtoan.css">
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
                <p class="home">HOMEPAGE/ checkout</p>
                <h1>CHECKOUT</h1>
            </header>

            <div class="col-7">
                <?php
                $i = 0;
                $total_money = 0;
                    foreach($_SESSION["cart"] as $cart){
                        $pass = (int)$cart['price']; 
                        $total_money += $pass;
                        $i++;
                }
                        
                ?>
                <div class="main">
                <div class="col-12 dangnhap">
                <div class="singin">
                    <h2>Thông tin người đặt</h2>
                    <form action="../backEnd/hoadon.php" method ="post">
                        <p>Họ và tên <label for="" class="red" >*</label></p>
                        <input name="name" type="text" id="" required>
                        <p>Số điện thoại <label for="" class="red">*</label></p>
                        <input type="number" name="dienthoai" id="" required>
                        <p>Email <label for="" class="red">*</label></p>
                        <input type="email" name="email" id="" required>
                        <p>Địa chỉ <label for="" class="red">*</label></p>
                        <input type="text" name="diachi" id="" required>
                        <p>Phương thức thanh toán <label for="" class="red">*</label></p>
                        <input type="text" name="pttt" id="" required>
                        <input type="number" name="tongdonhang" value="<?php echo $total_money ?>" id="hoadon" required>

                </div>
            </div>
                </div>
                <hr class="total-hr">
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
                    <a href="../backEnd/hoadon.php"><button class="add-3" name="">Continue to checkout</button></a>
                    </form>
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