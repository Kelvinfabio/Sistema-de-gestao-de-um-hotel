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
$result = $admin->ShowAllCategoria();
if (isset($_SESSION['status'])) {
    $status = $_SESSION['status'];
}
?>
<input type="hidden" id="status" value="<?php ?>">
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
          <li class="menu-item active">
            <a href="QuartoAdmin.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div data-i18n="Layouts">Quarto</div>
            </a>
          </li>
            <!-- Extended components -->
          <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link">
              <i class="menu-icon tf-icons bx bx-copy"></i>
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
            <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Cadastrar Quarto</h5>
                    </div>
                    <div class="card-body">
                      <form action="../Controller/CadastroQuarto.php" method="POST">
                      <?php    ?>
                        <div class="mb-3">
                            
                                                <label for="">Categoria</label>
                                                <br>
                                                <select name="id_categoria" id="" class="form-select">
                                                    <?php foreach($result as $key){ ?>
                                                        <option value="<?php echo $key["id_categoriaquarto"]?>"><?php echo $key["Categoria"]?> || <?php echo $key["preco"]?>kz</option>
                                                    <?php } ?>
                                                </select>
                                                
                                            </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Nº Quarto</label>
                          <input type="text" class="form-control" name="NumQuarto" placeholder="ACME Inc." />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-email">Andar</label>
                          <div class="input-group input-group-merge">
                            <input
                              type="text"
                              id="basic-default-email"
                              class="form-control"
                              placeholder="john.doe"
                              aria-label="john.doe"
                              aria-describedby="basic-default-email2"
                              name="andar"
                            />
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                      </form>
                    </div>
                  </div>
                </div>
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
    <a href="AddCategoria.php" target="_blank"
      class="btn btn-danger btn-buy-now">Add Categoria</a>
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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <?php if($status=="Success"){?>
  <script type="text/javascript">
	var status = "Success";
		swal({
        title: "Sucesso",
        text: "Cadastro do quarto foi efectuado com sucesso",
        icon: "success",
        });
        </script>
<?php unset($_SESSION['status']); }?>
        
</body>

</html>