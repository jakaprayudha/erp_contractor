<?php
$page = "Notaris";
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
                        <h3>Notaris</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="javascript:;"> <i data-feather="database"></i></a></li>
                           <li class="breadcrumb-item">HRD</li>
                           <li class="breadcrumb-item active"> Notaris</li>
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
                              <div class="accordion" id="accordionExample">
                                 <div class="accordion-item">
                                    <h2 class="accordion-header">
                                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          Berita Acara Rapat
                                       </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                       <div class="accordion-body">
                                          <div class="table-responsive">
                                             <table class="table">
                                                <thead class="table-primary">
                                                   <tr>
                                                      <th scope="col">Nomor</th>
                                                      <th scope="col">Perihal</th>
                                                      <th>File</th>
                                                      <th scope="col" class="text-center">Aksi</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td>PT/MM/202-/022</td>
                                                      <td>BERITA ACARA RAPAT MENON-AKTIFKAN PERUSAHAAN</td>
                                                      <td>
                                                         <span class="badge bg-primary">Download</span>
                                                      </td>
                                                      <td class="text-center col-3">
                                                         <button class="btn btn-sm btn-warning"><i data-feather="edit-3"></i></button>
                                                         <button class="btn btn-sm btn-danger"><i data-feather="trash"></i></button>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>PT/MM/202-/032</td>
                                                      <td>RAPAT UMUM PEMEGANG SAHAM LUAR BIASA
                                                         Persetujuan Untuk IPO (Penghimpun Dana/Go Public)</td>
                                                      <td>
                                                         <span class="badge bg-primary">Download</span>
                                                      </td>
                                                      <td class="text-center col-3">
                                                         <button class="btn btn-sm btn-warning"><i data-feather="edit-3"></i></button>
                                                         <button class="btn btn-sm btn-danger"><i data-feather="trash"></i></button>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>PT/MM/202-/044</td>
                                                      <td>BERITA ACARA SERAH TERIMA</td>
                                                      <td>
                                                         <span class="badge bg-primary">Download</span>
                                                      </td>
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
                                 <div class="accordion-item">
                                    <h2 class="accordion-header">
                                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          Akta Pendirian
                                       </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                       <div class="accordion-body">
                                          <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                       </div>
                                    </div>
                                 </div>
                                 <div class="accordion-item">
                                    <h2 class="accordion-header">
                                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          Kuasa
                                       </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                       <div class="accordion-body">
                                          <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
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