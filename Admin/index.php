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
<html lang="en">


<!-- Mirrored from themesbrand.com/minible/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:14:34 GMT -->
<?php include('include/header.php'); ?>


<body>

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php include('include/sidebar.php'); ?>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Minible</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <?php
                    include('include/db.php');
                    $query1 = "SELECT * , sum(qty*price) as somme  from medicines , medicines_order where medicines.id=medicines_order.id_m and delivery='Delivery Done'";
                    $rst1 = $con->query($query1);
                    $row1 = mysqli_fetch_array($rst1);
                    ?>
                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <div id="total-revenue-chart"></div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo $row1['somme'] ?></span> DHS</h4>
                                        <p class="text-muted mb-0">Total Revenue</p>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- end col-->
                        <?php
                        $query2 = "SELECT * , count(id) as idd  from  medicines_order where is_deleted='0'";
                        $rst2 = $con->query($query2);
                        $row2 = mysqli_fetch_array($rst2);
                        ?>
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <div id="orders-chart"> </div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo $row2['idd'] ?></span></h4>
                                        <p class="text-muted mb-0">Orders</p>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- end col-->
                        <?php
                        $query3 = "SELECT count(id) as user  from  users ";
                        $rst3 = $con->query($query3);
                        $row3 = mysqli_fetch_array($rst3);
                        ?>
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <div id="customers-chart"> </div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo $row3['user'] ?></span></h4>
                                        <p class="text-muted mb-0">Customers</p>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">

                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <div id="growth-chart"></div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1">+ <span data-plugin="counterup">12.58</span>%</h4>
                                        <p class="text-muted mb-0">Growth</p>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- end col-->
                    </div> <!-- end row-->






                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <?php include('include/footer.php'); ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <?php include('include/js.php'); ?>
</body>


<!-- Mirrored from themesbrand.com/minible/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:15:28 GMT -->

</html>