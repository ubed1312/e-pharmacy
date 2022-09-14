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
include_once('include/db.php');?>


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
                                <h4 class="mb-0">Team Deleted</h4>

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
                            
                            <div class="table-responsive mb-4">
                                <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                                    <thead>
                                        <tr class="bg-transparent">
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            
                                            <th>Status</th>
                                            <th style="width: 120px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $sql="SELECT * from team where is_deleted='Not Available'";
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

                                          
                                            <?php if($row['is_deleted']='Not Available'){ ?>
                                            <td>
                                            <div class="badge bg-pill bg-soft-danger font-size-12">Not Available</div>
                                            </td>
                                            <?php }?>
                                            <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary update_data" id="<?php echo $row["id"]; ?>"><i class="uil uil-pen font-size-18"></i></a>
                                               
 
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

  

     <!-- update modal -->
    <!-- Scrollable modal example-->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit">Update Deleted User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body" >
                    <form action="include/code.php" method="post" >
                    <input type="hidden" class="form-control" id="id" name="id" required>
                       <div class="modal-body" id="employee_detail">
                                    </div>
                        <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" name="updatedeluser">Update</button>
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
     $(document).on('click', '.update_data', function(){
  //$('#dataModal').modal();
  var updatedeluser = $(this).attr("id");
  $.ajax({
   url:"select.php",
   method:"POST",
   data:{updatedeluser:updatedeluser},
   success:function(data){
    $('#employee_detail').html(data);
    $('#edit').modal('show');
   }
  });
 });
</script>
</html>