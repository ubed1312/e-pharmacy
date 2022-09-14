
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="20">
            </span>
        </a>

        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="index.php">
                        <i class="uil-home-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-window-section"></i>
                        <span>Medicines</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="medicine-list.php">Medicine List</a></li>
                        <li><a href="medicine-deleted.php">Medicine Deleted</a></li>
                        <li><a href="medicine-expiry.php">Medicine Expiry Date</a></li>
                        <li><a href="medicine-stockout.php">Medicine Stock Out </a></li>
                    </ul>
                </li>
              <?php 
              if($_SESSION['Email2'] === 'ibra@gmail.com'){
              ?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-circle"></i>
                        <span>Team</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="team-list.php">Team List</a></li>
                        <li><a href="team-deleted.php">Team Deleted</a></li>
                    </ul>
                </li>
<?php } ?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-store"></i>
                        <span>Check Orders</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="orders.php">Orders </a></li>
                        <!-- <li><a href="team-deleted.php">Team Deleted</a></li> -->
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->