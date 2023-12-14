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
$result = $admin->ShowAllReservationServices();
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
          <li class="menu-item ">
            <a href="Adminindex.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Main Page</div>
            </a>
          </li>

          <!-- Layouts -->
          <li class="menu-item">
            <a href="QuartoAdmin.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div data-i18n="Layouts">Quarto</div>
            </a>
          </li>
          <!-- Extended components -->
          <li class="menu-item ">
            <a href="ReservaQuartoAdmin.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div data-i18n="Layouts">R. de Quarto</div>
            </a>
          </li>
          <li class="menu-item active">
            <a href="R.OutrosServicosAdmin.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div data-i18n="Layouts">R. de outros serviços</div>
            </a>
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
            <div class="card">
              <h5 class="card-header">Reserva de Outros serviços</h5>
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Sobrenome</th>
                      <th>Tipo de serviço </th>
                      <th>Preco</th>
                      <th>Inicio</th>
                      <th>Fim</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <?php  
                        foreach($result as $key){
                    ?>
                    <tr>
                      <td>
                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>
                          <?php echo $key["Nome"]; ?>
                        </strong>
                      </td>
                      <td>
                        <?php echo $key["Sobrenome"]; ?>
                      </td>
                      <td>
                        <?php echo $key["nome"]; ?>
                      </td>
                      <td>
                          <?php echo $key["preco"]; ?>kz
                        </td>
                      <td>
                          <?php echo $key["data_entrada"]; ?>
                        </td>
                        <td>
                          <?php echo $key["data_saida"]; ?>
                        </td>
                      </td>
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
              <?php if(isset($_SESSION["status"])){
                    $status = $_SESSION["status"];
                      if($status=="Success"){ ?>
                <div style="margin-left: 10px;" class="mb-4 bs-toast toast fade show bg-danger fixed-bottom fixed-start"
                  role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="toast-header">
                    <i class="bx bx-bell me-2"></i>
                    <div class="me-auto fw-semibold"></div>
                    <small>11 mins ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                  <div class="toast-body">
                   Eliminação do quarto efectuada com sucesso.
                  </div>
                </div>
            <?php unset($_SESSION['status']);}}?>

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
      <a href="AddQuarto.php" target="_blank" class="btn btn-danger btn-buy-now">Add Quarto</a>
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