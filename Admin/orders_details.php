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
                    <?php
                    $user = $_GET['id'];
                    $select  = "SELECT * from users where username='$user'";
                    $rst = $con->query($select);
                    $roww = mysqli_fetch_assoc($rst);
                    ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Orders : <?php echo $roww['username'] ?></h4>

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
                                            <th>Order ID</th>
                                            <th>Medicine</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Prescription</th>
                                            <th>Valid Order</th>
                                            <th>Delivery Status</th>
                                            <th style="width: 120px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        $sql = "SELECT * , mo.id as da  from medicines_order mo , users u , medicines m where mo.id_user=u.username and mo.id_m = m.id  and valid_user='oui' and mo.is_deleted='0'  ";
                                        $result = $con->query($sql);
                                        while ($row = $result->fetch_assoc()) {
                                        ?>
                                            <tr>

                                                <td><a href="javascript: void(0);" class="text-dark fw-bold"><?php echo $i++ ?></a> </td>
                                                <td>
                                                    <?php echo $row['name'] ?>
                                                </td>
                                                <td> <?php echo $row['qty'] ?></td>

                                                <td>
                                                    <?php echo $row['price'] ?> DHS
                                                </td>
                                                <?php if (empty($row['prescription'])) { ?>
                                                    <td>
                                                        <div class="badge bg-pill bg-soft-danger font-size-12">No</div>
                                                    </td>
                                                <?php } else { ?>
                                                    <td>
                                                        <div class="badge bg-pill bg-soft-success font-size-12">Yes</div>
                                                    </td>
                                                <?php } ?>
                                                <?php if ($row['valid'] === 'No') { ?>
                                                    <td>
                                                        <div class="badge bg-pill bg-soft-danger font-size-12">No</div>
                                                    </td>
                                                <?php } else { ?>
                                                    <td>
                                                        <div class="badge bg-pill bg-soft-success font-size-12">Yes</div>
                                                    </td>
                                                <?php } ?>
                                                <?php if ($row['delivery'] === 'Not yet') { ?>
                                                    <td>
                                                        <div class="badge bg-pill bg-soft-danger font-size-12">Not yet</div>
                                                    </td>
                                                <?php } else { ?>
                                                    <td>
                                                        <div class="badge bg-pill bg-soft-success font-size-12">Order delivered</div>
                                                    </td>

                                                <?php } ?>

                                                <td>
                                                    <a href="details.php?id=<?php echo $row['da']; ?>" class="px-3 text-success passingID" data-id="<?php echo $row['da'] ?>" data-name="<?php echo $row['name'] ?>" data-qty="<?php echo $row['qty'] ?>" data-price="<?php echo $row['price'] ?>" data-image="<?php echo $row['image'] ?>"><i class="uil uil-eye font-size-18"></i></a>
                                                    <?php if ($row['valid'] === 'No') { ?>
                                                    <a class="px-3 text-warning update" data-id="<?php echo $row['da'] ?>"  ><i class="uil uil-edit font-size-18"></i>Update order</a>
                                                    <?php } else {} ?>
                                                    <?php if ($row['delivery'] === 'Not yet') { ?>
                                                    <a class="px-3 text-info updatedelivery" data-id="<?php echo $row['da'] ?>"  ><i class="uil uil-edit font-size-18"></i>Update Delivery</a>
                                                    <?php } else {} ?>
                                                
                                                    

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
                    <h5 class="modal-title" id="edit">Update Admin validation</h5>
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
                            <button type="submit" class="btn btn-success" name="updatevalidationadmin">Update</button>
                        </div>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- end modal -->

      <!-- update delivery modal -->
    <!-- Scrollable modal example-->
    <div class="modal fade" id="editdeli" tabindex="-1" role="dialog" aria-labelledby="editdeli" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editdeli">Update Delivery</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="include/code.php" method="post">
                        <div class="modal-body" id="employee_detaill">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" name="updatedela">Update</button>
                        </div>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- end modal -->

    <!-- Center Modal example -->
    <!-- <div class="modal fade bs-example-modal-center" tabindex="-1" id="myModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Center modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" class="form-control" name="idkl" id="idkl" value="">
                    <label for="name">Medicine: </label>
                    <input type="text" class="form-control" id="name" name="name" readonly/>
                    <label for="name">Quantity: </label>
                    <input type="text" class="form-control" id="qty" name="qty" readonly/>
                    <label for="name">Price (DHS): </label>
                    <input type="text" class="form-control" id="price" name="price"  readonly/>
                    <label for="name">Prescription: </label>
                    <img id="image" class="rounded mx-auto d-block" width="250">
                </div>
            </div>
        </div>
    </div> -->



    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <?php include('include/js.php'); ?>

</body>

<!-- Mirrored from themesbrand.com/minible/layouts/ecommerce-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:16:20 GMT -->
<script>
    $(document).on('click', '.update_data', function() {
        //$('#dataModal').modal();
        var updatedeluser = $(this).attr("id");
        $.ajax({
            url: "select.php",
            method: "POST",
            data: {
                updatedeluser: updatedeluser
            },
            success: function(data) {
                $('#employee_detail').html(data);
                $('#edit').modal('show');
            }
        });
    });
</script>

<!-- <script>
    $(".passingID").click(function() {
        var ids = $(this).attr('data-id');
        var name = $(this).attr('data-name');
        var qty = $(this).attr('data-qty');
        var price = $(this).attr('data-price');
        var image = $(this).attr('data-image');
        $("#idkl").val(ids);
        $("#name").val(name);
        $("#qty").val(qty);
        $("#price").val(price);
        $('#image').attr('src',image);
        $('#myModal').modal('show');
    });
</script> -->
<script>
     $(document).on('click', '.update', function(){
  //$('#dataModal').modal();
  var updatedeli = $(this).attr("data-id");
  $.ajax({
   url:"select.php",
   method:"POST",
   data:{updatedeli:updatedeli},
   success:function(data){
    $('#employee_detail').html(data);
    $('#edit').modal('show');
   }
  });
 });
</script>
<script>
     $(document).on('click', '.updatedelivery', function(){
  //$('#dataModal').modal();
  var updatedelivery = $(this).attr("data-id");
  $.ajax({
   url:"select.php",
   method:"POST",
   data:{updatedelivery:updatedelivery},
   success:function(data){
    $('#employee_detaill').html(data);
    $('#editdeli').modal('show');
   }
  });
 });
</script>
</html>