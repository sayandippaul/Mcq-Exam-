<?php 
session_start();
ob_start();
// echo $_SESSION['otp']; 
?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>demo test</title>
  </head>
  <body style="background-image: url('back.img');background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 800px;">
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: rgb(142, 226, 226);">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Test</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" >PCM-1</a>
              </li>
              <!-- <li class="nav-item">
                 <a class="nav-link" href="#">Link</a> 
              </li> -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Rules And Regulation
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#"><strong> correct answer:</strong> +4</a></li>
                  <li><a class="dropdown-item" href="#"><strong>wrong answer:</strong>-1</a></li>
                  <li><a class="dropdown-item" href="#"><strong>no answer:</strong>0</a></li>
                  <li><a class="dropdown-item" href="#"><strong>total marks:</strong>300</a></li>
                  <li><a class="dropdown-item" href="#"><strong>red:</strong>seen but not answered</a></li>
                  <li><a class="dropdown-item" href="#"><strong>green:</strong>answered</a></li>
                  <li><a class="dropdown-item" href="#"><strong>white:</strong>not seen</a></li>
                  <li><a class="dropdown-item" href="#"><strong>maths:</strong>25 questions</a></li>
                  <li><a class="dropdown-item" href="#"><strong>physics:</strong>25 questions</a></li>
                  <li><a class="dropdown-item" href="#"><strong>chemistry:</strong>25 questions</a></li>







                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#"><strong> total time:</strong>3 hours</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  syllabus
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#"> <strong>maths:</strong> ap,gp,quadratic equation,trigonometry compound angle</a></li>
                  <li><a class="dropdown-item" href="#"> <strong>physics:</strong> unit and measurement,error,vector,motion,force</a></li>
                  <li><a class="dropdown-item" href="#"> <strong>chemistry:</strong>redox reaction,mole concept,organic-nomenclature</a></li>







                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">enjoy baby</a></li>
                </ul>
              </li>
              
              <!-- <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li> -->
            </ul>
            <form class="d-flex">
              <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
              <button  style="background-color: #66ff99;" type="button">75 questions, 3 hours</button>
            </form>
          </div>
        </div>
      </nav>
      <div style="background: none;color: azure;" class="card">
        <div class="card-header">
          <strong>Hey user.</strong> 
        </div>
        <div class="card-body">
          <h5 class="card-title">follow the instructions.</h5>
         <strong> <p class="card-text">1)At First Read the rules and regulation and read the syllabus preperly.</p>
          <p class="card-text">2)a timer will automatically run at the corner of screen.after the time test will be auto submitted.</p>
          <p class="card-text">3)don't reload the screen.</p></strong>


          <button type="button"style="margin-top:30px" id="reg" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Register for exams
          </button>
        
        </div>
      </div>
<!-- Button trigger modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">register yourself</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         
        
        <form role="form" method="post" class="row g-3" >

            <div class="col-md-6">
              <label for="inputEmail4"  class="form-label">Name</label>
              <input type="text"name="user " id="name" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" name="password" class="form-label">Password</label>
              <input type="text" class="form-control" id="password" id="inputPassword4">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">choose combination</label>
              <select id="inputState" id="texam" class="form-select">
                <option id="txam1" selected>subject combination</option>
                <option>PCM</option>
                <option>PCMB</option>
                <option>PCB</option>
                <option>PM</option>
                <option>PHYSICS</option>
                <option>MATH</option>
                <option>CHEMISTRY</option>



              </select>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Phone Number</label>
                <input type="text" name="phone" id="phone" class="form-control" id="inputPassword4">
              </div>
              <label for="">enter your image</label>
              <div class="input-group mb-3">
                <!-- <input type="file" class="form-control" id="inputGroupFile02"> -->
                <label class="input-group-text" id="inputGroupFile02">Upload</label>
              </div>
              
            <div class="col-12">
              <button  id="send" name="send" onclick="event.preventDefault();sendotp()" class="btn btn-primary">Send otp</button>
      <!-- <input type="submit" value="Sign in" id="but" name="submit" class="btn btn-primary"/> -->

            </div>
            <hr>
            <div id="show" style="display: none;" class="col-md-6">
                <label for="inputPassword4" class="form-label">enter 6 digit otp</label>
                <input id="uotp" type="text"maxlength="6" class="form-control" id="inputPassword4">
              </div>
            
      
          
    <div class="modal-footer">
      <!-- <button >verify</button> -->
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      
      <!-- <button  name="submit1"   class="btn btn-primary" >Register</button> -->
      <input type="submit" onclick="event.preventDefault();ver()" id="but" name="submit" value="Verify" class="btn btn-primary"/>
        
      
    </div>
    <div style="visibility:hidden">
      ghndslkxml;a vfwc dxsjnhbgtvrfcwedqxwshbgtxds
      
    </div>
  
  </form>
<input type="hidden" id="hid" value="<?php echo $_SESSION['otp']; ?>">

       
      </div>
    </div>
  </div>
  
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> 
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> 
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
  </body>
  <script>
      document.getElementById("reg").click();
       
          var a=document.getElementById("show");
          // document.getElementById("but").value="register";
          document.getElementById("name").disabled= true;
                         document.getElementById("phone").disabled= true;
                         document.getElementById("password").disabled=true;
                         var name= localStorage.getItem("name1");
                         var phone= localStorage.getItem("phone");
                         var password= localStorage.getItem("password");
                         var texam= localStorage.getItem("texam");
                         var imagename= localStorage.getItem("imagename");




        //   a.style.display="none";
        document.getElementById("name").value=name;
        document.getElementById("phone").value=phone
        document.getElementById("password").value=password;
        document.getElementById("txam1").innerHTML=texam;
        // alert(imagename);
        document.getElementById("inputGroupFile02").innerHTML=imagename;


    document.getElementById("send").disabled="true";
    document.getElementById("send").innerHTML="Otp sent";

        a.style.display="block";
      function send1(){
        //   a.style.visibility="visible";
        //   a.disabled="true";
         

      }
      
      function sendotp(){
        //alert("Hii");
        }
       
      </script>
        <?php

 
 
//  session_start();
 $nrmlString =  $_SESSION['otp'];
 
?>
<script type="text/javascript">
//  var cotp = ' echo $nrmlString';
var cotp=document.getElementById("hid").value;
// alert(cotp);
// console.log(cotp);
// var cotp=window.localStorage.getItem("cotp");
        //  localStorage.setItem("c2otp",cotp);

// var cotp=
 function ver(){
     var uotp=document.getElementById("uotp").value;
if(uotp==cotp){
    alert("Registration Successful.Get Ready For Exam.");
    window.location.assign("https://sandyexam.000webhostapp.com/mainpage.php")
    
}
else{
    alert("wrong otp.pls enter correct otp.")
}
     
 }
</script>

</html>