<?php
session_start(); 
if (!isset($_SESSION['id'])) {
  header('location: login.php'); 
}
?>


<!DOCTYPE html>
<html lang="en">
   

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
      <!-- Select Tool -->
      <link href="vendor/select-tool/dist/css/select2.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/custom.css" rel="stylesheet">
      <!-- Sidebar CSS -->
      <link href="vendor/sidebar/demo.css" rel="stylesheet">
      <!-- jquery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <!-- Latest compiled and minified CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

      <!-- Latest compiled JavaScript -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   </head>
   <body class="bg-light">
      <!-- verification -->
      <div class="osahan-verification padding-bt">
         <div class="p-3 shadow bg-primary primary-nav osahan-home-header">
            <div class="font-weight-normal mb-0 d-flex align-items-center">
               <img src="img/logo.png" class="img-fluid osahan-nav-logo">
               <div class="ml-auto d-flex align-items-center">
                  <a href="profile.html" class="mr-3"></a>
                  <a class="toggle osahan-toggle h4 m-0 text-white ml-auto" href="#"><i class="icofont-navigation-menu"></i></a>
               </div>
            </div>
         </div>
         <div class="bg-primary px-3 pb-3">
            <div class="bg-white rounded-1 p-3">
               <!-- <form action="https://mobileui.store/preview/osahanbus/listing.html"> -->
               <form action="#">
                  <div class="form-group border-bottom pb-2">
                     <label for="exampleFormControlSelect1" class="mb-2"><span class="icofont-search-map text-primary"></span> From</label>
                     <span id="from_error" class="text-danger"></span>
                     <br>
                     <select class="js-example-basic-single form-control" name="state" id="from">
                        <option value="">Select the Starting point</option>
                        <option value="Thiruvarur">Thiruvarur</option>
                        <option value="Thiruthuraipoondi">Thiruthuraipoondi</option>
                        <option value="Nagapattinam">Nagapattinam</option>
                        <option value="Chennai">Chennai</option>
                        <option value="Coimbatore">Coimbatore</option>
                        <option value="Cuddalore">Cuddalore</option>
                        <option value="Dindigul">Dindigul</option>
                        <option value="Erode">Erode</option>
                        <option value="Kallakurichi">Kallakurichi</option>
                        <option value="Kancheepuram">Kancheepuram</option>
                        <option value="Karur">Karur</option>
                        <option value="Krishnagiri">Krishnagiri</option>
                        <option value="Madurai">Madurai</option>
                        <option value="Mayiladuthurai">Mayiladuthurai</option>
                        <option value="Nagapattinam">Nagapattinam</option>
                        <option value="Mannargudi">Mannargudi</option>
                        <option value="Kanniyakumari">Kanniyakumari</option>
                        <option value="koyambedu">koyambedu</option>
                        <option value="Kumbakonam">Kumbakonam</option>
                        <option value="Kudavasal">Kudavasal</option>
                        <option value="Nagercoil">Nagercoil</option>
                        <option value="Namakkal">Namakkal</option>
                        <option value="Perambalur">Perambalur</option>
                        <option value="Pudukottai">Pudukottai</option>
                        <option value="Ramanathapuram">Ramanathapuram</option>
                        <option value="Ranipet">Ranipet</option>
                        <option value="Salem">Salem</option>
                        <option value="Coimbatore">Coimbatore</option>
                        <option value="Sivagangai">Sivagangai</option>
                        <option value="Tenkasi">Tenkasi</option>
                        <option value="Thanjavur">Thanjavur</option>
                        <option value="Theni">Theni</option>
                        <option value="Thiruvallur">Thiruvallur</option>
                        <option value="Thiruvarur">Thiruvarur</option>
                        <option value="Thoothukudi">Thoothukudi</option>
                        <option value="Trichy">Trichy</option>
                        <option value="Thirunelveli">Thirunelveli</option>
                        <option value="Tirupathur">Tirupathur</option>
                        <option value="Tiruppur">Tiruppur</option>
                        <option value="Thiruthuraipoondi">Thiruthuraipoondi</option>
                        <option value="Tiruvannamalai">Tiruvannamalai</option>
                        <option value="The Nilgiris">The Nilgiris</option>
                        <option value="Vellore">Vellore</option>
                        <option value="Velankanni">Velankanni</option>
                        <option value="Viluppuram">Viluppuram</option>
                        <option value="Virudhunagar">Virudhunagar</option>
                     </select>
                  </div>
                  <div class="form-group border-bottom pb-2">
                     <label for="exampleFormControlSelect1" class="mb-2"><span class="icofont-google-map text-primary"></span> To</label>
                     <span id="to_error" class="text-danger"></span>
                     <br>
                     <select class="js-example-basic-single form-control" name="state" id="to">
                        <option value="">Select the Destination</option>
                        <option value="Thiruvarur">Thiruvarur</option>
                        <option value="Thiruthuraipoondi">Thiruthuraipoondi</option>
                        <option value="Nagapattinam">Nagapattinam</option>
                        <option value="Coimbatore">Coimbatore</option>
                        <option value="Cuddalore">Cuddalore</option>
                        <option value="Dindigul">Dindigul</option>
                        <option value="Erode">Erode</option>
                        <option value="Kallakurichi">Kallakurichi</option>
                        <option value="Kancheepuram">Kancheepuram</option>
                        <option value="Karur">Karur</option>
                        <option value="Krishnagiri">Krishnagiri</option>
                        <option value="Madurai">Madurai</option>
                        <option value="Mayiladuthurai">Mayiladuthurai</option>
                        <option value="Mannargudi">Mannargudi</option>
                        <option value="Nagapattinam">Nagapattinam</option>
                        <option value="Kanniyakumari">Kanniyakumari</option>
                        <option value="koyambedu">koyambedu</option>
                        <option value="Kumbakonam">Kumbakonam</option>
                        <option value="Kudavasal">Kudavasal</option>
                        <option value="Nagercoil">Nagercoil</option>
                        <option value="Namakkal">Namakkal</option>
                        <option value="Perambalur">Perambalur</option>
                        <option value="Pudukottai">Pudukottai</option>
                        <option value="Ramanathapuram">Ramanathapuram</option>
                        <option value="Ranipet">Ranipet</option>
                        <option value="Salem">Salem</option>
                        <option value="Coimbatore">Coimbatore</option>
                        <option value="Sivagangai">Sivagangai</option>
                        <option value="Tenkasi">Tenkasi</option>
                        <option value="Thanjavur">Thanjavur</option>
                        <option value="Theni">Theni</option>
                        <option value="Thiruvallur">Thiruvallur</option>
                        <option value="Thiruvarur">Thiruvarur</option>
                        <option value="Thoothukudi">Thoothukudi</option>
                        <option value="Trichy">Trichy</option>
                        <option value="Thirunelveli">Thirunelveli</option>
                        <option value="Tirupathur">Tirupathur</option>
                        <option value="Tiruppur">Tiruppur</option>
                        <option value="Tiruvannamalai">Tiruvannamalai</option>
                        <option value="Thiruthuraipoondi">Thiruthuraipoondi</option>
                        <option value="The Nilgiris">The Nilgiris</option>
                        <option value="Vellore">Vellore</option>
                        <option value="Velankanni">Velankanni</option>
                        <option value="Viluppuram">Viluppuram</option>
                        <option value="Virudhunagar">Virudhunagar</option>
                     </select>
                  </div>
                  <div class="form-group border-bottom pb-1">
                     <label for="exampleFormControlSelect1" class="mb-2"><span class="icofont-ui-clock text-primary"></span> Time</label>
                     <span id="time_error" class="text-danger"></span>
                     <br>
                     <select class="js-example-basic-single form-control" name="selectOnwardTimeSlab" id="time">
                        <option value="">Select the timing</option>
                        <option value="12-am">12 AM - 01 AM</option>
                        <option value="01-am">01 AM - 02 AM</option>
                        <option value="02-am">02 AM - 03 AM</option>
                        <option value="03-am">03 AM - 04 AM</option>
                        <option value="04-am">04 AM - 05 AM</option>
                        <option value="05-am">05 AM - 06 AM</option>
                        <option value="06-am">06 AM - 07 AM</option>
                        <option value="07-am">07 AM - 08 AM</option>
                        <option value="08-am">08 AM - 09 AM</option>
                        <option value="09-am">09 AM - 1O AM</option>
                        <option value="10-am">10 AM - 11 AM</option>
                        <option value="11-am">11 AM - 12 PM</option>
                        <option value="12-pm">12 PM - 01 PM</option>
                        <option value="01-pm">01 PM - 02 PM</option>
                        <option value="02-pm">02 PM - 03 PM</option>
                        <option value="03-pm">03 PM - 04 PM</option>
                        <option value="04-pm">04 PM - 05 PM</option>
                        <option value="05-pm">05 PM - 06 PM</option>
                        <option value="06-pm">06 PM - 07 PM</option>
                        <option value="07-pm">07 PM - 08 PM</option>
                        <option value="08-pm">08 PM - 09 PM</option>
                        <option value="09-pm">09 PM - 1O PM</option>
                        <option value="10-pm">10 PM - 11 PM</option>
                        <option value="11-pm">11 PM - 12 AM</option>
                        
                     </select>
                  </div>
                  <button id="submit" class="btn btn-success btn-block osahanbus-btn rounded-1">Search</button>
                  <!-- <a href="" class="btn btn-success btn-block osahanbus-btn rounded-1">Search</a>  -->
               </form>
            </div>
         </div>
         <div class="p-3 bg-info">
            <div class="row m-0">
               <div class="col-6 py-1 pr-1 pl-0">
                  <div class="p-3 bg-white shadow-sm rounded-1">
                     <img class="img-fluid" src="img/safe-vehicles.svg" alt="">
                     <p class="mb-0 mt-4 font-weight-bold">Safe and Hygenic<br>Vehicles</p>
                  </div>
               </div>
               <div class="col-6 py-1 pl-1 pr-0">
                  <div class="p-3 bg-white shadow-sm rounded-1">
                     <img class="img-fluid" src="img/customer-support.svg" alt="">
                     <p class="mb-0 mt-4 font-weight-bold">Best Customer<br>Support</p>
                  </div>
               </div>
               <div class="col-6 py-1 pr-1 pl-0">
                  <div class="p-3 bg-white shadow-sm rounded-1">
                     <img class="img-fluid" src="img/live-tracking.svg" alt="">
                     <p class="mb-0 mt-4 font-weight-bold">Live Track your<br>Journey</p>
                  </div>
               </div>
               <div class="col-6 py-1 pl-1 pr-0">
                  <div class="p-3 bg-white shadow-sm rounded-1">
                     <img class="img-fluid" src="img/verified-drivers.svg" alt="">
                     <p class="mb-0 mt-4 font-weight-bold">Verified Drivers<br>and Vehicles</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Footer Fixed -->
      <div class="fixed-bottom p-3">
         <div class="footer-menu row m-0 bg-primary shadow rounded-2">
            <div class="col-3 p-0 text-center">
               <a href="home.html" class="home text-white active">
                  <span class="icofont-ui-home h5"></span>
                  <p class="mb-0 small">Home</p>
               </a>
            </div>
            <div class="col-3 p-0 text-center">
               <a href="my-ticket.html" class="home text-white">
                  <span class="icofont-search-map h5"></span>
                  <p class="mb-0 small">My Search</p>
               </a>
            </div>
            <div class="col-3 p-0 text-center">
               <a href="notification.html" class="home text-white">
                  <span class="icofont-notification h5"></span>
                  <small class="osahan-n">4</small>
                  <p class="mb-0 small">Notice</p>
               </a>
            </div>
            <div class="col-3 p-0 text-center">
               <a href="profile.html" class="home text-white">
                  <span class="icofont-user h5"></span>
                  <p class="mb-0 small">Account</p>
               </a>
            </div>
         </div>
      </div>
      <!-- sidebar -->
      <nav id="main-nav">
         <ul class="second-nav">
            <li>
               <a href="#" class="bg-primary sidebar-user d-flex align-items-center py-4 px-3 border-0 mb-0">
                  <div class="text-white">
                     <h6 class="mb-0"><?php echo $_SESSION['name'];?></h6><br>
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
                  <li><a href="login.php">Sign In</a></li>
                  <li><a href="signup.php">Sign Up</a></li>
               </ul>
            </li>
            <li><a href="home.php"><i class="icofont-ui-home mr-2"></i> Homepage</a></li>
            <li>
               <a href="signout.php"><i class="icofont-sign-out"></i> Signout</a>
            </li>
         <ul class="bottom-nav">
            <li class="email">
               <a class="text-danger nav-item text-center" href="home.php" tabindex="0" role="menuitem">
                  <p class="h5 m-0"><i class="icofont-ui-home text-danger"></i></p>
                  Home
               </a>
            </li>
         </ul>
      </nav>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- slick Slider JS-->
      <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
      <!-- Select Tool -->
      <script src="vendor/select-tool/dist/js/select2.min.js"></script>
      <!-- Sidebar JS-->
      <script type="text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/custom.js"></script>

<!-- validation -->
<script>
   $(document).ready(function(){
      $("#submit").click(function(e){
         e.preventDefault();
         validation();
         
      });
   });
   function validation(){
         from=$("#from").val();
         to=$("#to").val();
         time=$("#time").val();
            if(from == ""){
               $("#from_error").text("*Please select the starting point");
            }
            else{
               $("#from_error").text("");
            }
            if(to == ""){
               $("#to_error").text("*Please select the destination point");
            }
            else{
               $("#to_error").text("");
            }
            if(time == ""){
               $("#time_error").text("*Please select the timing");
            }
            else{
               $("#time_error").text("");
            }
            if(from != "" && to != "" && time != ""){
               window.location.href = "listing.php?from="+from+"&to="+to+"&time="+time ;
            }
            else{
               return false;
            }
   }
</script>
   </body>
   
<!-- Mirrored from mobileui.store/preview/osahanbus/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 07:30:15 GMT -->
</html>