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
                                       <div class="btn btn-light"><i data-feather="home"> </i>Informasi </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="master_barang/barang_order">
                                       <div class="btn btn-primary"><i data-feather="folder"></i>Riwayat Order </div>
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
                                    <div class="btn btn-outline-primary ms-2"><i data-feather="plus"> </i> Pemesanan </div>
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
                                 <br>
                              <div class="table-responsive">
                                 <table class="table">
                                    <thead class="table-primary">
                                       <tr>
                                          <th scope="col">No.Transaksi</th>
                                          <th scope="col">Invoice</th>
                                          <th scope="col">Tanggal</th>
                                          <th scope="col">Qty</th>
                                          <th scope="col">Supplier</th>
                                          <th scope="col">Terima</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>2023120222212</td>
                                          <td>MK22-21202-22</td>
                                          <td>2023-12-02</td>
                                          <td>18</td>
                                          <td>CV. Bengkel Putra</td>
                                          <td>2023-12-13 17:12:09</td>
                                       </tr>
                                       <tr>
                                          <td>202309202022</td>
                                          <td>0912MM1-2012ZZ</td>
                                          <td>2023-12-18</td>
                                          <td>3</td>
                                          <td>CV. Putra Jaya</td>
                                          <td>2023-12-22 14:30:12</td>
                                       </tr>
                                    </tbody>
                                 </table>
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