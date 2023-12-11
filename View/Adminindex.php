<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../View/Suport/Sneat/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../View/Suport/Sneat/vendor/css/theme-default.css"
    class="template-customizer-core-css" />
  <link rel="stylesheet" href="../View/Suport/Sneat/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../View/Suport/Sneat/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="../View/Suport/Sneat/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="../View/Suport/Sneat/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../View/Suport/Sneat/js/config.js"></script>
</head>
<?php
include ("../Controller/Links.php");
session_start();
$admin = new AdminDAO();
$result = $admin->ShowCurrentGuest();
?>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="Adminindex.php" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">TILH Admin</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item active">
            <a href="index.html" class="menu-link">
            <?xml version="1.0" ?><svg id="Layer_1" style="enable-background:new 0 0 24 24;" width="24" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M21.146,8.576l-7.55-6.135c-0.925-0.751-2.267-0.751-3.192,0c0,0,0,0,0,0L2.855,8.575C2.59,8.79,2.439,9.108,2.439,9.448  v11.543c0,0.62,0.505,1.13,1.125,1.13h5.062c0.62,0,1.125-0.51,1.125-1.13v-7.306h4.499v7.306c0,0.62,0.505,1.13,1.125,1.13h5.062  c0.62,0,1.125-0.51,1.125-1.13V9.448C21.561,9.108,21.41,8.79,21.146,8.576z M20.436,20.997h-5.062V13.68  c0-0.62-0.505-1.119-1.125-1.119H9.75c-0.62,0-1.125,0.499-1.125,1.119v7.317H3.564V9.448l7.55-6.134  c0.513-0.418,1.26-0.417,1.773,0l7.55,6.134V20.997z"/></svg>
              <div data-i18n="Analytics">  Main Page</div>
              
            </a>
          </li>

          <!-- Layouts -->
          <li class="menu-item">
            <a href="QuartoAdmin.php" class="menu-link">
            <?xml version="1.0" ?>
                            <svg data-name="Layer 1" id="Layer_1" width="28" viewBox="0 0 512 512"
                              xmlns="http://www.w3.org/2000/svg">
                              <title />
                              <path
                                d="M414.86,151.41H97.14a3.87,3.87,0,0,0-3.87,3.87V329a3.87,3.87,0,0,0,3.87,3.87h16.55v23.81a3.88,3.88,0,0,0,3.88,3.87H392.64a3.87,3.87,0,0,0,3.87-3.87V332.91h18.35a3.87,3.87,0,0,0,3.87-3.87V155.28A3.87,3.87,0,0,0,414.86,151.41ZM411,159.15V305.22h-10.3a16.33,16.33,0,0,0,2.56-8.74V283.87a16.5,16.5,0,0,0-16.48-16.49H373.4a16.9,16.9,0,0,0,2.81-9.34v-51A17.1,17.1,0,0,0,359.13,190H269.21A17,17,0,0,0,256,196.36,17,17,0,0,0,242.79,190H152.87a17.1,17.1,0,0,0-17.08,17.08v51a16.9,16.9,0,0,0,2.81,9.34H125.24a16.5,16.5,0,0,0-16.48,16.49v12.61a16.33,16.33,0,0,0,2.56,8.74H101V159.15ZM116.51,296.48V283.87a8.75,8.75,0,0,1,8.73-8.74H386.76a8.75,8.75,0,0,1,8.73,8.74v12.61a8.75,8.75,0,0,1-8.73,8.74H125.24A8.75,8.75,0,0,1,116.51,296.48Zm27-38.44v-51a9.35,9.35,0,0,1,9.34-9.34h89.92a9.35,9.35,0,0,1,9.34,9.34v51a9.35,9.35,0,0,1-9.34,9.34H152.87A9.35,9.35,0,0,1,143.53,258Zm116.34-51a9.35,9.35,0,0,1,9.34-9.34h89.92a9.35,9.35,0,0,1,9.34,9.34v51a9.35,9.35,0,0,1-9.34,9.34H269.21a9.35,9.35,0,0,1-9.34-9.34Zm128.9,145.8H121.44V332.91H388.77ZM411,325.16H101V313H411Z" />
                            </svg>
              <div data-i18n="Layouts">Quarto</div>
            </a>
          </li>
            <!-- Extended components -->
          <li class="menu-item">
        
              <div data-i18n="Extended UI">Extended UI</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                  <div data-i18n="Perfect Scrollbar">Perfect scrollbar</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="extended-ui-text-divider.html" class="menu-link">
                  <div data-i18n="Text Divider">Text Divider</div>
                </a>
              </li>
            </ul>
          </li>

          <li class="menu-item">
            <a href="icons-boxicons.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-crown"></i>
              <div data-i18n="Boxicons">Boxicons</div>
            </a>
          </li>
            </ul>
          </li>
        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                  aria-label="Search..." />
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <li class="nav-item lh-1 me-3">
                <a class="github-button" href="https://github.com/themeselection/sneat-html-admin-template-free"
                  data-icon="octicon-star" data-size="large" data-show-count="true"
                  aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- / Navbar -->
        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-6 mb-4">
                <div class="row">
                  <div class="col-4 mb-4">
                    <?php
                        foreach($admin->ShowAllClients() as $key){ 
                      ?>
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                              <path
                                d="M12 2.5a5.5 5.5 0 0 1 3.096 10.047 9.005 9.005 0 0 1 5.9 8.181.75.75 0 1 1-1.499.044 7.5 7.5 0 0 0-14.993 0 .75.75 0 0 1-1.5-.045 9.005 9.005 0 0 1 5.9-8.18A5.5 5.5 0 0 1 12 2.5ZM8 8a4 4 0 1 0 8 0 4 4 0 0 0-8 0Z">
                              </path>
                            </svg>
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                              <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Clientes</span>
                        <h3 class="card-title mb-2">
                          <?php echo $key;?>
                        </h3>
                      </div>
                    </div>
                    <?php
                        }
                      ?>
                  </div>
                  <div class="col-4 mb-4">
                    <?php
                        foreach($admin->ShowAllRoomsReservation() as $key){ 
                      ?>
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <?xml version="1.0" ?>
                            <svg id="calendar-date-appontment-booking-reservation"
                              style="enable-background:new 0 0 15 15.5;" width="24" version="1.1" viewBox="0 0 15 15.5"
                              xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink">
                              <path
                                d="M12,1.5V0h-1v1.5H4V0H3v1.5H0v6v8h15v-8v-6H12z M1,2.5h2V4h1V2.5h7V4h1V2.5h2v4H1V2.5z M14,14.5H1v-7h13V14.5z" />
                            </svg>
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                              <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Reserva Quarto</span>
                        <h3 class="card-title mb-2">
                          <?php echo $key;?>
                        </h3>
                      </div>
                    </div>
                    <?php
                        }
                        ?>
                  </div>
                  <div class="col-4 mb-4">
                    <?php
                        foreach($admin->ShowCountRooms() as $key){ 
                      ?>
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <?xml version="1.0" ?>
                            <svg data-name="Layer 1" id="Layer_1" viewBox="0 0 512 512"
                              xmlns="http://www.w3.org/2000/svg">
                              <title />
                              <path
                                d="M414.86,151.41H97.14a3.87,3.87,0,0,0-3.87,3.87V329a3.87,3.87,0,0,0,3.87,3.87h16.55v23.81a3.88,3.88,0,0,0,3.88,3.87H392.64a3.87,3.87,0,0,0,3.87-3.87V332.91h18.35a3.87,3.87,0,0,0,3.87-3.87V155.28A3.87,3.87,0,0,0,414.86,151.41ZM411,159.15V305.22h-10.3a16.33,16.33,0,0,0,2.56-8.74V283.87a16.5,16.5,0,0,0-16.48-16.49H373.4a16.9,16.9,0,0,0,2.81-9.34v-51A17.1,17.1,0,0,0,359.13,190H269.21A17,17,0,0,0,256,196.36,17,17,0,0,0,242.79,190H152.87a17.1,17.1,0,0,0-17.08,17.08v51a16.9,16.9,0,0,0,2.81,9.34H125.24a16.5,16.5,0,0,0-16.48,16.49v12.61a16.33,16.33,0,0,0,2.56,8.74H101V159.15ZM116.51,296.48V283.87a8.75,8.75,0,0,1,8.73-8.74H386.76a8.75,8.75,0,0,1,8.73,8.74v12.61a8.75,8.75,0,0,1-8.73,8.74H125.24A8.75,8.75,0,0,1,116.51,296.48Zm27-38.44v-51a9.35,9.35,0,0,1,9.34-9.34h89.92a9.35,9.35,0,0,1,9.34,9.34v51a9.35,9.35,0,0,1-9.34,9.34H152.87A9.35,9.35,0,0,1,143.53,258Zm116.34-51a9.35,9.35,0,0,1,9.34-9.34h89.92a9.35,9.35,0,0,1,9.34,9.34v51a9.35,9.35,0,0,1-9.34,9.34H269.21a9.35,9.35,0,0,1-9.34-9.34Zm128.9,145.8H121.44V332.91H388.77ZM411,325.16H101V313H411Z" />
                            </svg>
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                              <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Rooms</span>
                        <h3 class="card-title mb-2">
                          <?php echo $key;?>
                        </h3>
                      </div>
                    </div>
                    <?php
                        }
                      ?>
                  </div>
                </div>
              </div>
              <div class="col-2 mb-4">
                <?php
                        foreach($admin->ShowAllWorkers() as $key){ 
                      ?>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <?xml version="1.0" ?><svg id="Layer_1" style="enable-background:new 0 0 128 128;" version="1.1"
                          viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink">
                          <style type="text/css">
                            .st0 {
                              fill: #F1F2F4;
                            }

                            .st1 {
                              fill: #464C54;
                            }

                            .st2 {
                              fill: #C9C9C9;
                            }

                            .st3 {
                              fill: #F6CA47;
                            }

                            .st4 {
                              fill: #BFCC58;
                            }

                            .st5 {
                              fill: #FFFFFF;
                            }

                            .st6 {
                              fill: #627148;
                            }

                            .st7 {
                              fill: #0076B9;
                            }

                            .st8 {
                              fill: #00A6E4;
                            }

                            .st9 {
                              fill: none;
                              stroke: #FFFFFF;
                              stroke-width: 6;
                              stroke-linecap: round;
                              stroke-linejoin: round;
                              stroke-miterlimit: 10;
                            }

                            .st10 {
                              fill: #464C54;
                              stroke: #464C54;
                              stroke-width: 6;
                              stroke-linecap: round;
                              stroke-linejoin: round;
                              stroke-miterlimit: 10;
                            }

                            .st11 {
                              fill: #E8E8E8;
                            }

                            .st12 {
                              fill: #D65B36;
                            }

                            .st13 {
                              fill: #D65B4D;
                            }

                            .st14 {
                              fill: none;
                              stroke: #464C54;
                              stroke-width: 6;
                              stroke-linecap: round;
                              stroke-linejoin: round;
                              stroke-miterlimit: 10;
                            }
                          </style>
                          <g>
                            <g>
                              <path class="st5" d="M4,114v-6c0-4.42,3.58-8,8-8h16c4.42,0,8,3.58,8,8v6H4z" />
                            </g>
                            <g>
                              <circle class="st5" cx="20" cy="78" r="10" />
                            </g>
                            <g>
                              <path class="st5" d="M48,114v-6c0-4.42,3.58-8,8-8h16c4.42,0,8,3.58,8,8v6H48z" />
                            </g>
                            <g>
                              <circle class="st5" cx="64" cy="78" r="10" />
                            </g>
                            <g>
                              <path class="st5" d="M92,114v-6c0-4.42,3.58-8,8-8h16c4.42,0,8,3.58,8,8v6H92z" />
                            </g>
                            <g>
                              <circle class="st5" cx="108" cy="78" r="10" />
                            </g>
                            <g>
                              <circle class="st5" cx="42" cy="46" r="10" />
                            </g>
                            <g>
                              <circle class="st5" cx="86" cy="46" r="10" />
                            </g>
                            <g>
                              <circle class="st5" cx="64" cy="14" r="10" />
                            </g>
                            <g>
                              <path class="st1"
                                d="M36,117c-1.66,0-3-1.34-3-3v-6c0-2.76-2.24-5-5-5H12c-2.76,0-5,2.24-5,5v6c0,1.66-1.34,3-3,3s-3-1.34-3-3v-6    c0-6.07,4.93-11,11-11h16c6.07,0,11,4.93,11,11v6C39,115.66,37.66,117,36,117z" />
                            </g>
                            <g>
                              <path class="st1"
                                d="M20,91c-7.17,0-13-5.83-13-13s5.83-13,13-13s13,5.83,13,13S27.17,91,20,91z M20,71c-3.86,0-7,3.14-7,7    s3.14,7,7,7s7-3.14,7-7S23.86,71,20,71z" />
                            </g>
                            <g>
                              <path class="st1"
                                d="M80,117c-1.66,0-3-1.34-3-3v-6c0-2.76-2.24-5-5-5H56c-2.76,0-5,2.24-5,5v6c0,1.66-1.34,3-3,3s-3-1.34-3-3v-6    c0-6.07,4.93-11,11-11h16c6.07,0,11,4.93,11,11v6C83,115.66,81.66,117,80,117z" />
                            </g>
                            <g>
                              <path class="st1"
                                d="M64,91c-7.17,0-13-5.83-13-13s5.83-13,13-13s13,5.83,13,13S71.17,91,64,91z M64,71c-3.86,0-7,3.14-7,7    s3.14,7,7,7s7-3.14,7-7S67.86,71,64,71z" />
                            </g>
                            <g>
                              <path class="st1"
                                d="M124,117c-1.66,0-3-1.34-3-3v-6c0-2.76-2.24-5-5-5h-16c-2.76,0-5,2.24-5,5v6c0,1.66-1.34,3-3,3s-3-1.34-3-3    v-6c0-6.07,4.93-11,11-11h16c6.07,0,11,4.93,11,11v6C127,115.66,125.66,117,124,117z" />
                            </g>
                            <g>
                              <path class="st1"
                                d="M108,91c-7.17,0-13-5.83-13-13s5.83-13,13-13s13,5.83,13,13S115.17,91,108,91z M108,71c-3.86,0-7,3.14-7,7    s3.14,7,7,7s7-3.14,7-7S111.86,71,108,71z" />
                            </g>
                            <g>
                              <path class="st1"
                                d="M42,59c-7.17,0-13-5.83-13-13s5.83-13,13-13s13,5.83,13,13S49.17,59,42,59z M42,39c-3.86,0-7,3.14-7,7    s3.14,7,7,7s7-3.14,7-7S45.86,39,42,39z" />
                            </g>
                            <g>
                              <path class="st1"
                                d="M86,59c-7.17,0-13-5.83-13-13s5.83-13,13-13s13,5.83,13,13S93.17,59,86,59z M86,39c-3.86,0-7,3.14-7,7    s3.14,7,7,7s7-3.14,7-7S89.86,39,86,39z" />
                            </g>
                            <g>
                              <path class="st1"
                                d="M64,27c-7.17,0-13-5.83-13-13S56.83,1,64,1s13,5.83,13,13S71.17,27,64,27z M64,7c-3.86,0-7,3.14-7,7    s3.14,7,7,7s7-3.14,7-7S67.86,7,64,7z" />
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                          <a class="dropdown-item" href="javascript:void(0);">View More</a>
                          <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                      </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Funcionarios</span>
                    <h3 class="card-title mb-2">
                      <?php echo $key;?>
                    </h3>
                  </div>
                </div>
                <?php
                        }
                      ?>
              </div>
              <div class="col-2 mb-4">
                <?php
                        foreach($admin->ShowAllServicesReservation() as $key){ 
                      ?>
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <?xml version="1.0" ?>
                        <svg viewBox="0 0 20 20" width="24" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M18 11v7a2 2 0 0 1-4 0v-5h-2V3a3 3 0 0 1 3-3h3v11zM4 10a2 2 0 0 1-2-2V1a1 1 0 0 1 2 0v4h1V1a1 1 0 0 1 2 0v4h1V1a1 1 0 0 1 2 0v7a2 2 0 0 1-2 2v8a2 2 0 0 1-4 0v-8z" />
                        </svg>
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                          <a class="dropdown-item" href="javascript:void(0);">View More</a>
                          <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                      </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">R. Outros serviços</span>
                    <h3 class="card-title mb-2">
                      <?php echo $key;?>
                    </h3>
                  </div>
                </div>
                <?php
                        }
                      ?>
              </div>
            </div>
            <section>
              <div class="row d-flex align-items-center">
                <div class="col-4">
                  <div class="card" style="border-radius: 15px; background-color: #93e2bb;">
                    <div class="card-body p-4 text-black">
                      <div>
                        <h6 class="mb-4">Current Guest</h6>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                          <p class="small mb-0"><i class="far fa-clock me-2"></i>3 hrs
                          </p>
                          <p class="fw-bold mb-0">Room: <?php echo $result['NumQuarto'] ?></p>
                        </div>
                      </div>
                      <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0">
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-2.webp"
                            alt="Generic placeholder image" class="img-fluid rounded-circle border border-dark border-3"
                            style="width: 70px;">
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="d-flex flex-row align-items-center mb-2">
                            <h4 class="mb-0 me-2"><?php echo $result['Nome'] ?> <?php echo $result['Sobrenome']?></h4>
                          </div>
                          <p class="mb-0 me-2">Bed: <?php echo $result['Categoria']?></p>
                        </div>
                      </div>
                      <div class="justify-content-between d-flex">
                        <p class="card-text">Check-in</p>
                        <p class="card-text">Check-out</p>
                      </div>
                      <div class="justify-content-between d-flex">
                        <h3><?php echo $result['data_entrada']?></h3>
                        <h3 class="card-text"><?php echo $result['data_saida']?></h3>
                      </div>
                      <hr class="bg-black"
                        style="width:100px; height:1px; margin-left: 35.6%; transform: rotate(90deg); margin-bottom: 2rem; margin-top: -20px;">
                      <div class="justify-content-between d-flex">
                        <p>13:00:00 PM</p>
                        <p>14:00:00 PM</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            
          </div>

          <!-- / Content -->

          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
              <div class="mb-2 mb-md-0">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                , made with ❤️ by
                <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
              </div>
              <div>
                <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                  target="_blank" class="footer-link me-4">Documentation</a>

                <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank"
                  class="footer-link me-4">Support</a>
              </div>
            </div>
          </footer>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <div class="buy-now">
    <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank"
      class="btn btn-danger btn-buy-now">Upgrade to Pro</a>
  </div>

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="../View/Suport/Sneat/vendor/libs/jquery/jquery.js"></script>
  <script src="../View/Suport/Sneat/vendor/libs/popper/popper.js"></script>
  <script src="../View/Suport/Sneat/vendor/js/bootstrap.js"></script>
  <script src="../View/Suport/Sneat/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="../View/Suport/Sneat/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../View/Suport/Sneat/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="../View/Suport/Sneat/js/main.js"></script>

  <!-- Page JS -->
  <script src="../View/Suport/Sneat/js/dashboards-analytics.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>