<!-- Include Connection File -->
<?php require_once "connection.php"; ?>

<?php

if ($_GET['productID']) {
    $product_Id = $_GET['productID'];
} else {
    header("Location: ./");
}

$sql_Products = "SELECT * FROM products where product_id = $product_Id";
$run_Sql_Products = mysqli_query($con, $sql_Products);
if ($run_Sql_Products) {
    if ($fetch_Products = mysqli_fetch_assoc($run_Sql_Products)) 
    {
        $product_Id = $fetch_Products['product_id'];
        $product_totalImages = $fetch_Products['total_images'];
        $product_Images = array();
        $i = 1;
        while ($i <= $product_totalImages) {
            array_push($product_Images, $fetch_Products['product_image' . $i . '']);
            $i += 1;
        }
        $product_Brand = $fetch_Products['product_brand'];
        $product_Name = $fetch_Products['product_name'];
        $product_Price = $fetch_Products['product_price'];
    }

    else 
    {
        header("Location: ./");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech2etc Ecommerce Tutorial</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
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
    </section>

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="img/products/f3.jpg" width="100%" id="MainImg" alt="">

            <div class="small-img-group">
                <?php
                $i = 1;
                while ($i <= $product_totalImages) {
                    echo
                        '
                        <div class="small-img-col">
                            <img src="data:image/webp;base64,' . base64_encode($product_Images[$i - 1]) . '" width="100%" class="small-img" alt="">
                        </div>
                    ';
                    $i += 1;
                }
                ?>
                
            </div>
        </div>

        <div class="single-pro-details">
            <h6>Home / Footwear/ <?php echo $product_Name ?></h6>
            <h4><?php echo $product_Name ?></h4>
            <h2><?php echo $product_Price ?> Rs</h2>
            <select>
              <option>Select Size</option>
              <option>7 UK</option>
              <option>8 UK</option>
              <option>9 UK</option>
              <option>10 UK</option>
          </select>
            <input type="number" value="1">
            <button class="normal">Add To Cart</button>
            <h4>Product Details</h4>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</span>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products </h2>
        <p>Summer Collection New Morden Design</p>
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
                            <div class="pro" onclick="window.location.href=\'product.php?productID=' . $product_Id . '\'";>
                                <img src="data:image/webp;base64,' . base64_encode($product_Image) . '">
                                <div class="des">
                                    <span>' . $product_Brand . '</span>
                                    <h5>' . $product_Name . '</h5>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4>' . $product_Price . ' Rs</h4>
                                </div>
                                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                            </div>
                        ';
            }
        }
        ?>
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
            <p>© 2023 LEATHERINGO - All Rights Reserved</p>
        </div>
    </footer>

    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function() {
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function() {
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function() {
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function() {
            MainImg.src = smallimg[3].src;
        }
    </script>


    <script src="script.js"></script>
</body>

</html>