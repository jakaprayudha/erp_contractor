<?php
$page = "Undangan Meeting";
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <base href="../">
   <?php
   require '../head.php';
   ?>
   <link rel="stylesheet" type="text/css" href="../assets/css/vendors/calendar.css">
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
                        <h3>Undangan Meeting</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="javascript:;"> <i data-feather="database"></i></a></li>
                           <li class="breadcrumb-item">Master Data</li>
                           <li class="breadcrumb-item active"> Undangan Meeting</li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xxl-4 col-lg-6">
                     <div class="project-box"><span class="badge badge-primary">Doing</span>
                        <h6>Endless admin Design</h6>
                        <div class="media"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                           <div class="media-body">
                              <p>Themeforest, australia</p>
                           </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                           <div class="col-6"><span>Issues </span></div>
                           <div class="col-6 text-primary">12 </div>
                           <div class="col-6"> <span>Resolved</span></div>
                           <div class="col-6 text-primary">5</div>
                           <div class="col-6"> <span>Comment</span></div>
                           <div class="col-6 text-primary">7</div>
                        </div>
                        <div class="customers">
                           <ul>
                              <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                              <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                              <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                              <li class="d-inline-block ms-2">
                                 <p class="f-12">+10 More</p>
                              </li>
                           </ul>
                        </div>
                        <div class="project-status mt-4">
                           <div class="media mb-0">
                              <p>70% </p>
                              <div class="media-body text-end"><span>Done</span></div>
                           </div>
                           <div class="progress" style="height: 5px">
                              <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-lg-6">
                     <div class="project-box"><span class="badge badge-success">Done</span>
                        <h6>Universal admin Design</h6>
                        <div class="media"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                           <div class="media-body">
                              <p>Envato, australia</p>
                           </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                           <div class="col-6"><span>Issues </span></div>
                           <div class="col-6 text-success">24</div>
                           <div class="col-6"> <span>Resolved</span></div>
                           <div class="col-6 text-success">24</div>
                           <div class="col-6"> <span>Comment</span></div>
                           <div class="col-6 text-success">40</div>
                        </div>
                        <div class="customers">
                           <ul>
                              <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                              <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                              <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                              <li class="d-inline-block ms-2">
                                 <p class="f-12">+3 More</p>
                              </li>
                           </ul>
                        </div>
                        <div class="project-status mt-4">
                           <div class="media mb-0">
                              <p>100% </p>
                              <div class="media-body text-end"><span>Done</span></div>
                           </div>
                           <div class="progress" style="height: 5px">
                              <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-lg-6">
                     <div class="project-box"><span class="badge badge-success">Done</span>
                        <h6>Poco admin Design</h6>
                        <div class="media"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                           <div class="media-body">
                              <p>Envato, australia</p>
                           </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                           <div class="col-6"><span>Issues </span></div>
                           <div class="col-6 text-success">40</div>
                           <div class="col-6"> <span>Resolved</span></div>
                           <div class="col-6 text-success">40</div>
                           <div class="col-6"> <span>Comment</span></div>
                           <div class="col-6 text-success">20</div>
                        </div>
                        <div class="customers">
                           <ul>
                              <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                              <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                              <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                              <li class="d-inline-block ms-2">
                                 <p class="f-12">+2 More</p>
                              </li>
                           </ul>
                        </div>
                        <div class="project-status mt-4">
                           <div class="media mb-0">
                              <p>100% </p>
                              <div class="media-body text-end"><span>Done</span></div>
                           </div>
                           <div class="progress" style="height: 5px">
                              <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-lg-6">
                     <div class="project-box"><span class="badge badge-success">Done</span>
                        <h6>Universal admin Design</h6>
                        <div class="media"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                           <div class="media-body">
                              <p>Envato, australia</p>
                           </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                           <div class="col-6"><span>Issues </span></div>
                           <div class="col-6 text-success">24</div>
                           <div class="col-6"> <span>Resolved</span></div>
                           <div class="col-6 text-success">24</div>
                           <div class="col-6"> <span>Comment</span></div>
                           <div class="col-6 text-success">40</div>
                        </div>
                        <div class="customers">
                           <ul>
                              <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                              <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                              <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                              <li class="d-inline-block ms-2">
                                 <p class="f-12">+3 More</p>
                              </li>
                           </ul>
                        </div>
                        <div class="project-status mt-4">
                           <div class="media mb-0">
                              <p>100% </p>
                              <div class="media-body text-end"><span>Done</span></div>
                           </div>
                           <div class="progress" style="height: 5px">
                              <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-lg-6">
                     <div class="project-box"><span class="badge badge-primary">Doing</span>
                        <h6>Endless admin Design</h6>
                        <div class="media"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                           <div class="media-body">
                              <p>Themeforest, australia</p>
                           </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                           <div class="col-6"><span>Issues </span></div>
                           <div class="col-6 text-primary">12 </div>
                           <div class="col-6"> <span>Resolved</span></div>
                           <div class="col-6 text-primary">5</div>
                           <div class="col-6"> <span>Comment</span></div>
                           <div class="col-6 text-primary">7</div>
                        </div>
                        <div class="customers">
                           <ul>
                              <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                              <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                              <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                              <li class="d-inline-block ms-2">
                                 <p class="f-12">+10 More</p>
                              </li>
                           </ul>
                        </div>
                        <div class="project-status mt-4">
                           <div class="media mb-0">
                              <p>70% </p>
                              <div class="media-body text-end"><span>Done</span></div>
                           </div>
                           <div class="progress" style="height: 5px">
                              <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-lg-6">
                     <div class="project-box"><span class="badge badge-success">Done</span>
                        <h6>Poco admin Design</h6>
                        <div class="media"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                           <div class="media-body">
                              <p>Envato, australia</p>
                           </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                           <div class="col-6"><span>Issues </span></div>
                           <div class="col-6 text-success">40</div>
                           <div class="col-6"> <span>Resolved</span></div>
                           <div class="col-6 text-success">40</div>
                           <div class="col-6"> <span>Comment</span></div>
                           <div class="col-6 text-success">20</div>
                        </div>
                        <div class="customers">
                           <ul>
                              <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                              <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                              <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                              <li class="d-inline-block ms-2">
                                 <p class="f-12">+2 More</p>
                              </li>
                           </ul>
                        </div>
                        <div class="project-status mt-4">
                           <div class="media mb-0">
                              <p>100% </p>
                              <div class="media-body text-end"><span>Done</span></div>
                           </div>
                           <div class="progress" style="height: 5px">
                              <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
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