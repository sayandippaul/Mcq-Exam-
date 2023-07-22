<?php
$studentname=$_POST["username"];
$password=$_POST["password"];
$hostname="localhost";
$user="root";
$userpassword="";
$dbname="examstudent";
// include " firstpage.php";
$conn=mysqli_connect($hostname,$user,$userpassword,$dbname);
if($conn){
  $sql="insert into studentdetails values ('$studentname','$password')";
  $resp=mysqli_query($conn,$sql);
  if($resp==1){
    // alert("hello success");
    echo "s";
  }
  else{
    // alert("failed");
    echo "f";
  }
}
?>