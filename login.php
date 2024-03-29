<?php
session_start(); 
if (isset($_SESSION['id'])) {
  header('location: home.php'); 
}
?>
<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from mobileui.store/preview/osahanbus/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 07:30:12 GMT -->
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" type="image/png" href="img/logo.png">
      <title>Namma Vandi Enga</title>
      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Icofont Icon-->
      <link href="vendor/icons/icofont.min.css" rel="stylesheet" type="text/css">
      <!-- Slick Slider -->
      <link rel="stylesheet" type="text/css" href="vendor/slick/slick.min.css"/>
      <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.min.css"/>
      <!-- Custom styles for this template -->
      <link href="css/custom.css" rel="stylesheet">
      <!-- Sidebar CSS -->
      <link href="vendor/sidebar/demo.css" rel="stylesheet">
      <!-- jquery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <!-- SweetAlert2 -->
      <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
      <!-- Toastr -->
      <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
   </head>
   <body>
      <!-- sign up -->
      <div class="osahan-signup">
         <div class="osahan-header-nav shadow-sm p-3 d-flex align-items-center bg-primary">
            <h5 class="font-weight-normal mb-0 text-white">
               <a class="text-primary mr-3" href="get-started.html"><i class="icofont-rounded-left"></i></a>
               Sign in to your account
            </h5>
         </div>
         <div class="px-3 pt-3 pb-5">
            <form id="login-form" method="post">
               <!-- <div class="form-group">
                  <label class="text-muted f-10 mb-1">Mobile Number</label>
                  <input type="number" class="form-control" placeholder="Enter Mobile Number">
               </div> -->
               <span id="error" class="text-danger"></span>
               <div class="form-group">
                  <label class="text-muted f-10 mb-1">Your Email</label>
                  <input id="email" type="email" class="form-control" placeholder="Enter Your Email">
                  <span id="email_error" class="text-danger"></span>
               </div>
               <div class="form-group">
                  <label class="text-muted f-10 mb-1">Password</label>
                  <input id="password" type="password" class="form-control" placeholder="Enter Your Password">
                  <span id="password_error" class="text-danger"></span>
               </div>
               <div class="text-right mb-3">
                  <a href="#" class="text-muted small">Forgot your password?</a>
               </div>
               <button id="submit" type="submit" class="btn btn-primary btn-block osahanbus-btn mb-4 rounded-1">SIGN IN</button>
            </form>
            
            <div class="osahan-signin text-center p-1">
               <p class="m-0">Not a member ? <a href="signup.php" class="text-primary ml-2">Sign Up</a></p>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- slick Slider JS-->
      <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
      <!-- Sidebar JS-->
      <script type="text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/custom.js"></script>
      <!-- SweetAlert2 -->
      <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- validation -->
<script>
$(document).ready(function(){
   var Toast = Swal.mixin({
   toast: true,
   position: 'top-end',
   showConfirmButton: false,
   timer: 3000
   }); 
   $("#submit").click(function(e){
      e.preventDefault();
      email=$("#email").val();
      password=$("#password").val();
      if(email == ""){
         $("#email_error").text("*This field is required");
      }
      else{
         $("#email_error").text("");
      }
      if(password == ""){
         $("#password_error").text("*This field is required");
      }
      else{
         $("#password_error").text("");
      }
      if(email != "" && password != ""){
         $.ajax({
            type: "post",
            url: "api/login_api.php",
            data: {"email":email,"password":password},
            success:function(result){
               result = JSON.parse(result);
              if(result.email_error != ""){
                $("#email_error").text(result.email_error);
              }
              if(result.password_error != ""){
                $("#password_error").text(result.password_error);
              }
              if(result.success != ""){
                Toast.fire({
                icon: "success",
                title: "Login Successfully"
                })
                setInterval(() => {
                  window.location.href = "home.php";
                }, 1000);
              }
              if(result.failure != ""){
                $("#error").text(result.failure);
              }
            }
         });
      }
   })
});
</script>
   </body>

<!-- Mirrored from mobileui.store/preview/osahanbus/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 07:30:12 GMT -->
</html>