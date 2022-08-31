<?php
 include('db.php');
// create account user
if(isset($_POST['register']))  
{
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

// crypt pass
$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options   = 0;
$encryption_iv = '1234567891011121';
$encryption_key = "W3docs";
@$encryption = openssl_encrypt($password, $ciphering, $encryption_key, $options, $encryption_iv);

$select ="SELECT * from users where username='$email'";
$rstselect = $con->query($select);

if ($rstselect->num_rows > 0)
{
  echo  '


  <script src="../Admin/assets/libs/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script type="text/javascript">   
  
                  $(document).ready(function(){
  
                   
                    
                    swal({
                      icon: "error",
                      title: "Error .",
                      text: "Used a different enamel",
                    })
                  });
                </script>
  ';
  
      echo "<meta http-equiv=\"refresh\" content=\"1;URL=../register.php \">";

}else{

$sql = "INSERT into users(first_name,last_name,username,password) values('$firstname','$lastname','$email','$encryption')";
$result =$con->query($sql);

    echo  '


<script src="../Admin/assets/libs/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
       <script type="text/javascript">   

                $(document).ready(function(){

                 
                  
                  swal({
                    icon: "success",
                    title: "Good .",
                    text: "User Added",
                  })
                });
              </script>
';

    echo "<meta http-equiv=\"refresh\" content=\"1;URL=../login.php \">";






 }
}

// pass order
include('db.php');
if(isset($_POST['addtocart']))  
{
$qty = $_POST['qty'];
$idm = $_POST['idm'];
$user = $_POST['user'];
$date=date("Y/m/d h:i:s");



$select ="SELECT * from medicines_order where id_m='$idm' and id_user='$user' and valid='non' and  valid_user='non'";
$rstselect1 = $con->query($select);

if($rstselect1->num_rows >0)
{
  echo  '


  <script src="../Admin/assets/libs/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script type="text/javascript">   
  
                  $(document).ready(function(){
  
                   
                    
                    swal({
                      icon: "error",
                      title: "Error .",
                      text: "Already",
                    })
                  });
                </script>
  ';
  
      echo "<meta http-equiv=\"refresh\" content=\"1;URL=../cart.php \">";

}else{

$sql = "INSERT into medicines_order(id_user,id_m,qty,date_order) values('$user','$idm','$qty','$date')";
$result =$con->query($sql);

    echo  '


<script src="../Admin/assets/libs/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
       <script type="text/javascript">   

                $(document).ready(function(){

                 
                  
                  swal({
                    icon: "success",
                    title: "Good .",
                    text: "Product Added",
                  })
                });
              </script>
';

    echo "<meta http-equiv=\"refresh\" content=\"1;URL=../cart.php \">";


 }
}
// update order
include('db.php');
if(isset($_POST['updateqty']))  
{
$qty = $_POST['qty'];
$idm = $_POST['idm'];
$user = $_POST['user'];
$date=date("Y/m/d h:i:s");



$updateqty ="UPDATE medicines_order set qty='$qty' where id_m='$idm' and id_user='$user' and valid='non'";
$rstselect1 = $con->query($updateqty);

if($rstselect1 >0)
{
  echo  '


  <script src="../Admin/assets/libs/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script type="text/javascript">   
  
                  $(document).ready(function(){
  
                   
                    
                    swal({
                      icon: "success",
                      title: "Good .",
                      text: "Quantity Updated",
                    })
                  });
                </script>
  ';
  
      echo "<meta http-equiv=\"refresh\" content=\"1;URL=../cart.php \">";

}else{


    echo  '


    <script src="../Admin/assets/libs/jquery/jquery.min.js"></script>
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
    
        echo "<meta http-equiv=\"refresh\" content=\"1;URL=../cart.php \">";


 }
}
// update order
include('db.php');
if(isset($_POST['deletep']))  
{
$id = $_POST['idp'];
$user = $_POST['user'];
$date=date("Y/m/d h:i:s");



$updateqty ="UPDATE medicines_order set is_deleted=1 where id_user='$user' and id='$id'";
$rstselect1 = $con->query($updateqty);

if($rstselect1 >0)
{
  echo  '


  <script src="../Admin/assets/libs/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script type="text/javascript">   
  
                  $(document).ready(function(){
  
                   
                    
                    swal({
                      icon: "success",
                      title: "Good .",
                      text: "Product Deleted",
                    })
                  });
                </script>
  ';
  
      echo "<meta http-equiv=\"refresh\" content=\"1;URL=../cart.php \">";

}else{


    echo  '


    <script src="../Admin/assets/libs/jquery/jquery.min.js"></script>
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
    
        echo "<meta http-equiv=\"refresh\" content=\"1;URL=../cart.php \">";


 }
}
// update order
include('db.php');
// update image medicine
if(isset($_POST['cod']))  
{
  $user= $_POST['email'];
  $phone= $_POST['phone'];
  $address= $_POST['address'];
  @$file = $_FILES['file'];
  @$fileName = $_FILES['file']['name'];
  @$fileTmpName = $_FILES['file']['tmp_name'];
  @$fileSize = $_FILES['file']['size'];
  @$fileError = $_FILES['file']['error'];
  @$fileType = $_FILES['file']['type'];
  //
  if(isset($file)){
  
      @$fileExt = explode( '.', $fileName);
       @$fileActualExt = strtolower(end($fileExt));
  
  
  @$allowed = array('png', 'jpg', 'jpeg');
  
  //Tu fais les vérifications nécéssaires
  if(in_array($fileActualExt, $allowed))
  //Si l'extension n'est pas dans le tableau
  {
  if ($fileError === 0) {
   
   if ($fileSize < 5000000) {
  
  
     $fileNameNew = uniqid('', true).".".$fileActualExt;
     $fileDestination = '../Admin/cp/'.$fileNameNew;
     move_uploaded_file($fileTmpName , $fileDestination);
  
  
  
        
         $fileDestination1 = 'cp/'.$fileNameNew;
  
        
        $sql1 = "UPDATE medicines_order set prescription ='$fileDestination1' , valid_user='oui' where id_user='$user' and valid_user='non' and is_deleted='0' ";
        $result1 =$con->query($sql1);

        $sql22 = "UPDATE users set address='$address' , phone='$phone' where username='$user'  ";
        $result22 =$con->query($sql22);
  
      echo  '
  
  
  <script src="../Admin/assets/libs/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script type="text/javascript">   
  
                  $(document).ready(function(){
  
                   
                    
                    swal({
                      icon: "success",
                      title: "Bien .",
                      text: "Order Valid",
                    })
                  });
                </script>
  ';
  
      echo "<meta http-equiv=\"refresh\" content=\"1;URL=../cart.php \">";
  
   } else {
   
    echo  '
  
  
    <script src="../Admin/assets/libs/jquery/jquery.min.js"></script>
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
    echo "<meta http-equiv=\"refresh\" content=\"1;URL=../cart.php \">";
  
   }
  } else {
  
  
    echo  '
  
  
    <script src="../Admin/assets/libs/jquery/jquery.min.js"></script>
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
    echo "<meta http-equiv=\"refresh\" content=\"1;URL=../cart.php \">";
  }
  
  } else {
  
  
    echo  '
  
  
    <script src="../Admin/assets/libs/jquery/jquery.min.js"></script>
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
    echo "<meta http-equiv=\"refresh\" content=\"1;URL=../cart.php \">";
  }} else{
    $sql1 = "UPDATE medicines_order set  valid_user='oui' where id_user='$user' and valid_user='non' and is_deleted='0' ";
        $result1 =$con->query($sql1);

        $sql22 = "UPDATE users set address='$address' , phone='$phone' where username='$user'  ";
        $result22 =$con->query($sql22);
  
      echo  '
  
  
  <script src="../Admin/assets/libs/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script type="text/javascript">   
  
                  $(document).ready(function(){
  
                   
                    
                    swal({
                      icon: "success",
                      title: "Bien .",
                      text: "Order Valid",
                    })
                  });
                </script>
  ';
  
      echo "<meta http-equiv=\"refresh\" content=\"1;URL=../cart.php \">";
  }
}