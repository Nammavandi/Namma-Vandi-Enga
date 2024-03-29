<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from mobileui.store/preview/osahanbus/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 07:30:12 GMT -->
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
               Create an account
            </h5>
         </div>
         <div class="p-3">
            <form id="register-form" method="post">
               <div class="form-group">
                  <label class="text-muted f-10 mb-1">Your Name</label>
                  <input id="name" name="username" type="text" class="form-control" placeholder="Enter Your Name">
                  <span id="name_error" class="text-danger"></span>
               </div>
               <div class="form-group">
                  <label class="text-muted f-10 mb-1">Your Email</label>
                  <input id="email" name="email" type="email" class="form-control" placeholder="Enter Your Email">
                  <span id="email_error" class="text-danger"></span>
               </div>
               <div class="form-group">
                  <label class="text-muted f-10 mb-1">Password</label>
                  <input id="password" name="password" type="password" class="form-control" placeholder="Enter Your Password">
                  <span id="password_error" class="text-danger"></span>
               </div>
               <div class="form-group">
                  <label class="text-muted f-10 mb-1">Confirm Password</label>
                  <input id="cpassword" name="cpassword" type="password" class="form-control" placeholder="Enter Your Password">
                  <span id="cpassword_error" class="text-danger"></span>
               </div>
               <button type="submit" id="submit" class="btn btn-primary btn-block osahanbus-btn mb-3 rounded-1 mt-4">CREATE AN ACCOUNT</button>
               <p class="text-muted text-center small">By signing up you agree to our Privacy Policy and Terms.</p>
            </form>
         </div>
      </div>
      <!-- sidebar -->
      <nav id="main-nav">
         <ul class="second-nav">
            <li>
               <a href="#" class="bg-primary sidebar-user d-flex align-items-center py-4 px-3 border-0 mb-0">
                  <img src="img/user1.jpg" class="img-fluid rounded-pill mr-3">
                  <div class="text-white">
                     <h6 class="mb-0">Vignesh</h6>
                     <small>+91 97917-67890</small><br>
                     <span class="f-10 text-white-50">Version 1.32</span>    
                  </div>
               </a>
            </li>
            <li>
               <a href="index.html"><i class="icofont-page mr-2"></i> Splash</a>
            </li>
            <li>
               <a href="landing.html"><i class="icofont-stylish-right mr-2"></i> Landing</a>
            </li>
            <li>
               <a href="get-started.html"><i class="icofont-ui-play mr-2"></i> Get Started</a>
            </li>
            <li>
               <a href="#"><i class="icofont-key mr-2"></i> Authentication</a>
               <ul>
                  <li><a href="signin.html">Sign In</a></li>
                  <li><a href="signup.html">Sign Up</a></li>
                  <li><a href="change-password.html">Change Password</a></li>
                  <li><a href="verification.html">Verification</a></li>
               </ul>
            </li>
            <li><a href="home.php"><i class="icofont-ui-home mr-2"></i> Homepage</a></li>
               <li>
               <a href="#"><i class="icofont-user-alt-3 mr-2"></i> Profile Pages</a>
               <ul>
                  <li><a href="profile.html"> Profile</a></li>
               </li>
         </ul>
         <ul class="bottom-nav">
            <li class="email">
               <a class="text-primary nav-item text-center" href="home.php" tabindex="0" role="menuitem">
                  <p class="h5 m-0"><i class="icofont-ui-home text-primary"></i></p>
                  Home
               </a>
            </li>
            <li class="github">
               <a href="gift-card.html" class="nav-item text-center" tabindex="0" role="menuitem">
                  <p class="h5 m-0"><i class="icofont-sale-discount"></i></p>
                  Offer
               </a>
            </li>
            <li class="ko-fi">
               <a href="support.html" class="nav-item text-center" tabindex="0" role="menuitem">
                  <p class="h5 m-0"><i class="icofont-support-faq"></i></p>
                  Help
               </a>
            </li>
         </ul>
      </nav>
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
   </body>
<!-- validation  -->
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
      name=$("#name").val();
      email=$("#email").val();
      password=$("#password").val();
      cpassword=$("#cpassword").val();
      if(name == ""){
         $("#name_error").text("*This field is required");
      }
      else{
         $("#name_error").text("");
      }
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
      if(cpassword == ""){
         $("#cpassword_error").text("*This field is required");
      }
      else{
         if(password != cpassword){
            $("#cpassword_error").text("*Password Mismatch");
         }
         else{
            $("#cpassword_error").text("");
         }
      }
      if(name != "" && email != "" && password != "" && cpassword != "" && password == cpassword){
         var data = $("#register-form").serialize();
         $.ajax({
            type: "post",
            url: "api/registration_api.php",
            data: data,
            success:function(result){
               result = JSON.parse(result);
              if(result.name_error != ""){
                $("#name_error").text(result.name_error);
              }
              if(result.email_error != ""){
                $("#email_error").text(result.email_error);
              }
              if(result.password_error != ""){
                $("#password_error").text(result.password_error);
              }
              if(result.cpassword_error != ""){
                $("#cpassword_error").text(result.cpassword_error);
              }
              if(result.success != ""){
                Toast.fire({
                icon: "success",
                title: "Registered Successfully"
                })
                $("#username").val("");
                $("#email").val("");
                $("#password").val("");
                $("#cpassword").val("");
                setInterval(() => {
                  window.location.href = "login.php";
                }, 1500);
                
              }
            }
         });
      }
   });
})
</script>
<!-- Mirrored from mobileui.store/preview/osahanbus/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 07:30:12 GMT -->
</html>