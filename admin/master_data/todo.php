<?php
$page = "Pengumuman";
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <base href="../">
   <?php
   require '../head.php';
   ?>
   <link rel="stylesheet" type="text/css" href="../assets/css/vendors/todo.css">
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
                        <h3>Pengumuman</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="javascript:;"> <i data-feather="database"></i></a></li>
                           <li class="breadcrumb-item">Master Data</li>
                           <li class="breadcrumb-item active"> Pengumuman</li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-header">
                           <h5>To-Do</h5>
                        </div>
                        <div class="card-body">
                           <div class="todo">
                              <div class="todo-list-wrapper">
                                 <div class="todo-list-container">
                                    <div class="mark-all-tasks">
                                       <div class="mark-all-tasks-container"><span class="mark-all-btn" id="mark-all-finished" role="button"><span class="btn-label">Mark all as finished</span><span class="action-box completed"><i class="icon"><i class="icon-check"></i></i></span></span><span class="mark-all-btn move-down" id="mark-all-incomplete" role="button"><span class="btn-label">Mark all as Incomplete</span><span class="action-box"><i class="icon"><i class="icon-check"></i></i></span></span></div>
                                    </div>
                                    <div class="todo-list-body">
                                       <ul id="todo-list">
                                          <li class="task">
                                             <div class="task-container">
                                                <h4 class="task-label">Weekly Bigbazar Shopping </h4><span class="task-action-btn"><span class="action-box large delete-btn" title="Delete Task"><i class="icon"><i class="icon-trash"></i></i></span><span class="action-box large complete-btn" title="Mark Complete"><i class="icon"><i class="icon-check"></i></i></span></span>
                                             </div>
                                          </li>
                                          <li class="task">
                                             <div class="task-container">
                                                <h4 class="task-label">Go Outside Picnic on Sunday</h4><span class="task-action-btn"><span class="action-box large delete-btn" title="Delete Task"><i class="icon"><i class="icon-trash"></i></i></span><span class="action-box large complete-btn" title="Mark Complete"><i class="icon"><i class="icon-check"></i></i></span></span>
                                             </div>
                                          </li>
                                          <li class="completed task">
                                             <div class="task-container">
                                                <h4 class="task-label">Write a blog post </h4><span class="task-action-btn"><span class="action-box large delete-btn" title="Delete Task"><i class="icon"><i class="icon-trash"></i></i></span><span class="action-box large complete-btn" title="Mark Complete"><i class="icon"><i class="icon-check"></i></i></span></span>
                                             </div>
                                          </li>
                                          <li class="task">
                                             <div class="task-container">
                                                <h4 class="task-label">Do the chicken dance</h4><span class="task-action-btn"><span class="action-box large delete-btn" title="Delete Task"><i class="icon"><i class="icon-trash"></i></i></span><span class="action-box large complete-btn" title="Mark Incomplete"><i class="icon"><i class="icon-check"></i></i></span></span>
                                             </div>
                                          </li>
                                          <li class="task">
                                             <div class="task-container">
                                                <h4 class="task-label">Pay the electricity bills</h4><span class="task-action-btn"><span class="action-box large delete-btn" title="Delete Task"><i class="icon"><i class="icon-trash"></i></i></span><span class="action-box large complete-btn" title="Mark Complete"><i class="icon"><i class="icon-check"></i></i></span></span>
                                             </div>
                                          </li>
                                          <li class="task completed">
                                             <div class="task-container">
                                                <h4 class="task-label">Make dinner reservation</h4><span class="task-action-btn"><span class="action-box large delete-btn" title="Delete Task"><i class="icon"><i class="icon-trash"></i></i></span><span class="action-box large complete-btn" title="Mark Complete"><i class="icon"><i class="icon-check"></i></i></span></span>
                                             </div>
                                          </li>
                                          <li class="task">
                                             <div class="task-container">
                                                <h4 class="task-label">Meeting with photographer</h4><span class="task-action-btn"><span class="action-box large delete-btn" title="Delete Task"><i class="icon"><i class="icon-trash"></i></i></span><span class="action-box large complete-btn" title="Mark Complete"><i class="icon"><i class="icon-check"></i></i></span></span>
                                             </div>
                                          </li>
                                          <li class="task">
                                             <div class="task-container">
                                                <h4 class="task-label">Birthday wish to best friend</h4><span class="task-action-btn"><span class="action-box large delete-btn" title="Delete Task"><i class="icon"><i class="icon-trash"></i></i></span><span class="action-box large complete-btn" title="Mark Complete"><i class="icon"><i class="icon-check"></i></i></span></span>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="todo-list-footer">
                                       <div class="add-task-btn-wrapper"><span class="add-task-btn">
                                             <button class="btn btn-primary"><i class="icon-plus"></i> Add new task</button></span></div>
                                       <div class="new-task-wrapper">
                                          <textarea id="new-task" placeholder="Enter new task here. . ."></textarea><span class="btn btn-danger cancel-btn" id="close-task-panel">Close</span><span class="btn btn-success ms-3 add-new-task-btn" id="add-task">Add Task</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="notification-popup hide">
                                 <p><span class="task"></span><span class="notification-text"></span></p>
                              </div>
                           </div>
                           <!-- HTML Template for tasks-->
                           <script id="task-template" type="tect/template">
                              <li class="task">
                      <div class="task-container">
                      <h4 class="task-label"></h4>
                      <span class="task-action-btn">
                      <span class="action-box large delete-btn" title="Delete Task">
                      <i class="icon"><i class="icon-trash"></i></i>
                      </span>
                      <span class="action-box large complete-btn" title="Mark Complete">
                      <i class="icon"><i class="icon-check"></i></i>
                      </span>
                      </span>
                      </div>
                      </li>
                    </script>
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
   <script src="../assets/js/todo/todo.js"></script>
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