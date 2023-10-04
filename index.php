<!-- Include Connection File -->
<?php require_once "connection.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leatheringo - Shop Footwear Online</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="style.css">
    <!-- hero css -->
    <link rel="stylesheet" href="css/font.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/style911.css" />
  <script src="js/jquery3.1.0.min.js"></script>
  <script src="js/gsap.min.js"></script>
</head>

<body>
<!-- <section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section> -->
    
<div class="bannerAddtionalBg"></div>
  <section class="home_">
    <div class="container">

      <header>
        <div class="logo">
          <img src="images/logo.png">
        </div>

        <div class="menu_">
          <ul >
            <!-- <li class="active">Shop</li>
            <li>New Release</li>
            <li>Sale</li> -->
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
                <!-- <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a> -->
          </ul>
          <div id="mobile">
            <!-- <a href="cart.php"><i class="far fa-shopping-bag"></i></a> -->
            <i id="bar" class="fas fa-outdent"></i>
        </div>

          <div class="myAccount">
            <div class="item_">
              <i class="fa fa-search"></i>
            </div>
            <div class="item_ cart_" id='card-it'>
            <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
              <!-- <span class="cart_item">1</span> -->
            </div>
            <div class="item_ user">
              <span id="lg-bag">My account</span> <i class="fa fa-user-o"></i>
            </div>
          </div>
        </div>
        <!-- <div class="menu_bar">
          <span></span>
          <span></span>
          <span></span>
        </div> -->
      </header>

      <div class="content">
        <h1>joyride</h1>
        <div class="main_"><img src="images/main.png"></div>
        <div class="cta">ADD TO CART +</div>
      </div>

      <div class="slider_item">

        <div class="slider_ text" id='slide-tex'>
          <div class="info_">
            <h3>TOP PICKS</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur </p>
            <div class="dots">
              <span></span>
              <span class="active"></span>
              <span></span>
              <span></span>
            </div>
          </div>
          <div class="next_cta"><i class="fa fa-angle-right"></i></div>
        </div>

        <div class="slider_">
          <div class="small_product">
            <img src="images/shoe1.png">
          </div>
          <div class="product_details_">
            <h3>Nike pegasus 37</h3>
            <p>Running collections</p>
            <span>
              <i class="fa fa-star colored"></i>
              <i class="fa fa-star colored"></i>
              <i class="fa fa-star colored"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </span>
            <h2>₹×××</h2>
          </div>
          <div class="atc"><i class="fa fa-plus-circle"></i></div>
        </div>

        <div class="slider_">
          <div class="small_product">
            <img src="images/shoe2.png">
          </div>
          <div class="product_details_">
            <h3>Nike pegasus 37</h3>
            <p>Running collections</p>
            <span>
              <i class="fa fa-star colored"></i>
              <i class="fa fa-star colored"></i>
              <i class="fa fa-star colored"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </span>
            <h2>₹×××</h2>
          </div>
          <div class="atc"><i class="fa fa-plus-circle"></i></div>
        </div>

        <div class="slider_">
          <div class="small_product">
            <img src="images/shoe3.png">
          </div>
          <div class="product_details_">
            <h3>Nike pegasus 37</h3>
            <p>Running collections</p>
            <span>
              <i class="fa fa-star colored"></i>
              <i class="fa fa-star colored"></i>
              <i class="fa fa-star colored"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </span>
            <h2>₹×××</h2>
          </div>
          <div class="atc"><i class="fa fa-plus-circle"></i></div>
        </div>

        <div class="slider_">
          <div class="small_product">
            <img src="images/shoe4.png">
          </div>
          <div class="product_details_">
            <h3>Nike pegasus 37</h3>
            <p>Running collections</p>
            <span>
              <i class="fa fa-star colored"></i>
              <i class="fa fa-star colored"></i>
              <i class="fa fa-star colored"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </span>
            <h2>₹×××</h2>
          </div>
          <div class="atc"><i class="fa fa-plus-circle"></i></div>
        </div>

      </div>

      <!-- <div class="pagination_">
        <span></span>
        <span class="active"></span>
        <span></span>
        <span></span>
      </div> -->

    </div>
  </section>

    <section id="header">

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <!-- <a href="cart.php"><i class="far fa-shopping-bag"></i></a> -->
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <!-- <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 70% off! </p>
        <button>Shop Now</button>
    </section> -->

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">

        <?php
            $sql_Products = "SELECT * FROM products where product_category_id = 1 limit 4 offset 4";
            $run_Sql_Products = mysqli_query($con, $sql_Products);
            if ($run_Sql_Products) {
                while ($fetch_Products = mysqli_fetch_assoc($run_Sql_Products)) {
                    $product_Id = $fetch_Products['product_id'];
                    $product_Image = $fetch_Products['product_image1'];
                    $product_Brand = $fetch_Products['product_brand'];
                    $product_Name = $fetch_Products['product_name'];
                    $product_Price = $fetch_Products['product_price'];

                    echo '
                            <div class="pro" onclick="window.location.href=\'product.php?productID='.$product_Id.'\'";>
                                <img src="data:image/webp;base64,'.base64_encode($product_Image).'">
                                <div class="des">
                                    <span>'.$product_Brand.'</span>
                                    <h5>'.$product_Name.'</h5>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4>'.$product_Price.' Rs</h4>
                                </div>
                                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                            </div>
                        ';
                }
            }
            ?>
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Limited Time Offer </h4>
        <h2>Up to <span>70% Off</span> – All Shoes and Footwear</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
        <?php
            $sql_Products = "SELECT * FROM products where product_category_id = 1 limit 4 offset 4";
            $run_Sql_Products = mysqli_query($con, $sql_Products);
            if ($run_Sql_Products) {
                while ($fetch_Products = mysqli_fetch_assoc($run_Sql_Products)) {
                    $product_Image = $fetch_Products['product_image1'];
                    $product_Brand = $fetch_Products['product_brand'];
                    $product_Name = $fetch_Products['product_name'];
                    $product_Price = $fetch_Products['product_price'];

                    echo '
                            <div class="pro" onclick="window.location.href=\'product.php\'";>
                                <img src="data:image/webp;base64,'.base64_encode($product_Image).'">
                                <div class="des">
                                    <span>'.$product_Brand.'</span>
                                    <h5>'.$product_Name.'</h5>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4>'.$product_Price.' Rs</h4>
                                </div>
                                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                            </div>
                        ';
                }
            }
            ?>
       </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>spring/summer</h4>
            <h2>upcomming season</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>NEW FOOTWEAR COLLECTION </h2>
            <h3>Spring / Summer 2022</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Prints</h3>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span> </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address: </strong> Abc, 6th Avenue, Delhi - 110082</p>
            <p><strong>Phone:</strong> +91 92345 12321</p>
            <p><strong>Hours:</strong> 00:00 - 23:59, Mon - Sun</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways </p>
            <img src="img/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>© 2023, Leatheringo Footwear Pvt. Ltd.</p>
        </div>
    </footer>

    <script src="js/app.js"></script>
    <script src="script.js"></script>
</body>

</html>