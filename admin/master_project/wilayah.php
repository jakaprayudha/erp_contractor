<?php
$page = "Wilayah";
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
                        <h3>Kementerian</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="javascript:;"> <i data-feather="database"></i></a></li>
                           <li class="breadcrumb-item">Project</li>
                           <li class="breadcrumb-item active"> Wilayah</li>
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
                           <div class="row">
                              <div class="col-sm-3 col-xs-12">
                                 <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"><a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Provinsi</a><a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Kabupaten</a><a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Kecamatan</a><a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Desa</a></div>
                              </div>
                              <div class="col-sm-9 col-xs-12">
                                 <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                       <div class="table-responsive">
                                          <table class="table">
                                             <thead class="table-primary">
                                                <tr>
                                                   <th scope="col">ID</th>
                                                   <th scope="col">Provinsi</th>
                                                   <th scope="col" class="text-center">Aksi</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <th scope="row">001</th>
                                                   <td>Sumatera Utara</td>
                                                   <td class="text-center col-3">
                                                      <button class="btn btn-sm btn-warning"><i data-feather="edit-3"></i></button>
                                                      <button class="btn btn-sm btn-danger"><i data-feather="trash"></i></button>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <th scope="row">002</th>
                                                   <td>Sumatera Barat</td>
                                                   <td class="text-center col-3">
                                                      <button class="btn btn-sm btn-warning"><i data-feather="edit-3"></i></button>
                                                      <button class="btn btn-sm btn-danger"><i data-feather="trash"></i></button>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <th scope="row">003</th>
                                                   <td>Nangroe Aceh Darusalam</td>
                                                   <td class="text-center col-3">
                                                      <button class="btn btn-sm btn-warning"><i data-feather="edit-3"></i></button>
                                                      <button class="btn btn-sm btn-danger"><i data-feather="trash"></i></button>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                       <div class="table-responsive">
                                          <table class="table">
                                             <thead class="table-primary">
                                                <tr>
                                                   <th scope="col">Provinsi</th>
                                                   <th scope="col">Kabupaten</th>
                                                   <th scope="col" class="text-center">Aksi</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>Sumatera Utara</td>
                                                   <td>Deli Serdang</td>
                                                   <td class="text-center col-3">
                                                      <button class="btn btn-sm btn-warning"><i data-feather="edit-3"></i></button>
                                                      <button class="btn btn-sm btn-danger"><i data-feather="trash"></i></button>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>Sumatera Utara</td>
                                                   <td>Serdang Bedagai</td>
                                                   <td class="text-center col-3">
                                                      <button class="btn btn-sm btn-warning"><i data-feather="edit-3"></i></button>
                                                      <button class="btn btn-sm btn-danger"><i data-feather="trash"></i></button>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>Sumatera Utara</td>
                                                   <td>Batu Bara</td>
                                                   <td class="text-center col-3">
                                                      <button class="btn btn-sm btn-warning"><i data-feather="edit-3"></i></button>
                                                      <button class="btn btn-sm btn-danger"><i data-feather="trash"></i></button>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                       <div class="table-responsive">
                                          <table class="table">
                                             <thead class="table-primary">
                                                <tr>
                                                   <th scope="col">Provinsi</th>
                                                   <th scope="col">Kabupaten</th>
                                                   <th scope="col">Kecamatan</th>
                                                   <th scope="col" class="text-center">Aksi</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>Sumatera Utara</td>
                                                   <td>Deli Serdang</td>
                                                   <td>Tanjung Morawa</td>
                                                   <td class="text-center col-3">
                                                      <button class="btn btn-sm btn-warning"><i data-feather="edit-3"></i></button>
                                                      <button class="btn btn-sm btn-danger"><i data-feather="trash"></i></button>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>Sumatera Utara</td>
                                                   <td>Deli Serdang</td>
                                                   <td>Lubuk Pakam</td>
                                                   <td class="text-center col-3">
                                                      <button class="btn btn-sm btn-warning"><i data-feather="edit-3"></i></button>
                                                      <button class="btn btn-sm btn-danger"><i data-feather="trash"></i></button>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>Sumatera Utara</td>
                                                   <td>Deli Serdang</td>
                                                   <td>Biru Biru</td>
                                                   <td class="text-center col-3">
                                                      <button class="btn btn-sm btn-warning"><i data-feather="edit-3"></i></button>
                                                      <button class="btn btn-sm btn-danger"><i data-feather="trash"></i></button>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                       <div class="table-responsive">
                                          <table class="table">
                                             <thead class="table-primary">
                                                <tr>
                                                   <th scope="col">Provinsi</th>
                                                   <th scope="col">Kabupaten</th>
                                                   <th scope="col">Kecamatan</th>
                                                   <th scope="col">Desa</th>
                                                   <th scope="col" class="text-center">Aksi</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>Sumatera Utara</td>
                                                   <td>Deli Serdang</td>
                                                   <td>Tanjung Morawa</td>
                                                   <td>Buntu Bedimbar</td>
                                                   <td class="text-center col-3">
                                                      <button class="btn btn-sm btn-warning"><i data-feather="edit-3"></i></button>
                                                      <button class="btn btn-sm btn-danger"><i data-feather="trash"></i></button>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>Sumatera Utara</td>
                                                   <td>Deli Serdang</td>
                                                   <td>Tanjung Morawa</td>
                                                   <td>Sena</td>
                                                   <td class="text-center col-3">
                                                      <button class="btn btn-sm btn-warning"><i data-feather="edit-3"></i></button>
                                                      <button class="btn btn-sm btn-danger"><i data-feather="trash"></i></button>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>Sumatera Utara</td>
                                                   <td>Deli Serdang</td>
                                                   <td>Tanjung Morawa</td>
                                                   <td>Limau Manis</td>
                                                   <td class="text-center col-3">
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