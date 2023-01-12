<?php
session_start();

if (!isset($_SESSION['Email1'])) {
    include('include/db.php');

    //Redirect the instructor to login page if he/she is not logged in.
    echo "
        <script type='text/javascript'>
          window.location.href ='login.php';
        </script>
      ";
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<?php include('include/header.php'); ?>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <!-- Body main wrapper start -->
    <div class="body-wrapper">

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
                        <a href="index.html"><img src="img/logo.png" alt="Logo"></a>
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
                                <li><a href="service.html">Services</a></li>
                                <li><a href="service-details.html">Service Details</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="team-details.html">Team Details</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="locations.html">Google Map Locations</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                                <li><a href="shop-right-sidebar.html">Shop right sidebar</a></li>
                                <li><a href="product-details.html">Shop details </a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="order-tracking.html">Order Tracking</a></li>
                                <li><a href="account.php">My Account</a></li>
                                <li><a href="login.html">Sign in</a></li>
                                <li><a href="register.html">Register</a></li>
                            </ul>
                        </li>
                        <li><a href="#">News</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">News</a></li>
                                <li><a href="blog-grid.html">News Grid</a></li>
                                <li><a href="blog-left-sidebar.html">News Left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">News Right sidebar</a></li>
                                <li><a href="blog-details.html">News details</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.php">About</a></li>
                                <li><a href="service.html">Services</a></li>
                                <li><a href="service-details.html">Service Details</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="team-details.html">Team Details</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="history.html">History</a></li>
                                <li><a href="add-listing.html">Add Listing</a></li>
                                <li><a href="locations.html">Google Map Locations</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                    <ul>
                        <li>
                            <a href="account.php" title="My Account">
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
        <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="img/bg/cart.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__breadcrumb-inner">
                            <h1 class="page-title">Cart</h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="index.php"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                    <li>Cart</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- SHOPING CART AREA START -->
        <div class="liton__shoping-cart-area mb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping-cart-inner">
                            <div class="shoping-cart-table table-responsive">
                                <table class="table">
                                    <thead>
                                        <th class="cart-product-image" width="16%">Image</th>
                                        <th class="cart-product-info" width="16%">Product</th>
                                        <th class="cart-product-price" width="16%">Price</th>
                                        <th class="cart-product-info" width="16%">Type</th>
                                        <th class="cart-product-quantity" width="16%">Quantity</th>
                                        <th class="cart-product-quantity" width="16%">Total</th>
                                        <th class="cart-product-quantity" width="16%">Action</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include('Admin/include/db.php');
                                        $date = date("Y-m-d");
                                        $user = $_SESSION['Email2'];
                                        $para = "SELECT medicines.id as idd , medicines.* , medicines_order.* from medicines_order , medicines where id_user='$user' and delivery='Not yet' and medicines.id=medicines_order.id_m and medicines_order.is_deleted='0' ";
                                        $rstpara = $con->query($para);
                                        while ($row = $rstpara->fetch_assoc()) {
                                        ?>
                                            <tr>
                                                <td class="cart-product-image" width="16%">
                                                    <a href="product-page.php?id=<?php echo $row['idd'] ?>"><img src="Admin/<?php echo $row['image'] ?>" alt="#"></a>
                                                </td>
                                                <td class="cart-product-info" width="16%">
                                                    <h4><a href="product-page.php?id=<?php echo $row['idd'] ?>"><?php echo $row['name'] ?></a></h4>
                                                </td>
                                                <td class="cart-product-price" width="16%"><?php echo $row['price'] ?> DHS</td>
                                                <td class="cart-product-price" width="16%"><?php echo $row['type'] ?> </td>
                                                <td class="cart-product-price" width="16%"><?php echo $row['qty'] ?></td>
                                                <td width="16%"><?php echo ($row['qty'] * $row['price']) ?> DHS</td>
                                                <?php if($row['valid_user'] === 'non'){ ?>
                                                <td width="16%"> <a class="passingID" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?php echo $row['idd'] ?>" data-qty="<?php echo $row['qty'] ?>"><i class="icon-edit" style="color:green;"> Update</i></a>
                                                    <a class="deleteID" data-bs-toggle="modal" data-bs-target="#delete" data-id="<?php echo $row['id'] ?>"><i class="fa fa-trash" style="color:red;"> Delete</i></a>
                                                </td><?php } else if ($row['valid'] === 'No'){ ?>
                                                   <td><p style="color:green;">Order being checked</p></td> 
                                                    <?php }else if ($row['valid'] === 'Accept'){ ?>
                                                        <td><p style="color:green;">Order in the process of delivery</p></td>
                                                        <?php }else{ ?>
                                                            <td><p style="color:red;">Denied</p></td>
                                                            <?php } ?>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php
                            $user = $_SESSION['Email2'];
                            $query = "SELECT * , sum(price*qty) as sumu from medicines_order , medicines where id_user='$user' and valid='No' and  medicines.id=medicines_order.id_m and medicines_order.is_deleted='0' and valid_user='non'  ";
                            $rst = $con->query($query);
                            $row1 = mysqli_fetch_array($rst);
                            ?>
                            <?php if($row1['valid_user'] === 'non'){ ?>
                            <div class="shoping-cart-total mt-50">
                                <h4>Cart Totals</h4>
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
                                    <a href="checkout.php" class="theme-btn-1 btn btn-effect-1">Proceed to checkout</a>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SHOPING CART AREA END -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Quantity Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="include/code.php" method="post">
                        <div class="modal-body">
                            <input type="hidden" name="idm" id="idm">
                            <input type="hidden" name="user" id="user" value="<?php echo $_SESSION['Email2'] ?>">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="qty" name="qty" min="1" max="5">
                                <label for="floatingInput">Update Quantity</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="updateqty" class="btn btn-success">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal delete -->
        <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Product Cart</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="include/code.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="idp" id="idp">
                        <input type="hidden" name="user" id="user" value="<?php echo $_SESSION['Email2'] ?>">
                        <h4 style="text-align:center;"> <strong>Are You Sure !?</strong> </h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="deletep" class="btn btn-danger">Delete</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
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
                                <a class="btn btn-effect-3 btn-white" href="shop.html">Explore Products <i class="icon-next"></i></a>
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
                                            <p><a href="tel:+0123-456789">+0123-456789</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-mail"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="mailto:example@example.com">example@example.com</a></p>
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
                                    <li><a href="faq.html">FAQ</a></li>
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
                                    <li><a href="faq.html">FAQ</a></li>

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
    <?php include('include/js.php') ?>

</body>
<script>
    $(".passingID").click(function() {
        var ids = $(this).attr('data-id');
        var qty = $(this).attr('data-qty');
        $("#idm").val(ids);
        $("#qty").val(qty);
        $('#exampleModal').modal('show');
    });
</script>
<script>
    $(".deleteID").click(function() {
        var ids = $(this).attr('data-id');
        $("#idp").val(ids);
        $('#delete').modal('show');
    });
</script>

</html>