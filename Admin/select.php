<?php  
include('include/db.php');
//update  
if(isset($_POST["update"]))
{
 $output = '';

 $query = "SELECT * FROM medicines WHERE id = '".$_POST["update"]."'";
 $result = mysqli_query($con, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
           $datet = (new \DateTime())->format("Y-m-d");
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
 
     <input type="hidden" class="form-control" id="id" name="id" value="'.$row['id'].'" required>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="'.$row['name'].'" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Item Code:</label>
                            <input type="text" class="form-control" id="icode" name="icode" value="'.$row['item_code'].'" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Stock:</label>
                            <input type="number" class="form-control" id="stock" name="stock" value="'.$row['stock'].'" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Price:</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price" value="'.$row['price'].'" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Expiry Date:</label>
                            <input type="date" class="form-control" id="edate" name="edate" min="'.$row['expiry_date'].'" value="'.$row['expiry_date'].'"   required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Grams:</label>
                            <input type="text" class="form-control" id="grams" name="grams" value="'.$row['grams'].'"  required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Type:</label>
                            <select class="form-select" aria-label="Default select example" name="type" id="type"   required>
                                <option selected style="display: none;" value="'.$row['type'].'">'.$row['type'].'</option>
                                <option value="Pharmacy">Pharmacy</option>
                                <option value="Parapharmacy">Parapharmacy</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Description:</label>
                            <textarea class="form-control" id="description" name="description" required>'.$row['description'].'</textarea>
                        </div>
                       
                  
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
//update image 
if(isset($_POST["updateimage"]))
{
 $output = '';

 $query = "SELECT * FROM medicines WHERE id = '".$_POST["updateimage"]."'";
 $result = mysqli_query($con, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
 
     <input type="hidden" class="form-control" id="id" name="id" value="'.$row['id'].'"  required>
                       <img src="'.$row['image'].'" class="rounded mx-auto d-block" width="200" height="auto">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Image</label>
                            <input type="file"  class="form-control" id="file" name="file" required>
                        </div>
                       
                  
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
// select
if(isset($_POST["select"]))
{
 $output = '';
 $query = "SELECT * FROM medicines WHERE id = '".$_POST["select"]."'";
 $result = mysqli_query($con, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
     <tr>  
     <td width="30%"><label>Image</label></td>  
     <td width="70%"><img src="'.$row['image'].'" class="rounded mx-auto d-block" width="200" height="auto"></td>  
 </tr>
     <tr>  
            <td width="30%"><label>Name</label></td>  
            <td width="70%">'.$row["name"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Item Code</label></td>  
            <td width="70%">'.$row["item_code"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Stock</label></td>  
            <td width="70%">'.$row["stock"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Price</label></td>  
            <td width="70%">'.$row["price"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Expiry Date</label></td>  
            <td width="70%">'.$row["expiry_date"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Grams</label></td>  
            <td width="70%">'.$row["grams"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Type</label></td>  
            <td width="70%">'.$row["type"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Description</label></td>  
            <td width="70%">'.$row["description"].'</td>  
        </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
// delete
if(isset($_POST["del"]))
{
 $output = '';
 $query = "SELECT * FROM medicines WHERE id = '".$_POST["del"]."'";
 $result = mysqli_query($con, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
     <tr>  
            <p style="text-align:center;"><b>Are You Sure ?!</b></p>
            <input type="hidden" name="id" id="id" value="'.$row['id'].'"/> 
        </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
// update deleted medicine
if(isset($_POST["updatedel"]))
{
 $output = '';
 $query = "SELECT * FROM medicines WHERE id = '".$_POST["updatedel"]."'";
 $result = mysqli_query($con, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
     <tr>  
     <input type="hidden" name="id" id="id" value="'.$row['id'].'"/> 
     <label for="recipient-name" class="col-form-label">Type:</label>
     <select class="form-select" aria-label="Default select example" name="type" id="type"   required>
         <option selected style="display: none;" value="'.$row['is_deleted'].'">'.$row['is_deleted'].'</option>
         <option value="Available">Available</option>
         <option value="Not Available">Not Available</option>
     </select>
        </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
//update  team
if(isset($_POST["updateteam"]))
{
 $output = '';

 $query = "SELECT * FROM team WHERE id = '".$_POST["updateteam"]."'";
 $result = mysqli_query($con, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
           $ciphering = "AES-128-CTR";
           $options   = 0;
           $decryption_iv = '1234567891011121';
           $decryption_key = "W3docs";
           while ($row = $result->fetch_assoc()) {

               $decryption = openssl_decrypt($row['password'], $ciphering, $decryption_key, $options, $decryption_iv);
    
     $output .= '
 
     <input type="hidden" class="form-control" id="id" name="id" value="'.$row['id'].'" required>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="'.$row['name'].'" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="'.$row['email'].'" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Password</label>
                            <input type="text" class="form-control" id="password" name="password" value="'.$decryption.'" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Type:</label>
                            <select class="form-select" aria-label="Default select example" name="type" id="type"   required>
                                <option selected style="display: none;" value="'.$row['type'].'">'.$row['type'].'</option>
                                <option value="Admin">Admin</option>
                                <option value="Staff">Staff</option>
                            </select>
                        </div>
                       
                  
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
// delete team
if(isset($_POST["deluser"]))
{
 $output = '';
 $query = "SELECT * FROM team WHERE id = '".$_POST["deluser"]."'";
 $result = mysqli_query($con, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
     <tr>  
            <p style="text-align:center;"><b>Are You Sure ?!</b></p>
            <input type="hidden" name="id" id="id" value="'.$row['id'].'"/> 
        </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
// update deleted user
if(isset($_POST["updatedeluser"]))
{
 $output = '';
 $query = "SELECT * FROM team WHERE id = '".$_POST["updatedeluser"]."'";
 $result = mysqli_query($con, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
     <tr>  
     <input type="hidden" name="id" id="id" value="'.$row['id'].'"/> 
     <label for="recipient-name" class="col-form-label">Type:</label>
     <select class="form-select" aria-label="Default select example" name="type" id="type"   required>
         <option selected style="display: none;" value="'.$row['is_deleted'].'">'.$row['is_deleted'].'</option>
         <option value="Available">Available</option>
         <option value="Not Available">Not Available</option>
     </select>
        </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
// update validation admin
if(isset($_POST["updatedeli"]))
{
 $output = '';
 $query = "SELECT * FROM medicines_order WHERE id = '".$_POST["updatedeli"]."'";
 $result = mysqli_query($con, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
     <tr>  
     <input type="hidden" name="id" id="id" value="'.$row['id'].'"/> 
     <input type="hidden" name="email" id="email" value="'.$row['id_user'].'"/> 
     <label for="recipient-name" class="col-form-label">Type:</label>
     <select class="form-select" aria-label="Default select example" name="type" id="type"   required>
         <option selected style="display: none;" value="'.$row['valid'].'">'.$row['valid'].'</option>
         <option value="Yes">Yes</option>
         <option value="No">No</option>
     </select>
        </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>
