<?php
$page = "CCTV";
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <base href="../">
   <?php
   require '../head.php';
   ?>
</head>

<body onload="startTime()">
   <div class="loader-wrapper">
      <div class="loader-index"><span></span></div>
      <svg>
         <defs></defs>
         <filter id="goo">
            <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
            <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
         </filter>
      </svg>
   </div>
   <!-- tap on top starts-->
   <div class="tap-top"><i data-feather="chevrons-up"></i></div>
   <!-- tap on tap ends-->
   <!-- page-wrapper Start-->
   <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <?php
      require '../header.php';
      ?>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
         <!-- Page Sidebar Start-->
         <?php
         require '../sidebar.php';
         ?>
         <!-- Page Sidebar Ends-->
         <div class="page-body">
            <div class="container-fluid">
               <div class="page-title">
                  <div class="row">
                     <div class="col-6">
                        <h3>CCTV</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="javascript:;"> <i data-feather="database"></i></a></li>
                           <li class="breadcrumb-item">Security</li>
                           <li class="breadcrumb-item active"> CCTV</li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
                     <div class="card custom-card p-0">
                        <div class="card-header"><img class="img-fluid" src="../assets/images/user-card/1.jpg" alt=""></div>
                        <div class="card-profile"><img class="rounded-circle" src="../assets/images/avtar/3.jpg" alt=""></div>
                        <div class="text-center profile-details">
                           <h5>Area 01</h5>
                           <h6>Production Sector</h6>
                        </div>
                        <div class="card-footer row">
                           <div class="col-4 col-sm-4">
                              <h6>Status</h6>
                              <h5 class="counter"><span class="badge bg-success">Online</span></h5>
                           </div>
                           <div class="col-4 col-sm-4">
                              <h6>Resource</h6>
                              <h5><span class="counter">192.122.122</span></h5>
                           </div>
                           <div class="col-4 col-sm-4">
                              <h6>Storage</h6>
                              <h5><span class="counter">12 Mb</span></h5>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
                     <div class="card custom-card p-0">
                        <div class="card-header"><img class="img-fluid" src="../assets/images/user-card/1.jpg" alt=""></div>
                        <div class="card-profile"><img class="rounded-circle" src="../assets/images/avtar/3.jpg" alt=""></div>
                        <div class="text-center profile-details">
                           <h5>Area 02</h5>
                           <h6>Office <Area></Area> </h6>
                        </div>
                        <div class="card-footer row">
                           <div class="col-4 col-sm-4">
                              <h6>Status</h6>
                              <h5 class="counter"><span class="badge bg-success">Online</span></h5>
                           </div>
                           <div class="col-4 col-sm-4">
                              <h6>Resource</h6>
                              <h5><span class="counter">192.122.121</span></h5>
                           </div>
                           <div class="col-4 col-sm-4">
                              <h6>Storage</h6>
                              <h5><span class="counter">8 Mb</span></h5>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
                     <div class="card custom-card p-0">
                        <div class="card-header"><img class="img-fluid" src="../assets/images/user-card/1.jpg" alt=""></div>
                        <div class="card-profile"><img class="rounded-circle" src="../assets/images/avtar/3.jpg" alt=""></div>
                        <div class="text-center profile-details">
                           <h5>Area 03</h5>
                           <h6>Production <Area></Area> </h6>
                        </div>
                        <div class="card-footer row">
                           <div class="col-4 col-sm-4">
                              <h6>Status</h6>
                              <h5 class="counter"><span class="badge bg-danger">Offline</span></h5>
                           </div>
                           <div class="col-4 col-sm-4">
                              <h6>Resource</h6>
                              <h5><span class="counter">192.122.120</span></h5>
                           </div>
                           <div class="col-4 col-sm-4">
                              <h6>Storage</h6>
                              <h5><span class="counter">2 Mb</span></h5>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
                     <div class="card custom-card p-0">
                        <div class="card-header"><img class="img-fluid" src="../assets/images/user-card/1.jpg" alt=""></div>
                        <div class="card-profile"><img class="rounded-circle" src="../assets/images/avtar/3.jpg" alt=""></div>
                        <div class="text-center profile-details">
                           <h5>Area 01</h5>
                           <h6>Production Sector</h6>
                        </div>
                        <div class="card-footer row">
                           <div class="col-4 col-sm-4">
                              <h6>Status</h6>
                              <h5 class="counter"><span class="badge bg-success">Online</span></h5>
                           </div>
                           <div class="col-4 col-sm-4">
                              <h6>Resource</h6>
                              <h5><span class="counter">192.122.122</span></h5>
                           </div>
                           <div class="col-4 col-sm-4">
                              <h6>Storage</h6>
                              <h5><span class="counter">12 Mb</span></h5>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
                     <div class="card custom-card p-0">
                        <div class="card-header"><img class="img-fluid" src="../assets/images/user-card/1.jpg" alt=""></div>
                        <div class="card-profile"><img class="rounded-circle" src="../assets/images/avtar/3.jpg" alt=""></div>
                        <div class="text-center profile-details">
                           <h5>Area 02</h5>
                           <h6>Office <Area></Area> </h6>
                        </div>
                        <div class="card-footer row">
                           <div class="col-4 col-sm-4">
                              <h6>Status</h6>
                              <h5 class="counter"><span class="badge bg-success">Online</span></h5>
                           </div>
                           <div class="col-4 col-sm-4">
                              <h6>Resource</h6>
                              <h5><span class="counter">192.122.121</span></h5>
                           </div>
                           <div class="col-4 col-sm-4">
                              <h6>Storage</h6>
                              <h5><span class="counter">8 Mb</span></h5>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
                     <div class="card custom-card p-0">
                        <div class="card-header"><img class="img-fluid" src="../assets/images/user-card/1.jpg" alt=""></div>
                        <div class="card-profile"><img class="rounded-circle" src="../assets/images/avtar/3.jpg" alt=""></div>
                        <div class="text-center profile-details">
                           <h5>Area 03</h5>
                           <h6>Production <Area></Area> </h6>
                        </div>
                        <div class="card-footer row">
                           <div class="col-4 col-sm-4">
                              <h6>Status</h6>
                              <h5 class="counter"><span class="badge bg-danger">Offline</span></h5>
                           </div>
                           <div class="col-4 col-sm-4">
                              <h6>Resource</h6>
                              <h5><span class="counter">192.122.120</span></h5>
                           </div>
                           <div class="col-4 col-sm-4">
                              <h6>Storage</h6>
                              <h5><span class="counter">2 Mb</span></h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid Ends-->
         </div>
         <!-- footer start-->
         <?php
         require '../footer.php';
         ?>
      </div>
   </div>
   <!-- latest jquery-->
   <script src="../assets/js/jquery-3.5.1.min.js"></script>
   <!-- Bootstrap js-->
   <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
   <!-- feather icon js-->
   <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
   <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
   <!-- scrollbar js-->
   <script src="../assets/js/scrollbar/simplebar.js"></script>
   <script src="../assets/js/scrollbar/custom.js"></script>
   <!-- Sidebar jquery-->
   <script src="../assets/js/config.js"></script>
   <!-- Plugins JS start-->
   <script src="../assets/js/sidebar-menu.js"></script>
   <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
   <script src="../assets/js/rating/jquery.barrating.js"></script>
   <script src="../assets/js/rating/rating-script.js"></script>
   <script src="../assets/js/owlcarousel/owl.carousel.js"></script>
   <script src="../assets/js/ecommerce.js"></script>
   <script src="../assets/js/product-list-custom.js"></script>
   <script src="../assets/js/tooltip-init.js"></script>
   <!-- Plugins JS Ends-->
   <!-- Theme js-->
   <script src="../assets/js/script.js"></script>
   <script src="../assets/js/theme-customizer/customizer.js"></script>
   <!-- Plugin used-->
</body>

</html>