<?php 
    echo("otp send successfully");
    
session_start();
ob_start();
//  include('key.php');

 $name=$_POST['name'];
$number='+91'.$_POST['number'];
$sid_key="ACfac4e2d7677e7651d0f22f4bfee206da"; // your sid key
$token_key="e3828616a01d6f83eaaacf90082bf004"; //your token key
 //your verified no with country code
//  echo "<script> hello(); </script>";
//  echo $name;
$num=rand(100000,999999);
$_SESSION['otp']=$num;
$msg="Hey ".$name." your otp is ".$num;
require_once 'Twilio/autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = $sid_key;
$token  = $token_key;
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create($number, // to 
                           array( 
                               "from" => "+19897472646",       
                               "body" => $msg,
                           ) 
                  ); 
 echo $_SESSION['otp'];

//  header("Location:verify.php");
// preventDefault();

?> 
<!-- <div name="otp" id="otp">um; ?></div>
<script>
    function hello(){
    var otp = document.getElementById("otp").innerHTML;
    alert(otp);
    // localStorage.setItem("otpnew",otp);
    sessionStorage.setItem("otpnew", otp);
    

    }
    // setInterval(hello(), 10);
</script> -->