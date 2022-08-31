<div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <span class="ltn__utilize-menu-title">Cart</span>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="mini-cart-product-area ltn__scrollbar">
            <?php
            include('db.php');
            $user = $_SESSION['Email2'];
            $cart = "SELECT * , medicines.id as idd   from medicines_order , medicines where id_user='$user' and medicines_order.id_m=medicines.id and medicines_order.is_deleted=0";
            $rstcart = $con->query($cart);
            while ($rowcart = $rstcart->fetch_assoc()) {
            ?>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="product-page.php?id=<?php echo $rowcart['idd'] ?>"><img src="Admin/<?php echo $rowcart['image'] ?>" alt="Image"></a>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#"><?php echo $rowcart['name'] ?></a></h6>
                        <span class="mini-cart-quantity"><?php echo $rowcart['qty'] ?> x <?php echo $rowcart['price'] ?> DHS</span>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?php

        $select11 = "SELECT * , sum(price*qty) as sumorder from medicines_order , medicines where id_user='$user' and medicines_order.id_m=medicines.id and medicines_order.is_deleted=0";
        $rst11 = $con->query($select11);
        $row11 = mysqli_fetch_array($rst11);
        ?>
        <div class="mini-cart-footer">
            <div class="mini-cart-sub-total">
                <h5>Subtotal: <span><?php echo $row11['sumorder'] ?> DHS</span></h5>
            </div>
            <div class="btn-wrapper">
                <a href="cart.php" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                <a href="cart.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
            </div>
            <!-- <p>Free Shipping on All Orders Over $100!</p> -->
        </div>

    </div>
</div>