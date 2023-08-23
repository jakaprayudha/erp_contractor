<?php
$page = "Disposisi";
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
                        <h3>Disposisi</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="javascript:;"> <i data-feather="database"></i></a></li>
                           <li class="breadcrumb-item">HRD</li>
                           <li class="breadcrumb-item active"> Disposisi</li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
               <div class="col-xl-12 col-md-12 box-col-12">
                  <div class="file-content">
                     <div class="card">
                        <div class="card-header">
                           <div class="media">
                              <div class="media-body text-end">
                                 <div class="btn btn-outline-primary ms-2"><i data-feather="download"> </i>Import </div>
                                 <form class="d-inline-flex" action="#" method="POST" enctype="multipart/form-data" name="myForm">
                                    <div class="btn btn-primary" onclick="getFile()"> <i data-feather="plus-square"></i>Add New</div>
                                    <div style="height: 0px;width: 0px; overflow:hidden;">
                                       <input id="upfile" type="file" onchange="sub(this)">
                                    </div>
                                 </form>

                              </div>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="display" id="basic-1">
                                 <thead>
                                    <tr>
                                       <th>No.Surat</th>
                                       <th>Tanggal</th>
                                       <th>Pengirim</th>
                                       <th>Diterima</th>
                                       <th>Perihal</th>
                                       <th>Sifat</th>
                                       <th>Diteruskan Kepada</th>
                                       <th>Tanggapan</th>
                                       <th class="text-center">Aksi</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>12MM/1212/202-221</td>
                                       <td>2023-12-2</td>
                                       <td>CV.Apik Teknologi Indonesia</td>
                                       <td>Direktur</td>
                                       <td>Penawaran Aplikasi ERP</td>
                                       <td>Penting</td>
                                       <td>
                                          Ka.Administrasi, Ka.Operasional
                                       </td>
                                       <td>
                                          Tanggapan untuk overview meeting segera
                                       </td>
                                       <td class="text-center col-2">
                                          <button class="btn btn-sm btn-warning"><i data-feather="edit-3"></i></button>
                                          <button class="btn btn-sm btn-danger"><i data-feather="trash"></i></button>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
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