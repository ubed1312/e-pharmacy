<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<?php include('include/header.php'); ?>
<style>
    .hy {
        padding: 17px 206px;
    }
</style>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <!-- Body main wrapper start -->
    <div class="body-wrapper">

        <!-- HEADER AREA START (header-3) -->
        <!-- HEADER AREA START (header-3) -->
        <?php include('include/top-header.php'); ?>
        <!-- ltn__header-top-area end -->
        <!-- ltn__header-middle-area start -->
        <?php include('include/header-middle.php'); ?>
        <!-- ltn__header-middle-area end -->
        <!-- header-bottom-area start -->
        <?php include('include/header-bottom.php'); ?>
        <!-- header-bottom-area end -->
        </header>
        <!-- HEADER AREA END -->

        <!-- MOBILE MENU START -->
        <div class="mobile-header-menu-fullwidth mb-30 d-block d-lg-none">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Mobile Menu Button -->
                        <div class="mobile-menu-toggle d-lg-none">
                            <span>MENU</span>
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MOBILE MENU END -->

        <!-- Utilize Cart Menu Start -->
        <?php include('include/cart.php'); ?>
        <!-- Utilize Cart Menu End -->

        <!-- Utilize Mobile Menu Start -->
        <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <div class="site-logo">
                        <a href="index.html"><img src="img/logo.jpg" alt="Logo"></a>
                    </div>
                    <button class="ltn__utilize-close">×</button>
                </div>
                <div class="ltn__utilize-menu-search-form">
                    <form action="#">
                        <input type="text" placeholder="Search...">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="ltn__utilize-menu">
                    <ul>
                        <!-- <li><a href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home Style 01</a></li>
                                <li><a href="index-2.html">Home Style 02</a></li>
                                <li><a href="index-3.html">Home Style 03</a></li>
                            </ul>
                        </li> -->
                        <li><a href="#">About</a>
                            <ul class="sub-menu">
                                <li><a href="about.php">About</a></li>
                                <!-- <li><a href="service.html">Services</a></li>
                                <li><a href="service-details.html">Service Details</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="team-details.html">Team Details</a></li> -->
                                <li><a href="faq.php">FAQ</a></li>
                                <!-- <li><a href="locations.html">Google Map Locations</a></li> -->
                            </ul>
                        </li>
                        <li><a href="#">Shop</a>
                            <ul class="sub-menu">
                                <!-- <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                                <li><a href="shop-right-sidebar.html">Shop right sidebar</a></li>
                                <li><a href="product-details.html">Shop details </a></li>
                                <li><a href="cart.html">Cart</a></li> -->
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <!-- <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="order-tracking.html">Order Tracking</a></li> -->
                                <li><a href="account.html">My Account</a></li>
                                <li><a href="login.html">Sign in</a></li>
                                <li><a href="register.html">Register</a></li>
                            </ul>
                        </li>
                        <li><a href="#">News</a>
                            <ul class="sub-menu">
                                <!-- <li><a href="blog.html">News</a></li>
                                <li><a href="blog-grid.html">News Grid</a></li>
                                <li><a href="blog-left-sidebar.html">News Left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">News Right sidebar</a></li>
                                <li><a href="blog-details.html">News details</a></li> -->
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.php">About</a></li>
                                <!-- <li><a href="service.html">Services</a></li>
                                <li><a href="service-details.html">Service Details</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="team-details.html">Team Details</a></li> -->
                                <li><a href="faq.php">FAQ</a></li>
                                <!-- <li><a href="history.html">History</a></li>
                                <li><a href="add-listing.html">Add Listing</a></li>
                                <li><a href="locations.html">Google Map Locations</a></li>
                                <li><a href="404.html">404</a></li> -->
                                <li><a href="contact.html">Contact</a></li>
                                <!-- <li><a href="coming-soon.html">Coming Soon</a></li> -->
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                    <ul>
                        <li>
                            <a href="account.html" title="My Account">
                                <span class="utilize-btn-icon">
                                    <i class="far fa-user"></i>
                                </span>
                                My Account
                            </a>
                        </li>
                        <li>
                            <a href="wishlist.html" title="Wishlist">
                                <span class="utilize-btn-icon">
                                    <i class="far fa-heart"></i>
                                    <sup>3</sup>
                                </span>
                                Wishlist
                            </a>
                        </li>
                        <li>
                            <a href="cart.html" title="Shoping Cart">
                                <span class="utilize-btn-icon">
                                    <i class="fas fa-shopping-cart"></i>
                                    <sup>5</sup>
                                </span>
                                Shoping Cart
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="ltn__social-media-2">
                    <ul>
                        <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Utilize Mobile Menu End -->

        <div class="ltn__utilize-overlay"></div>

        <!-- BREADCRUMB AREA START -->
        <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="img/bg/14.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__breadcrumb-inner">
                            <h1 class="page-title">Checkout</h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="index.php"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                    <li>Checkout</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->
        <?php
        include('include/db.php');
        $us = $_SESSION['Email2'];
        $user = "SELECT *  from users  where username='$us'";
        $rstuser = $con->query($user);
        $rowuser = mysqli_fetch_array($rstuser);
        ?>
        <!-- WISHLIST AREA START -->
        <div class="ltn__checkout-area mb-105">
            <form action="include/code.php" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ltn__checkout-inner">
                                <div class="ltn__checkout-single-content mt-50">
                                    <h4 class="title-2">Billing Details</h4>
                                    <div class="ltn__checkout-single-content-info">

                                        <h6>Personal Information</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-item input-item-name ltn__custom-icon">
                                                    <input type="text" name="ltn__name" placeholder="First name" value="<?php echo $rowuser['first_name']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-item-name ltn__custom-icon">
                                                    <input type="text" name="ltn__lastname" placeholder="Last name" value="<?php echo $rowuser['last_name']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-item-email ltn__custom-icon">
                                                    <input type="email" name="email" placeholder="email address*" value="<?php echo $rowuser['username']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-item-phone ltn__custom-icon">
                                                    <input type="text" name="phone" placeholder="phone number*" value="<?php echo $rowuser['phone'];  ?>" required>
                                                </div>
                                            </div>

                                            
                                    <?php  /*/ 
                                            include('include/db.php');
                                            $user = $_SESSION['Email2'];
                                                    
                                             $query1 = "SELECT * from medicines_order , medicines where id_user='$user' and medicines.id = medicines_order.id_m and type='Pharmacy' and valid_user='non' ";
                                            $result1 = $con->query($query1);
                                            $row2 = mysqli_fetch_array($result1);
                                            if(isset($row2)){
                                            ?>
                                            <h6>Prescription (image)*</h6>
                                            <div class="col-md-12">
                                                <div class="input-item">
                                                    <input type="file" name="file" class="form-control" placeholder="PRE*" >
                                                </div>
                                            </div><?php }else{ ?>
                                                <?php } ?>/*/
                                        </div><br>
                                        <h6>Address*</h6>
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <textarea name="address" placeholder="Address , Country , Zip code" required><?php echo $rowuser['address'];  ?></textarea>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ltn__checkout-payment-method mt-50">
                                <h4 class="title-2">Payment Method</h4>
                                <div id="">

                                    <!-- card -->
                                    <div class="card">
                                        <h5 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2" aria-expanded="true">
                                            Cash on delivery ( COD )
                                        </h5>
                                        <div id="faq-item-2-2" class="collapse show" data-bs-parent="#checkout_accordion_1">
                                            <div class="card-body">
                                                <p>Pay with cash upon delivery.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card -->
                                    <!-- <div class="card">
                                        <h5 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-3" aria-expanded="false">
                                            PayPal <img src="img/icons/payment-3.png" alt="#">
                                        </h5>
                                        <div id="faq-item-2-3" class="collapse" data-bs-parent="#checkout_accordion_1">
                                            <div class="card-body">
                                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="ltn__payment-note mt-30 mb-30">
                                    <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                </div>
                                <!-- <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Place order</button> -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="shoping-cart-total mt-50">
                                <h4 class="title-2">Cart Totals</h4>
                                <?php
                                $user = $_SESSION['Email2'];
                                $query = "SELECT * , sum(price*qty) as sumu from medicines_order , medicines where id_user='$user' and valid='No' and  medicines.id=medicines_order.id_m and medicines_order.is_deleted='0' and valid_user='non'  ";
                                $rst = $con->query($query);
                                $row1 = mysqli_fetch_array($rst);
                                $paypal = ($row1['sumu'] + 20)/10;
                                if ($row1['valid_user'] == 'oui') {
                                ?>
                                <?php } else { ?>

                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Cart Subtotal</td>
                                                <td><?php echo $row1['sumu'] ?> DHS</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping and Handing</td>
                                                <td>20.00 DHS</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Order Total</strong></td>
                                                <td><strong><?php echo $row1['sumu'] + 20 ?> DHS</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="btn-wrapper text-right">
                                        <button type="submit" name="cod" class="hy theme-btn-1 btn btn-effect-1">COD</button>
                                    </div><br>
                                    <!-- <div id="smart-button-container">
                                        <div style="text-align: center;">
                                            <div id="paypal-button-container"></div>
                                        </div>
                                    </div> -->
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- WISHLIST AREA START -->

        <!-- CALL TO ACTION START (call-to-action-6) -->
        <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                            <div class="coll-to-info text-color-white">
                            <h1>Buy energy vitamins to protect  <br>your body</h1>
                            </div>
                            <div class="btn-wrapper">
                                <a class="btn btn-effect-3 btn-white" href="shop-parapharmacy.php">Explore Products <i class="icon-next"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CALL TO ACTION END -->

        <!-- FOOTER AREA START -->
        <footer class="ltn__footer-area  ">
            <div class="footer-top-area  section-bg-2 plr--5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-about-widget">
                                <div class="footer-logo">
                                    <div class="site-logo">
                                        <img src="img/logolekher.png" alt="Logo">
                                    </div>
                                </div>
                                <!-- <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is dummy text of the printing.</p> -->
                                <div class="footer-address">
                                    <ul>
                                        <!-- <li>
                                            <div class="footer-address-icon">
                                                <i class="icon-placeholder"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p>Brooklyn, New York, United States</p>
                                            </div>
                                        </li> -->
                                        <li>
                                            <div class="footer-address-icon">
                                                <i class="icon-call"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p><a href="tel:+0123-456789">+212-456789</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-address-icon">
                                                <i class="icon-mail"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p><a href="mailto:example@example.com">moulpharmacy@gmail.com</a></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ltn__social-media mt-20">
                                    <ul>
                                        <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="footer-widget footer-menu-widget clearfix">
                                <h4 class="footer-title">Company</h4>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="about.php">About</a></li>
                                        <!-- <li><a href="blog.html">Blog</a></li> -->
                                        <li><a href="shop-parapharmacy.php">All Products</a></li>
                                        <!-- <li><a href="locations.html">Locations Map</a></li> -->
                                        <li><a href="faq.php">FAQ</a></li>
                                        <li><a href="contact.php">Contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="footer-widget footer-menu-widget clearfix">
                                <h4 class="footer-title">Services</h4>
                                <div class="footer-menu">
                                    <ul>
                                        <!-- <li><a href="order-tracking.html">Order tracking</a></li> -->
                                        <li><a href="wishlist.html">Wish List</a></li>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="about.php">Terms & Conditions</a></li>
                                        <li><a href="faq.php">FAQ</a></li>
    
                                        <!-- <li><a href="about.php">Promotional Offers</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="footer-widget footer-menu-widget clearfix">
                                <h4 class="footer-title">Customer Care</h4>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="account.php">My account</a></li>
                                        <!-- <li><a href="wishlist.html">Wish List</a></li> -->
                                        <li><a href="cart.php">Order tracking</a></li>
                                        <li><a href="contact.php">Contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                            <div class="footer-widget footer-newsletter-widget">
                                <h4 class="footer-title">Newsletter</h4>
                                <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                                <div class="footer-newsletter">
                                    <form action="#">
                                        <input type="email" name="email" placeholder="Email*">
                                        <div class="btn-wrapper">
                                            <button class="theme-btn-1 btn" type="submit"><i class="fas fa-location-arrow"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <h5 class="mt-30">We Accept</h5>
                                <img src="img/icons/payment-4.png" alt="Payment Image">
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="ltn__copyright-area ltn__copyright-2 section-bg-7  plr--5">
                <div class="container-fluid ltn__border-top-2">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="ltn__copyright-design clearfix">
                                <p>All Rights Reserved @ MoulPharmacy <span class="current-year"></span></p>
                            </div>
                        </div>
                        <!-- <div class="col-md-6 col-12 align-self-center">
                            <div class="ltn__copyright-menu text-end">
                                <ul>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Claim</a></li>
                                    <li><a href="#">Privacy & Policy</a></li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER AREA END -->
        </div>
    <!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <?php include('include/js.php'); ?>
    <script src="https://www.paypal.com/sdk/js?client-id=AQDXwUJi3Mm_G4YTSSbV-jsialSJ1fJ075qfVXdkOmNGMD6PRorpbN8N02ct64Vntdv43w-rQk3hGXKE&disable-funding=credit,card"></script>
    <script>
        paypal.Buttons({
            style: {

                layout: 'vertical',

                color: 'blue',

                shape: 'pill',

                label: 'paypal'

            },
            createOrder: function(data, actions) {

                // Set up the transaction

                return actions.order.create({

                    purchase_units: [{

                        amount: {

                            value: '<?php echo $paypal; ?>'

                        }

                    }]

                });

            },
            onApprove: function(data, actions) {
                return  actions.order.capture().then(function(details){
                    alert('You have successfully created subscription ' + data.subscriptionID);
                });

               

            }
        }).render('#paypal-button-container');
    </script>
</body>

</html>