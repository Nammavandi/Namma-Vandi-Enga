<?php
session_start(); 
if (!isset($_SESSION['id'])) {
  header('location: login.php'); 
}

// From URL to get webpage contents.
$url = "https://bssweb.in/bustrackers/details/bus_list.json";

// Initialize a CURL session.
$ch = curl_init(); 

// Return Page contents.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//grab URL and pass it to the variable.
curl_setopt($ch, CURLOPT_URL, $url);

$result = curl_exec($ch);
$result = json_decode($result,true);
$len=count($result["BUS"]);
$time = (explode("-",$_GET['time'])[0]);
$noon = (explode("-",$_GET['time'])[1]);
$to_noon = $noon;
$to_time = $time +1;
if($to_time >12){
	$to_time= $to_time-12;
}
if($time == "11" && $to_noon == "am"){
	$to_noon="pm";
}
else if($time == "11" && $to_noon == "pm"){
	$to_noon="am";
}
// for($i=0;$i<$len;$i++){
//    if($result["BUS"][$i]["BUS_NAME"] == $_GET['from']){
//       echo $result["BUS_1"][$i]["SI.NO"];
//       echo $result["BUS_1"][$i]["STAGE"];
//       echo $result["BUS_1"][$i]["CROSSING TIME"];
//       echo "<br>";
//    }
// }

//$time_split=(explode(".",$result["BUS"][5]["TIME"]));
//echo ($time_split)[0][0];
// echo $_GET['from'];

?>
<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from mobileui.store/preview/osahanbus/listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 07:30:16 GMT -->
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
</head>
   <body class="bg-light">
      <!-- Listing Page -->
      <div class="osahan-listing">
         <div class="osahan-header-nav shadow-sm p-3 d-flex align-items-center bg-primary">
            <h5 class="font-weight-normal mb-0 text-white">
               <a class="text-primary" href="home.php"><i class="icofont-rounded-left"></i></a>
            </h5>
            <div class="ml-auto d-flex align-items-center">
               <a href="home.html" class="text-white h6 mb-0"><i class="icofont-search-1"></i></a>
               <a href="#" class="mx-4 text-white h6 mb-0" data-toggle="modal" data-target="#filterModal"><i class="icofont-filter"></i></a>
               <a class="toggle osahan-toggle h4 m-0 text-white ml-auto" href="#"><i class="icofont-navigation-menu"></i></a>
            </div>
         </div>
         <div class="osahan-listing p-0 m-0 row border-top">
            <div class="p-2 border-bottom w-100">
               <div class="bg-white border border-success rounded-1 shadow-sm p-2">
                  <div class="row mx-0 px-1">
                     <div class="col-4 p-0">
                        <small class="text-muted mb-1 f-10 pr-1">GOING FROM</small>
                        <p class="small mb-0"> <?php echo $_GET['from'] ?></p>
                     </div>
                     <div class="col-4 p-0">
                        <small class="text-muted mb-1 f-10 pr-1">GOING TO</small>
                        <p class="small mb-0"> <?php echo $_GET['to'] ?></p>
                     </div>
					 <div class="col-4 p-0">
                        <small class="text-muted mb-1 f-10 pr-1">TIMING</small>
                        <p class="small mb-0"> <?php echo $time." ".$noon." to ".$to_time." ".$to_noon; ?></p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- List Item -->
            <?php for($i=0;$i<$len;$i++){ 
					$time_split=(explode(".",$result["BUS"][$i]["TIME"]));
				if($time_split[1][2] == 'a'){
				   $bus_noon="am";
			   	   }
				   else{
					   $bus_noon="pm";
				   } 
               if($result["BUS"][$i]["FROM"] == $_GET['from'] && $result["BUS"][$i]["TO"] == $_GET['to'] && $time <= $time_split[0] && $to_time >= $time_split[0] && $noon==$bus_noon){?>
			 
            <a href="bus-details.php?id=<?php echo $i+1; ?>" class="text-dark col-6 px-0">
               <div class="list_item_gird m-0 bg-white shadow-sm listing-item border-bottom border-right">
                  <div class="px-3 pt-3 tic-div">
                     <div class="list-item-img">
                        <img src="img/listing/item1.png" class="img-fluid">
                     </div>
                     <p class="mb-0 l-hght-10">BUS <?php echo $i+1; ?></p>
                     <span class="text-danger small"><?php echo $result["BUS"][$i]["FROM"]." to ". $result["BUS"][$i]["TO"]; ?></span>
                     <div class="start-rating small">
                        <i class="icofont-star text-danger"></i>
                        <i class="icofont-star text-danger"></i>
                        <i class="icofont-star text-danger"></i>
                        <i class="icofont-star text-danger"></i>
                        <i class="icofont-star text-muted"></i>
                        <span class="text-dark">4.0</span>
                     </div>
                  </div>
                  <div class="p-3 d-flex">
                     <div class="bus_details w-100">
                        <div class="d-flex">
                           <p><i class="icofont-wind mr-2 text-danger"></i><span class="small"> Non - AC</span></p>
                           <p class="small ml-auto"><i class="icofont-bus mr-2 text-danger"></i>2/1</p>
                        </div>
                        <div class="d-flex l-hght-10">
                           <span class="icofont-clock-time small mr-2 text-danger"></span>
                           <div>
                              <small class="text-muted mb-2 d-block">Journey Start</small>
                              <p class="small"><?php echo $result["BUS"][$i]["TIME"]; ?></p>
                           </div>
                        </div>
                        <div class="d-flex l-hght-10">
                           <span class="icofont-google-map small mr-2 text-danger"></span>
                           <div>
                              <small class="text-muted mb-2 d-block">From - To</small>
                              <p class="small mb-1"><?php echo $result["BUS"][$i]["FROM"]." to ". $result["BUS"][$i]["TO"]; ?></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </a>
            <?php }} ?>
         </div>
      </div>
	   <!-- sidebar -->
      <nav id="main-nav">
         <ul class="second-nav">
            <li>
               <a href="#" class="bg-primary sidebar-user d-flex align-items-center py-4 px-3 border-0 mb-0">
                  <img src="img/user1.jpg" class="img-fluid rounded-pill mr-3">
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
      <!-- Sidebar JS-->
      <script type="text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/custom.js"></script>
   </body>
   
<!-- Mirrored from mobileui.store/preview/osahanbus/listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 07:30:17 GMT -->
</html>