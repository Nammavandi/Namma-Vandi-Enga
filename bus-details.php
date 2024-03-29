<?php
session_start(); 
if (!isset($_SESSION['id'])) {
  header('location: login.php'); 
}

$id= $_GET['id'];
$bus="";
if($id == 1){
   // From URL to get webpage contents.
   $url = "https://bssweb.in/bustrackers/details/bus1.json";
   $bus="BUS_1";
}
else if($id == 2){
   // From URL to get webpage contents.
   $url = "https://bssweb.in/bustrackers/details/bus2.json";
   $bus="BUS_2";
}
else if($id == 3){
   // From URL to get webpage contents.
   $url = "https://bssweb.in/bustrackers/details/bus3.json";
   $bus="BUS_3";
}
else if($id == 4){
   // From URL to get webpage contents.
   $url = "https://bssweb.in/bustrackers/details/bus4.json";
   $bus="BUS_4";
}
else if($id == 5){
   // From URL to get webpage contents.
   $url = "https://bssweb.in/bustrackers/details/bus5.json";
   $bus="BUS_5";
}
else if($id == 6){
   // From URL to get webpage contents.
   $url = "https://bssweb.in/bustrackers/details/bus6.json";
   $bus="BUS_6";
}
else if($id == 7){
   // From URL to get webpage contents.
   $url = "https://bssweb.in/bustrackers/details/bus7.json";
   $bus="BUS_7";
}
else if($id == 8){
   // From URL to get webpage contents.
   $url = "https://bssweb.in/bustrackers/details/bus8.json";
   $bus="BUS_8";
}

   // Initialize a CURL session.
   $ch = curl_init(); 

   // Return Page contents.
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

   //grab URL and pass it to the variable.
   curl_setopt($ch, CURLOPT_URL, $url);

   $result = curl_exec($ch);
   $result = json_decode($result,true);

   $stop_count=count($result[$bus]);

?>

<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from mobileui.store/preview/osahanbus/bus-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 07:30:17 GMT -->
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
      <!-- Bus Details -->
      <div class="Bus-Details padding-bt">
         <div class="osahan-header-nav shadow-sm p-3 d-flex align-items-center bg-primary">
            <h5 class="font-weight-normal mb-0 text-white">
               <a class="text-primary mr-3" href="home.php"><i class="icofont-rounded-left"></i></a>
               Bus Details
            </h5>
            <div class="ml-auto d-flex align-items-center">
               <a class="toggle osahan-toggle h4 m-0 text-white ml-auto" href="#"><i class="icofont-navigation-menu"></i></a>
            </div>
         </div>
         <!-- Details -->
         <div class="list_item m-0 bg-white">
            <div class="px-3 py-3 tic-div border-bottom d-flex">
               <img src="img/listing/item1.png" class="img-fluid border rounded p-1 shape-img mr-3">
               <div class="w-100">
                  <h6 class="my-1 l-hght-18 font-weight-bold">TNSTC</h6>
                  <div class="start-rating f-10">
                     <i class="icofont-star text-primary"></i>
                     <i class="icofont-star text-primary"></i>
                     <i class="icofont-star text-primary"></i>
                     <i class="icofont-star text-primary"></i>
                     <i class="icofont-star text-muted"></i>
                     <span class="text-dark">4.0</span>
                     <div class="d-flex mt-2">
                        <p class="m-0"><i class="icofont-google-map mr-1 text-primary"></i><span class="small"><?php echo $result[$bus][0]["STAGE"]." to ".$result[$bus][$stop_count-1]["STAGE"]; ?></span></p>
                        <p class="small ml-auto mb-0"><i class="icofont-bus mr-1 text-primary"></i> St. $5</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="bg-white p-3">
               <div class="row mx-0 mb-3">
                  <div class="col-6 p-0">
                     <small class="text-muted mb-1 f-10 pr-1">Wifi</small>
                     <p class="small mb-0 l-hght-14"> Not available</p>
                  </div>
                  <div class="col-6 p-0">
                     <small class="text-muted mb-1 f-10 pr-1">Non- AC</small>
                     <p class="small mb-0 l-hght-14"> Ac is not available</p>
                  </div>
               </div>
               <div class="row mx-0 mb-3">
                  <div class="col-6 p-0">
                     <small class="text-muted mb-1 f-10 pr-1">Dinner / Lunch</small>
                     <p class="small mb-0 l-hght-14"> No</p>
                  </div>
                  <div class="col-6 p-0">
                     <small class="text-muted mb-1 f-10 pr-1">Safety Features</small>
                     <p class="small mb-0 l-hght-14"> Sanitized, Masks</p>
                  </div>
               </div>
               <div class="row mx-0">
                  <div class="col-6 p-0">
                     <small class="text-muted mb-1 f-10 pr-1">Essentials</small>
                     <p class="small mb-0 l-hght-14"> Water Pouch</p>
                  </div>
                  <div class="col-6 p-0">
                     <small class="text-muted mb-1 f-10 pr-1">Snacks</small>
                     <p class="small mb-0 l-hght-14">allowed</p>
                  </div>
               </div>
            </div>
         </div>
         <ul class="nav nav-pills mb-0 nav-justified bg-white px-3 py-2 border-top border-bottom" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
               <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="icofont-info-circle"></i> Info</a>
            </li>
            <li class="nav-item" role="presentation">
               <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="icofont-star"></i> Review</a>
            </li>
            <li class="nav-item" role="presentation">
               <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="icofont-map-pins"></i> View Route</a>
            </li>
         </ul>
         <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
               <div class="bus-details pt-3 pb-0 px-3">
                  <div class="info" id="info">
                     <h6 class="font-weight-normal">TNSTC</h6>
                     <p class="text-muted small mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
               <div class="bus-details pt-3 pb-0 px-3">
                  <div class="review" id="review">
                     <h6 class="font-weight-normal">Review</h6>
                     <p class="mb-0"><span class="h4 mb-0">4.8</span><span class="h6">/5</span></p>
                     <span class="f-10">Punctuality</span>
                     <div class="review-rating row align-items-center">
                        <div class="start-rating f-8 col-3">
                           <i class="icofont-star text-primary"></i>
                           <i class="icofont-star text-primary"></i>
                           <i class="icofont-star text-primary"></i>
                           <i class="icofont-star text-primary"></i>
                           <i class="icofont-star text-primary"></i>
                        </div>
                        <div class="progress col-7 p-0">
                           <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="col-2">
                           <span class="small">5.0</span>
                        </div>
                     </div>
                     <div class="review-rating row align-items-center">
                        <div class="start-rating f-8 col-3">
                           <i class="icofont-star text-primary"></i>
                           <i class="icofont-star text-primary"></i>
                           <i class="icofont-star text-primary"></i>
                           <i class="icofont-star text-primary"></i>
                           <i class="icofont-star text-muted"></i>
                        </div>
                        <div class="progress col-7 p-0">
                           <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75"></div>
                        </div>
                        <div class="col-2">
                           <span class="small">4.0</span>
                        </div>
                     </div>
                     <div class="review-rating row align-items-center">
                        <div class="start-rating f-8 col-3">
                           <i class="icofont-star text-primary"></i>
                           <i class="icofont-star text-primary"></i>
                           <i class="icofont-star text-primary"></i>
                           <i class="icofont-star text-muted"></i>
                           <i class="icofont-star text-muted"></i>
                        </div>
                        <div class="progress col-7 p-0">
                           <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="50"></div>
                        </div>
                        <div class="col-2">
                           <span class="small">3.0</span>
                        </div>
                     </div>
                     <div class="review-rating row align-items-center">
                        <div class="start-rating f-8 col-3">
                           <i class="icofont-star text-primary"></i>
                           <i class="icofont-star text-primary"></i>
                           <i class="icofont-star text-muted"></i>
                           <i class="icofont-star text-muted"></i>
                           <i class="icofont-star text-muted"></i>
                        </div>
                        <div class="progress col-7 p-0">
                           <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="25"></div>
                        </div>
                        <div class="col-2">
                           <span class="small">2.0</span>
                        </div>
                     </div>
                     <div class="review-rating row align-items-center">
                        <div class="start-rating f-8 col-3">
                           <i class="icofont-star text-primary"></i>
                           <i class="icofont-star text-muted"></i>
                           <i class="icofont-star text-muted"></i>
                           <i class="icofont-star text-muted"></i>
                           <i class="icofont-star text-muted"></i>
                        </div>
                        <div class="progress col-7 p-0">
                           <div class="progress-bar bg-primary" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5"></div>
                        </div>
                        <div class="col-2">
                           <span class="small">1.0</span>
                        </div>
                     </div>
                     <div class="comments mt-3">
                        <div class="reviews bg-white p-3 shadow-sm rounded-1 mb-3">
                           <div class="d-flex align-items-center mb-2">
                              <img src="img/review/r1.jpg" class="img-fluid rounded-pill">
                              <div class="ml-2">
                                 <p class="mb-0 small font-weight-bold">Vignesh</p>
                                 <div class="start-rating d-flex align-items-center f-8">
                                    <i class="icofont-star text-primary"></i>
                                    <i class="icofont-star text-primary"></i>
                                    <i class="icofont-star text-primary"></i>
                                    <i class="icofont-star text-primary"></i>
                                    <i class="icofont-star text-muted"></i>
                                    <span class="ml-2 small text-primary">Good</span>
                                 </div>
                              </div>
                              <div class="date ml-auto mb-auto small">
                                 <small class="f-10">24/03/2021</small>
                              </div>
                           </div>
                           <p class="small text-muted mb-0">Dummy comment Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="reviews bg-white p-3 shadow-sm rounded-1 mb-3">
                           <div class="d-flex align-items-center mb-2">
                              <img src="img/review/r2.jpg" class="img-fluid rounded-pill">
                              <div class="ml-2">
                                 <p class="mb-0 small font-weight-bold">Arun</p>
                                 <div class="start-rating d-flex align-items-center f-8">
                                    <i class="icofont-star text-primary"></i>
                                    <i class="icofont-star text-primary"></i>
                                    <i class="icofont-star text-muted"></i>
                                    <i class="icofont-star text-muted"></i>
                                    <i class="icofont-star text-muted"></i>
                                    <span class="ml-2 small text-primary">Not Good</span>
                                 </div>
                              </div>
                              <div class="date ml-auto mb-auto small">
                                 <small class="f-10">24/03/2020</small>
                              </div>
                           </div>
                           <p class="small text-muted mb-0">Not good item for dummy text item Lorem ipsum dolor sit amet, consectetur adipisicing elit, tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
               <div class="bus-details pt-3 pb-0 px-3">
                  <!-- Pick Up Point -->
                  <div class="pickpoint" id="pick">
                     <div class="bg-white shadow-sm rounded-1 p-3 mb-3">
						 <div class="border-bottom pb-3 mb-3 custom-control small d-flex inline">
							<h6 class="h6 mb-0 col-sm-4">Stage</h6>
							<h6 class="mb-0 col-sm-8">Crossing Time</h6>
						 </div>
                        <?php for($i=0;$i<$stop_count;$i++){ ?>
                        <div class="custom-control">
                           <label class="small d-flex inline">
                              <p class="h6 mb-0 col-sm-4"><?php echo $result[$bus][$i]["STAGE"]; ?></p>
                              <div class="mb-0 col-sm-8"><b><ol><?php echo $result[$bus][$i]["CROSSING TIME"]; ?></ol></b></div>
                           </label>
                        </div>
                        <br>
                        <?php }?>
                        <!-- <div class="custom-control custom-radio custom-control-inline">
                                 <input type="radio" id="customRadiopick1" name="customRadiopick1" class="custom-control-input" checked>
                                 <label class="custom-control-label small d-flex" for="customRadiopick1">
                                    <p class="h6 mr-4 mb-0">Membalam</p>
                                    <div class="mb-0"><b><ol>5.32am to 5.33am</ol></b></div>
                                    </label>
                              </div>
                              <br>
                        <div class="custom-control custom-radio custom-control-inline">
                                 <input type="radio" id="customRadiopick1" name="customRadiopick1" class="custom-control-input" checked>
                                 <label class="custom-control-label small d-flex" for="customRadiopick1">
                                    <p class="h6 mr-4 mb-0">Valavaikal</p>
                                    <div class="mb-0"><b><ol>5.35am to 5.37am</ol></b></div>
                                    </label>
                              </div>
                              <br>
                              <div class="custom-control custom-radio custom-control-inline">
                                       <input type="radio" id="customRadiopick1" name="customRadiopick1" class="custom-control-input" checked>
                                       <label class="custom-control-label small d-flex" for="customRadiopick1">
                                          <p class="h6 mr-4 mb-0">Pulivalam</p>
                                          <div class="mb-0"><b><ol>5.38am to 5.39am</ol></b></div>
                                          </label>
                                    </div>
                                    <br>
                              <div class="custom-control custom-radio custom-control-inline">
                                       <input type="radio" id="customRadiopick1" name="customRadiopick1" class="custom-control-input" checked>
                                       <label class="custom-control-label small d-flex" for="customRadiopick1">
                                          <p class="h6 mr-4 mb-0">Koodur</p>
                                          <div class="mb-0"><b><ol>5.43am to 5.45am</ol></b></div>
                                          </label>
                                    </div>
                                    <br>
                                    <div class="custom-control custom-radio custom-control-inline">
                                             <input type="radio" id="customRadiopick1" name="customRadiopick1" class="custom-control-input" checked>
                                             <label class="custom-control-label small d-flex" for="customRadiopick1">
                                                <p class="h6 mr-4 mb-0">Mangudi</p>
                                                <div class="mb-0"><b><ol>5.47am to 5.49am</ol></b></div>
                                                </label>
                                          </div>
                                          <br>
                                    <div class="custom-control custom-radio custom-control-inline">
                                             <input type="radio" id="customRadiopick1" name="customRadiopick1" class="custom-control-input" checked>
                                             <label class="custom-control-label small d-flex" for="customRadiopick1">
                                                <p class="h6 mr-4 mb-0">Thiruneiper</p>
                                                <div class="mb-0"><b><ol>5.51am to 5.53am</ol></b></div>
                                                </label>
                                          </div>
                                          <br>
                                          <div class="custom-control custom-radio custom-control-inline">
                                                   <input type="radio" id="customRadiopick1" name="customRadiopick1" class="custom-control-input" checked>
                                                   <label class="custom-control-label small d-flex" for="customRadiopick1">
                                                      <p class="h6 mr-4 mb-0">Mavoor</p>
                                                      <div class="mb-0"><b><ol>5.54am to 5.56am</ol></b></div>
                                                      </label>
                                                </div>
                                                <br>
                                          <div class="custom-control custom-radio custom-control-inline">
                                                   <input type="radio" id="customRadiopick1" name="customRadiopick1" class="custom-control-input" checked>
                                                   <label class="custom-control-label small d-flex" for="customRadiopick1">
                                                      <p class="h6 mr-4 mb-0">Thirukkaravasal</p>
                                                      <div class="mb-0"><b><ol>5.57am to 5.59am</ol></b></div>
                                                      </label>
                                                </div>
                                                <br>
                                          <div class="custom-control custom-radio custom-control-inline">
                                                   <input type="radio" id="customRadiopick1" name="customRadiopick1" class="custom-control-input" checked>
                                                   <label class="custom-control-label small d-flex" for="customRadiopick1">
                                                      <p class="h6 mr-4 mb-0">Komal</p>
                                                      <div class="mb-0"><b><ol>6.01am to 6.03am</ol></b></div>
                                                      </label>
                                                </div>
                                                <br>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                         <input type="radio" id="customRadiopick1" name="customRadiopick1" class="custom-control-input" checked>
                                                         <label class="custom-control-label small d-flex" for="customRadiopick1">
                                                            <p class="h6 mr-4 mb-0">Uththirangudi</p>
                                                            <div class="mb-0"><b><ol>6.04am to 6.06am</ol></b></div>
                                                            </label>
                                                      </div>
                                                      <br>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                         <input type="radio" id="customRadiopick1" name="customRadiopick1" class="custom-control-input" checked>
                                                         <label class="custom-control-label small d-flex" for="customRadiopick1">
                                                            <p class="h6 mr-4 mb-0">Nal Road</p>
                                                            <div class="mb-0"><b><ol>6.07am to 6.08am</ol></b></div>
                                                            </label>
                                                      </div>
                                                      <br>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                         <input type="radio" id="customRadiopick1" name="customRadiopick1" class="custom-control-input" checked>
                                                         <label class="custom-control-label small d-flex" for="customRadiopick1">
                                                            <p class="h6 mr-4 mb-0">Katchanam</p>
                                                            <div class="mb-0"><b><ol>6.09am to 6.11am</ol></b></div>
                                                            </label>
                                                      </div>
                                                      <br>
                                                      <div class="custom-control custom-radio custom-control-inline">
                                                               <input type="radio" id="customRadiopick1" name="customRadiopick1" class="custom-control-input" checked>
                                                               <label class="custom-control-label small d-flex" for="customRadiopick1">
                                                                  <p class="h6 mr-4 mb-0">Kothangudi</p>
                                                                  <div class="mb-0"><b><ol>6.13am to 6.15am</ol></b></div>
                                                                  </label>
                                                            </div>
                                                            <br>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                     <input type="radio" id="customRadiopick1" name="customRadiopick1" class="custom-control-input" checked>
                                                                     <label class="custom-control-label small d-flex" for="customRadiopick1">
                                                                        <p class="h6 mr-4 mb-0">Alathambadi</p>
                                                                        <div class="mb-0"><b><ol>6.17am to 6.19am</ol></b></div>
                                                                        </label>
                                                                  </div>
                                                                  <br>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                     <input type="radio" id="customRadiopick1" name="customRadiopick1" class="custom-control-input" checked>
                                                                     <label class="custom-control-label small d-flex" for="customRadiopick1">
                                                                        <p class="h6 mr-4 mb-0">Manali</p>
                                                                        <div class="mb-0"><b><ol>6.22am to 6.24am</ol></b></div>
                                                                        </label>
                                                                  </div>
                                                                  <br>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                     <input type="radio" id="customRadiopick1" name="customRadiopick1" class="custom-control-input" checked>
                                                                     <label class="custom-control-label small d-flex" for="customRadiopick1">
                                                                        <p class="h6 mr-4 mb-0">Veloor</p>
                                                                        <div class="mb-0"><b><ol>6.25am to 6.27am</ol></b></div>
                                                                        </label>
                                                                  </div>
                                                                  <br>
                        <div class="custom-control custom-radio custom-control-inline">
                           <input type="radio" id="customRadiodrop1" name="customRadiodrop1" class="custom-control-input" checked>
                           <label class="custom-control-label small d-flex" for="customRadiodrop1">
                              <p class="h6 mr-4 mb-0">Thiruthuraipoondi</p>
                              <p class="mb-0"><b><ol>6.27am to 6.30am</ol></b></p>
                           </label>
                        </div> -->
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Veiw Seat Button -->
      <div class="fixed-bottom view-seatbt p-3">
         <a href="home.php" class="btn btn-primary btn-block osahanbus-btn rounded-1">Back</a>
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
      <!-- Sidebar JS-->
      <script type="text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/custom.js"></script>
   </body>
   
<!-- Mirrored from mobileui.store/preview/osahanbus/bus-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 07:30:17 GMT -->
</html>