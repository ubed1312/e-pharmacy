<?php
include_once('db.php');
// add medicine
if(isset($_POST['addmedicine']))  
{
$name = addslashes($_POST['name']);
$icode = $_POST['icode'];
$stock = $_POST['stock'];
$price = $_POST['price'];
$edate = $_POST['edate'];
$grams = $_POST['grams'];
$type = $_POST['type'];
$description = addslashes($_POST['description']);
$file = $_FILES['file'];
$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];


    $fileExt = explode( '.', $fileName);
     $fileActualExt = strtolower(end($fileExt));


$allowed = array('png', 'jpg', 'jpeg');

//Tu fais les vérifications nécéssaires
if(in_array($fileActualExt, $allowed))
//Si l'extension n'est pas dans le tableau
{
if ($fileError === 0) {
 
 if ($fileSize < 5000000) {


   $fileNameNew = uniqid('', true).".".$fileActualExt;
   $fileDestination = '../image/'.$fileNameNew;
   move_uploaded_file($fileTmpName , $fileDestination);



      
       $fileDestination1 = 'image/'.$fileNameNew;


      $sql1 = "INSERT into medicines (name,description,stock,price,image,type,expiry_date,item_code,grams) 
      value('$name','$description','$stock','$price','$fileDestination1','$type','$edate','$icode','$grams')";
      $result1 =$con->query($sql1);

    echo  '


<script src="../assets/libs/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
       <script type="text/javascript">   

                $(document).ready(function(){

                 
                  
                  swal({
                    icon: "success",
                    title: "Bien .",
                    text: "Medicine added",
                  })
                });
              </script>
';

    echo "<meta http-equiv=\"refresh\" content=\"1;URL=../medicine-list.php \">";

 } else {
 
  echo  '


  <script src="../assets/libs/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script type="text/javascript">   
  
                  $(document).ready(function(){
  
                   
                    
                    swal({
                      icon: "erreur",
                      title: "Ouups ..",
                      text: "Grande Taille Image",
                    })
                  });
                </script>
  ';

 }
} else {


  echo  '


  <script src="../assets/libs/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script type="text/javascript">   
  
                  $(document).ready(function(){
  
                   
                    
                    swal({
                      icon: "erreur",
                      title: "Ouups ..",
                      text: "Erreur de l upload Image",
                    })
                  });
                </script>
  ';
}

} else {


  echo  '


  <script src="../assets/libs/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script type="text/javascript">   
  
                  $(document).ready(function(){
  
                   
                    
                    swal({
                      icon: "error",
                      title: "Ouups ..",
                      text: "Vous ne pouvez pas uploader ce type",
                    })
                  });
                </script>
  ';
}

}

// update medicine

if(isset($_POST['updatemedicine']))  
{
$id = $_POST['id'];
$name = addslashes($_POST['name']);
$icode = $_POST['icode'];
$stock = $_POST['stock'];
$price = $_POST['price'];
$edate = $_POST['edate'];
$grams = $_POST['grams'];
$type = $_POST['type'];
$description = addslashes($_POST['description']);

$sql2 = "UPDATE medicines set name='$name' , item_code='$icode', stock='$stock', price='$price', expiry_date='$edate', grams='$grams' , type='$type' , description='$description' where id=$id ";
$result2 =$con->query($sql2);

    echo  '


<script src="../assets/libs/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
       <script type="text/javascript">   

                $(document).ready(function(){

                 
                  
                  swal({
                    icon: "success",
                    title: "Good .",
                    text: "Medicine updated",
                  })
                });
              </script>
';

    echo "<meta http-equiv=\"refresh\" content=\"1;URL=../medicine-list.php \">";






} else {
    echo  '


    <script src="../assets/libs/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
           <script type="text/javascript">   
    
                    $(document).ready(function(){
    
                     
                      
                      swal({
                        icon: "error",
                        title: "Error .",
                        text: "Error",
                      })
                    });
                  </script>
    ';
    
        echo "<meta http-equiv=\"refresh\" content=\"1;URL=../medicine-list.php \">";

}
