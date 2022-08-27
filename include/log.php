<?php 
include('db.php');
// login user
if(isset($_POST['signin']))  
{
  session_start();   
$email = $_POST['email'];
$password = $_POST['password'];

$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options   = 0;
$encryption_iv = '1234567891011121';
$encryption_key = "W3docs";
@$encryption = openssl_encrypt($password, $ciphering, $encryption_key, $options, $encryption_iv);

$select ="SELECT * from users where username='$email' and password='$encryption'";
$rstselect = $con->query($select);

if($rstselect->num_rows > 0)
{
  $_SESSION['Email1']=$rstselect;

        

  $_SESSION['Email2']=$email;
  
      echo "<meta http-equiv=\"refresh\" content=\"0;URL=../cart.php \">";

}else{



echo  '


<script src="../Admin/assets/libs/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
       <script type="text/javascript">   

                $(document).ready(function(){

                 
                  
                  swal({
                    icon: "error",
                    title: "Error .",
                    text: "Again",
                  })
                });
              </script>
';

    echo "<meta http-equiv=\"refresh\" content=\"1;URL=../login.php \">";






 }
}

?>