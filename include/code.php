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
session_start();
include('log.php');
if(isset($_POST['addtocart']))  
{
$qty = $_POST['qty'];
$idm = $_POST['idm'];
$user = $_SESSION['Email2'];
$date=date("Y/m/d h:i:s");



$select ="SELECT * from medicines_order where id_m='$idm' and id_user='$user' and valid='non'";
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
