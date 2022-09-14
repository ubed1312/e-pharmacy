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


<!-- Mirrored from themesbrand.com/minible/layouts/ecommerce-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:16:17 GMT -->
<?php include('include/header.php');
include_once('include/db.php'); ?>


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
                                <h4 class="mb-0">Team List</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active">Orders</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div>

                                <button type="button" class="btn btn-success waves-effect waves-light mb-3" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable"><i class="mdi mdi-plus me-1"></i> Add New User</button>
                            </div>
                            <div class="table-responsive mb-4">
                                <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                                    <thead>
                                        <tr class="bg-transparent">
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                       
                                            <th style="width: 120px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $email = $_SESSION["Email2"];
                                        $sql = "SELECT * from team where is_deleted='Available' and email!='$email'";
                                        $result = $con->query($sql);

                                        $ciphering = "AES-128-CTR";
                                        $options   = 0;
                                        $decryption_iv = '1234567891011121';
                                        $decryption_key = "W3docs";
                                        while ($row = $result->fetch_assoc()) {

                                            $decryption = openssl_decrypt($row['password'], $ciphering, $decryption_key, $options, $decryption_iv);
                                        ?>
                                            <tr>

                                                <td><a href="javascript: void(0);" class="text-dark fw-bold"><?php echo $row['name'] ?></a> </td>
                                                <td>
                                                    <?php echo $row['email'] ?>
                                                </td>
                                                <td><?php echo $decryption ?></td>

                                           
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary update_data" id="<?php echo $row["id"]; ?>"><i class="uil uil-pen font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger delete_data" id="<?php echo $row["id"]; ?>"><i class="uil uil-trash-alt font-size-18"></i></a>

                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table -->
                        </div>
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <?php include('include/footer.php'); ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- start modal -->
    <!-- Scrollable modal example-->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Add User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="include/code.php" method="post">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" name="addteam">Save</button>
                        </div>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- end modal -->

    <!-- update modal -->
    <!-- Scrollable modal example-->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit">Update User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="include/code.php" method="post">
                        <input type="hidden" class="form-control" id="id" name="id" required>
                        <div class="modal-body" id="employee_detail">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" name="updateteam">Update</button>
                        </div>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- end modal -->

   

    <!-- delete modal -->
    <!-- Scrollable modal example-->
    <div class="modal fade" id="del" tabindex="-1" role="dialog" aria-labelledby="del" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="del">Delete User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="include/code.php" method="post">
                        <div class="modal-body" id="delm">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger" data-bs-dismiss="modal" name="deleteteam" id="deleteteam">Delete</button>
                        </div>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- end modal -->



    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <?php include('include/js.php'); ?>

</body>

<!-- Mirrored from themesbrand.com/minible/layouts/ecommerce-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:16:20 GMT -->
<script>
    $(document).on('click', '.update_data', function() {
        //$('#dataModal').modal();
        var updateteam = $(this).attr("id");
        $.ajax({
            url: "select.php",
            method: "POST",
            data: {
                updateteam: updateteam
            },
            success: function(data) {
                $('#employee_detail').html(data);
                $('#edit').modal('show');
            }
        });
    });
</script>
<script>
    $(document).on('click', '.delete_data', function() {
        //$('#dataModal').modal();
        var deluser = $(this).attr("id");
        $.ajax({
            url: "select.php",
            method: "POST",
            data: {
                deluser: deluser
            },
            success: function(data) {
                $('#delm').html(data);
                $('#del').modal('show');
            }
        });
    });
</script>

</html>