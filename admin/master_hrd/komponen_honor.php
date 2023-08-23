<?php
$page = "Komponen Honor";
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
                        <h3>Komponen Honor</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="javascript:;"> <i data-feather="database"></i></a></li>
                           <li class="breadcrumb-item">HRD</li>
                           <li class="breadcrumb-item active"> Komponen Honor</li>
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
                                       <th>Komponen</th>
                                       <th>Keterangan</th>
                                       <th>Status</th>
                                       <th class="text-center">Aksi</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Upah Pokok</td>
                                       <td>
                                          Upah pokok adalah imbalan dasar yang dibayarkan kepada pekerja menurut tingkat atau jenis pekerjaan yang besarnya ditetapkan berdasarkan kesepakatan. Dalam Pasal 94 Undang-Undang Nomor 13 Tahun 2003, dijelaskan lebih lanjut kalau besaran komponen upah pokok sedikitnya 75% dari jumlah upah pokok dan tunjangan tetap.
                                       </td>
                                       <td class="col-1">
                                          <div class="media-body text-start icon-state">
                                             <label class="switch">
                                                <input id="bootstrap-notify-url" checked type="checkbox"><span class="switch-state"></span>
                                             </label>
                                          </div>
                                       </td>
                                       <td class="text-center col-2">
                                          <button class="btn btn-sm btn-warning"><i data-feather="edit-3"></i></button>
                                          <button class="btn btn-sm btn-danger"><i data-feather="trash"></i></button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>Tunjangan Tetap</td>
                                       <td>
                                          Tunjangan tetap adalah suatu pembayaran yang dilakukan secara teratur dan diberikan pada pekerja dan keluarganya. Tunjangan tetap dibayarkan bersama upah pokok, dan tidak berkaitan dengan kehadiran atau kinerjanya dalam perusahaan. Tunjangan tetap dapat berupa berupa tunjangan istri, tunjangan anak, tunjangan perumahan, dan lain-lain. Tunjangan makan dan tunjangan transportasi dapat masuk ke dalam komponen ini jika tidak berkaitan dengan kehadiran, dan diterima secara tetap oleh pekerja menurut satuan waktu, harian atau bulanan.
                                       </td>
                                       <td class="col-1">
                                          <div class="media-body text-start icon-state">
                                             <label class="switch">
                                                <input id="bootstrap-notify-url" checked type="checkbox"><span class="switch-state"></span>
                                             </label>
                                          </div>
                                       </td>
                                       <td class="text-center col-2">
                                          <button class="btn btn-sm btn-warning"><i data-feather="edit-3"></i></button>
                                          <button class="btn btn-sm btn-danger"><i data-feather="trash"></i></button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>Tunjangann Tidak Tetap</td>
                                       <td>
                                          Tunjangan tidak tetap adalah pembayaran yang diberikan secara langsung pada pekerja dan keluarganya, serta tidak berkaitan dengan pekerja. Sesuai namanya, tunjangan ini dibayarkan secara tidak tetap dan tidak bersamaan dengan upah pokok. Umumnya, tunjangan tidak tetap ini berkaitan dengan kehadiran atau kinerja karyawan. Misalnya, tunjangan makan hanya akan diberikan sesuai jumlah hari masuknya karyawan ke kantor. Dengan begitu, tunjangan makan ini termasuk dalam komponen tunjangan tidak tetap.
                                       </td>
                                       <td class="col-1">
                                          <div class="media-body text-start icon-state">
                                             <label class="switch">
                                                <input id="bootstrap-notify-url" checked type="checkbox"><span class="switch-state"></span>
                                             </label>
                                          </div>
                                       </td>
                                       <td class="text-center col-2">
                                          <button class="btn btn-sm btn-warning"><i data-feather="edit-3"></i></button>
                                          <button class="btn btn-sm btn-danger"><i data-feather="trash"></i></button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>Potongan</td>
                                       <td>
                                          Dalam komponen gaji, terdapat potongan yang mengurangi jumlah penghasilan. Potongan ini biasanya terdiri dari pajak penghasilan atau PPh Pasal 21 dan iuran BPJS (Kesehatan maupun Ketenagakerjaan). Untuk potongan PPh Pasal 21, ada komponen-komponennya penghitungannya tersendiri agar mendapatkan besaran pajak tepat yang perlu disetor dan dilaporkan.


                                       </td>
                                       <td class="col-1">
                                          <div class="media-body text-start icon-state">
                                             <label class="switch">
                                                <input id="bootstrap-notify-url" checked type="checkbox"><span class="switch-state"></span>
                                             </label>
                                          </div>
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