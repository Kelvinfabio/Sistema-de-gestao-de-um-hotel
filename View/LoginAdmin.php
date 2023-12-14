<!DOCTYPE html>

<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>TILH Admin</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

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
  <link rel="stylesheet" href="../View/Suport/Sneat/vendor/css/pages/page-auth.css" />
  <!-- Helpers -->
  <script src="../View/Suport/Sneat/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../View/Suport/Sneat/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                  <span class="app-brand-text demo text-body fw-bolder">TILH</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Welcome to TILH Admin! </h4>
              <p class="mb-4">Please sign-in to your account To login with Admin</p>

              <form id="formAuthentication" class="mb-3" action="../Controller/LoginAdmin.php" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Email or Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="username"
                    placeholder="Enter your email or username"
                    autofocus
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

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

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <?php if (isset($_SESSION['status'])) {
          $status = $_SESSION['status'];
          if($status=="Failed"){
?>
  <script type="text/javascript">
		swal({
        title: "Erro",
        text: "Password ou Email estão errados",
        icon: "error",
        });
        </script>
<?php unset($_SESSION['status']); }}?>
  </body>
</html>
