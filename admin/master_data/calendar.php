<?php
$page = "Calendar";
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
                        <h3>Calendar</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="javascript:;"> <i data-feather="database"></i></a></li>
                           <li class="breadcrumb-item">Master Data</li>
                           <li class="breadcrumb-item active"> Calendar</li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card box-shadow-title">
                        <div class="card-header">
                           <h5>Basic </h5>
                        </div>
                        <div class="d-flex event-calendar">
                           <div id="lnb">
                              <div class="lnb-new-schedule text-center">
                                 <button class="btn btn-primary" id="btn-new-schedule" type="button" data-bs-toggle="modal">New schedule</button>
                              </div>
                              <div class="lnb-calendars" id="lnb-calendars">
                                 <div>
                                    <div class="lnb-calendars-item">
                                       <label>
                                          <input class="tui-full-calendar-checkbox-square" type="checkbox" value="all" checked=""><span></span><strong>View all</strong>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="lnb-calendars-d1" id="calendarList"></div>
                              </div>
                           </div>
                           <div id="right">
                              <div id="menu">
                                 <div class="dropdown d-inline">
                                    <button class="btn btn-default btn-sm dropdown-toggle" id="dropdownMenu-calendarType" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="calendar-icon ic_view_month" id="calendarTypeIcon" style="margin-right: 4px;"></i><span id="calendarTypeName">Dropdown</span><i class="calendar-icon tui-full-calendar-dropdown-arrow"></i></button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu-calendarType">
                                       <li role="presentation"><a class="dropdown-menu-title" role="menuitem" data-action="toggle-daily"><i class="calendar-icon ic_view_day"></i>Daily</a></li>
                                       <li role="presentation"><a class="dropdown-menu-title" role="menuitem" data-action="toggle-weekly"><i class="calendar-icon ic_view_week"></i>Weekly</a></li>
                                       <li role="presentation"><a class="dropdown-menu-title" role="menuitem" data-action="toggle-monthly"><i class="calendar-icon ic_view_month"></i>Month</a></li>
                                       <li role="presentation"><a class="dropdown-menu-title" role="menuitem" data-action="toggle-weeks2"><i class="calendar-icon ic_view_week"></i>2 weeks</a></li>
                                       <li role="presentation"><a class="dropdown-menu-title" role="menuitem" data-action="toggle-weeks3"><i class="calendar-icon ic_view_week"></i>3 weeks</a></li>
                                       <li class="dropdown-divider" role="presentation"></li>
                                       <li role="presentation"><a role="menuitem" data-action="toggle-workweek"></a>
                                          <input class="tui-full-calendar-checkbox-square" type="checkbox" value="toggle-workweek" checked=""><span class="checkbox-title"></span>Show weekends
                                       </li>
                                       <li role="presentation"><a role="menuitem" data-action="toggle-start-day-1"></a>
                                          <input class="tui-full-calendar-checkbox-square" type="checkbox" value="toggle-start-day-1"><span class="checkbox-title"></span>Start Week on Monday
                                       </li>
                                       <li role="presentation"><a role="menuitem" data-action="toggle-narrow-weekend"></a>
                                          <input class="tui-full-calendar-checkbox-square" type="checkbox" value="toggle-narrow-weekend"><span class="checkbox-title"></span>Narrower than weekdays
                                       </li>
                                    </ul>
                                 </div><span id="menu-navi">
                                    <button class="btn btn-default btn-sm move-today" type="button" data-action="move-today">Today</button>
                                    <button class="btn btn-default btn-sm move-day" type="button" data-action="move-prev"><i class="calendar-icon ic-arrow-line-left" data-action="move-prev"></i></button>
                                    <button class="btn btn-default btn-sm move-day" type="button" data-action="move-next"><i class="calendar-icon ic-arrow-line-right" data-action="move-next"></i></button></span><span class="render-range" id="renderRange"></span>
                              </div>
                              <div id="calendar"></div>
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

   <script src="../assets/js/calendar/tui-code-snippet.min.js"></script>
   <script src="../assets/js/calendar/tui-time-picker.min.js"></script>
   <script src="../assets/js/calendar/tui-date-picker.min.js"></script>
   <script src="../assets/js/calendar/moment.min.js"></script>
   <script src="../assets/js/calendar/chance.min.js"></script>
   <script src="../assets/js/calendar/tui-calendar.js"></script>
   <script src="../assets/js/calendar/calendars.js"></script>
   <script src="../assets/js/calendar/schedules.js"></script>
   <script src="../assets/js/calendar/app.js"></script>
   <!-- Plugins JS Ends-->
   <!-- Theme js-->
   <script src="../assets/js/script.js"></script>
   <script src="../assets/js/theme-customizer/customizer.js"></script>
   <!-- Plugin used-->
</body>

</html>