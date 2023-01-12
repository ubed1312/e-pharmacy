<div class="ltn__header-middle-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="site-logo">
                    <a href="index.php"><img src="img/logo1.jpg" alt="Logo"></a>
                </div>
            </div>
            <div class="col header-contact-serarch-column d-none d-lg-block">
                <div class="header-contact-search">
                    <!-- header-feature-item -->
                    <div class="header-feature-item">
                        <div class="header-feature-icon">
                            <i class="icon-call"></i>
                        </div>
                        <div class="header-feature-info">
                            <h6>Phone</h6>
                            <p><a href="tel:0123456789">+0123-456-789</a></p>
                        </div>
                    </div>
                    <!-- header-search-2 -->
                    <!-- <div class="header-search-2">
                                <form id="#123" method="get"  action="#">
                                    <input type="text" name="search" value="" placeholder="Search here..."/>
                                    <button type="submit">
                                        <span><i class="icon-search"></i></span>
                                    </button>
                                </form>
                            </div> -->
                </div>
            </div>
            <div class="col">
                <!-- header-options -->
                <div class="ltn__header-options">
                    <ul>
                        <li class="d-none">
                            <!-- ltn__currency-menu -->
                            <div class="ltn__drop-menu ltn__currency-menu">
                                <ul>
                                    <li><a href="#" class="dropdown-toggle"><span class="active-currency">USD</span></a>
                                        <ul>
                                            <li><a href="login.html">USD - US Dollar</a></li>
                                            <li><a href="wishlist.html">CAD - Canada Dollar</a></li>
                                            <li><a href="register.html">EUR - Euro</a></li>
                                            <li><a href="account.html">GBP - British Pound</a></li>
                                            <li><a href="wishlist.html">INR - Indian Rupee</a></li>
                                            <li><a href="wishlist.html">BDT - Bangladesh Taka</a></li>
                                            <li><a href="wishlist.html">JPY - Japan Yen</a></li>
                                            <li><a href="wishlist.html">AUD - Australian Dollar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="d-lg-none">
                            <!-- header-search-1 -->
                            <div class="header-search-wrap">
                                <div class="header-search-1">
                                    <div class="search-icon">
                                        <i class="icon-search  for-search-show"></i>
                                        <i class="icon-cancel  for-search-close"></i>
                                    </div>
                                </div>
                                <div class="header-search-1-form">
                                    <form id="#" method="get" action="#">
                                        <input type="text" name="search" value="" placeholder="Search here..." />
                                        <button type="submit">
                                            <span><i class="icon-search"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li class="d-none---">
                            <!-- user-menu -->
                            <div class="ltn__drop-menu user-menu">
                                <ul>
                                    <li>
                                        <?php
                                        include('db.php');
                                        include('log.php');
                                        
                                        if (isset($_SESSION['Email2'])) {
                                            $user = $_SESSION['Email2'];
                                            $select = "SELECT * from users where username='$user'";
                                            $rst = $con->query($select);
                                            $row = mysqli_fetch_array($rst);
                                        ?>
                                            <a href="#"><i class="icon-user" > <span class="ltn__secondary-color"><?php echo $row['first_name']; ?></span> </i></a>
                                            <ul>
                                                <li><a href="account.php">My Account</a></li>
                                                <!-- <li><a href="wishlist.html">Wishlist</a></li> -->
                                                <li><a href="login.php">Logout</a></li>
                                            </ul>
                                        <?php } else { ?>
                                            <a href="#"><i class="icon-user"></i></a>
                                            <ul>
                                                <li><a href="login.php">Sign in</a></li>
                                                <li><a href="register.php">Register</a></li>
                                            </ul>
                                        <?php } ?>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <!-- mini-cart 2 -->
                            <?php
                            if (isset($_SESSION['Email2'])) {
                                $select11 = "SELECT * , count(medicines_order.id) as orders , sum(price*qty) as sumorder from medicines_order , medicines where id_user='$user' and medicines_order.id_m=medicines.id and medicines_order.is_deleted=0 and valid_user='non'";
                                $rst11 = $con->query($select11);
                                $row11 = mysqli_fetch_array($rst11);
                            ?>
                                <div class="mini-cart-icon mini-cart-icon-2">
                                    <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                                        <span class="mini-cart-icon">
                                            <i class="icon-shopping-cart"></i>
                                            <sup><?php echo $row11['orders'] ?></sup>
                                        </span>
                                        <h6><span>Your Cart</span> <span class="ltn__secondary-color"><?php echo $row11['sumorder'] ?> DHS</span></h6>
                                    </a>
                                </div>
                            <?php } else { ?>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>