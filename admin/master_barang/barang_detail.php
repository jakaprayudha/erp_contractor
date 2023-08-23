<?php
$page = "Barang";
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
                        <h3>Barang</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="javascript:;"> <i data-feather="database"></i></a></li>
                           <li class="breadcrumb-item"><a href="master_barang/barang">Barang</a></li>
                           <li class="breadcrumb-item active"> Detail</li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 box-col-6 pe-0">
                     <div class="file-sidebar">
                        <div class="card">
                           <div class="card-body">
                              <ul>
                                 <li>
                                    <a href="master_barang/barang_detail">
                                       <div class="btn btn-primary"><i data-feather="home"> </i>Informasi </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="master_barang/barang_order">
                                       <div class="btn btn-light"><i data-feather="folder"></i>Riwayat Order </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="master_barang/barang_stock">
                                       <div class="btn btn-light"><i data-feather="clock"></i>Kartu Stock </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="master_barang/barang_penggunaan">
                                       <div class="btn btn-light"><i data-feather="alert-circle"></i>Riwayat Penggunaan </div>
                                    </a>
                                 </li>
                                 <li>
                                    <div class="btn btn-light"><i data-feather="trash-2"></i>Deleted </div>
                                 </li>
                              </ul>
                              <hr>
                              <ul>
                                 <li>
                                    <div class="btn btn-outline-primary"><i data-feather="database"> </i>Persediaan </div>
                                    <div class="m-t-15">
                                       <div class="progress sm-progress-bar mb-1">
                                          <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                       </div>
                                       <p>25 Pcs of 100 Pcs used</p>
                                    </div>
                                 </li>
                              </ul>
                              <hr>
                              <ul>
                                 <li>
                                    <div class="btn btn-outline-primary"><i data-feather="grid"> </i>Pricing plan</div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-md-12 box-col-12">
                     <div class="file-content">
                        <div class="card">
                           <div class="card-header">
                              <div class="media">
                                 <div class="media-body text-end">
                                    <div class="btn btn-outline-primary ms-2"><i data-feather="upload"> </i>Upload </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card-body file-manager">
                              <h4 class="mb-3">HEO-ISOVG-68-D200</h4>
                              <p>
                                 <strong>Deskripsi : </strong> <br>
                                 Physical state - Liquid Kinematic Viscosity at 100 - 68.00 cSt (Typical) Appearance/Odour - Yellow / Slight Odour Density at 15.6 - 0.876 kg/l (Typical) Melting Point - Not Aplicable Flash Point - 258 C Solubility in water - Negligible
                                 <br>
                                 Stock : <strong>12</strong> <br>
                              <h5 class="text-primary">Rp. 3.570.000 / Drum</h5>
                              <br>
                              <div class="row">
                                 <div class="col-12">
                                    <div class="card o-hidden">
                                       <div class="bg-primary b-r-4 card-body">
                                          <div class="media static-top-widget">
                                             <div class="align-self-center text-center"><i data-feather="database"></i></div>
                                             <div class="media-body"><span class="m-0">Supplier</span>
                                                <h4 class="mb-0 counter">5</h4><i class="icon-bg" data-feather="database"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <br>
                              Merk : <strong>HEO</strong> <br>
                              Kategori : <strong>Alat-Alat Berat</strong>
                              <hr>
                              <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                                 <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="true"><i class="icofont icofont-ui-home"></i>Spesifikasi</a></li>
                                 <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Catatan</a></li>
                                 <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i class="icofont icofont-contacts"></i>Diskusi</a></li>
                                 <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i class="icofont icofont-contacts"></i>Rekomendasi</a></li>
                                 <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i class="icofont icofont-contacts"></i>Supplier</a></li>
                              </ul>
                              <div class="tab-content" id="top-tabContent">
                                 <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                 </div>
                                 <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                 </div>
                                 <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                 </div>
                              </div>
                              </p>
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