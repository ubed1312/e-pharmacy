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
                            <input type="text" class="form-control" id="price" name="price" value="'.$row['price'].'" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Expiry Date:</label>
                            <input type="date" class="form-control" id="edate" name="edate" min="'.$datet.'" value="'.$row['expiry_date'].'"   required>
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
?>
