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
                                <h4 class="mb-0">Orders</h4>

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

                                <button type="button" class="btn btn-success waves-effect waves-light mb-3" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable"><i class="mdi mdi-plus me-1"></i> Add New Order</button>
                            </div>
                            <div class="table-responsive mb-4">
                                <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                                    <thead>
                                        <tr class="bg-transparent">
                                            <th>Item Code</th>
                                            <th>Name</th>
                                            <th>Expiry Date</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Grams</th>
                                            <th>Type</th>
                                            <th style="width: 120px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $sql="SELECT * from medicines where is_deleted=0";
                                    $result = $con->query($sql);
                                    while ($row = $result->fetch_assoc()){
                                    ?>
                                        <tr>

                                            <td><a href="javascript: void(0);" class="text-dark fw-bold"><?php echo $row['item_code'] ?></a> </td>
                                            <td>
                                            <?php echo $row['name'] ?>
                                            </td>
                                            <td><?php echo $row['expiry_date'] ?></td>

                                            <td>
                                            <?php echo $row['price'] ?> DHS
                                            </td>
                                            <td>
                                                <div class="badge bg-pill bg-soft-success font-size-12"><?php echo $row['stock'] ?></div>
                                            </td>
                                            <td><?php echo $row['grams'] ?> </td>
                                            <td><?php echo $row['type'] ?> </td>
                                            <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary update_data" id="<?php echo $row["id"]; ?>"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-success view_data" id="<?php echo $row["id"]; ?>"><i class="uil uil-eye font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
 
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
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Update Medicine</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="include/code.php" method="post" >
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Item Code:</label>
                            <input type="text" class="form-control" id="icode" name="icode" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Stock:</label>
                            <input type="number" class="form-control" id="stock" name="stock" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Price:</label>
                            <input type="text" class="form-control" id="price" name="price" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Expiry Date:</label>
                            <input type="date" class="form-control" id="edate" name="edate" min="<?php echo (new \DateTime())->format('Y-m-d'); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Grams:</label>
                            <input type="text" class="form-control" id="grams" name="grams" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Type:</label>
                            <select class="form-select" aria-label="Default select example" name="type" id="type" required>
                                <option selected>Open this select menu</option>
                                <option value="Pharmacy">Pharmacy</option>
                                <option value="Parapharmacy">Parapharmacy</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Image:</label>
                            <input type="file" class="form-control" id="file" name="file" required>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Description:</label>
                            <textarea class="form-control" id="description" name="description" required></textarea>
                        </div>
                        <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" name="addmedicine">Save</button>
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
                    <h5 class="modal-title" id="edit">Add Medicine</h5>
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
                    <button type="submit" class="btn btn-success" name="updatemedicine">Update</button>
                </div>
                    </form>
                </div>
               
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- end modal -->

    <!-- view modal -->
    <!-- Scrollable modal example-->
    <div class="modal fade" id="select" tabindex="-1" role="dialog" aria-labelledby="select" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="select">View Medicine</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body" >
                    <form action="include/code.php" method="post" >
                    <input type="hidden" class="form-control" id="id" name="id" required>
                       <div class="modal-body" id="selectm">
                                    </div>
                        <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" name="updatemedicine">Update</button>
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
  var update = $(this).attr("id");
  $.ajax({
   url:"select.php",
   method:"POST",
   data:{update:update},
   success:function(data){
    $('#employee_detail').html(data);
    $('#edit').modal('show');
   }
  });
 });
</script>
<script>
     $(document).on('click', '.view_data', function(){
  //$('#dataModal').modal();
  var select = $(this).attr("id");
  $.ajax({
   url:"select.php",
   method:"POST",
   data:{select:select},
   success:function(data){
    $('#selectm').html(data);
    $('#select').modal('show');
   }
  });
 });
</script>
</html>