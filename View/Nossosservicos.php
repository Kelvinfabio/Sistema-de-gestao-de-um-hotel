<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sona | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../View/Suport/TILH/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../View/Suport/TILH/css/font-awesome.min.css" type="text/css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../View/Suport/TILH/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../View/Suport/TILH/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="../View/Suport/TILH/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../View/Suport/TILH/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../View/Suport/TILH/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../View/Suport/TILH/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../View/Suport/TILH/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../View/Suport/TILH/css/style.css" type="text/css">
</head>
<?php
include("../Controller/Links.php");
$quartoDAO = new QuartoDAO();
$quartoDTO = new ReservaQuartoDTO();
session_start();
if(isset($_SESSION['cliente'])) {
    $cliente = $_SESSION['cliente'];
}else{
    echo 'Nenhum resultado encontrado';
}
if(isset($_SESSION['reserva'])) {
    $reserva = $_SESSION['reserva'];
}else{
    echo 'Nenhum resultado de reserva encontrado';
}
?>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
            <div class="language-option">
                <img src="img/flag.jpg" alt="">
                <span>EN <i class="fa fa-angle-down"></i></span>
                <div class="flag-dropdown">
                    <ul>
                        <li><a href="#">Zi</a></li>
                        <li><a href="#">Fr</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="bk-btn">Booking Now</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="./rooms.html">Rooms</a></li>
                <li><a href="./about-us.html">About Us</a></li>
                <li><a href="./blog.html">Sua reserva</a></li>
                <li><a href="./blog.html">News</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> (+244) 943336417</li>
                            <li><i class="fa fa-envelope"></i>info.internationalluxuryhotel@contact.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <a href="sign-in.php" class="bk-btn">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="../View/Suport/TILH/img/logo1.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active"><a href="rooms.php">Rooms</a></li>
                                    <li><a href="./about-us.html">Comer & beber</a></li>
                                    <li><a href="RersevaQuarto.php">Sua reserva</a></li>
                                    <li><a href="./blog.html">Nossos serviços</a></li>
                                    <li><a href="./contact.html">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Nossos serviços</h2>
                        <div class="bt-option">
                            <a href="./home.html">Inicio</a>
                            <span>Nossos serviços</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Rooms Section Begin -->
    <section class="rooms-section spad">
    <div class="row">
        <div class="col-md-6 col-xl-4">
                  <div class="card bg-dark border-0 text-white">
                    <img class="card-img" src="../View/Suport/TILH/img/SPA.png" alt="Card image" />
                    <div class="card-img-overlay">
                      <h5 class="card-title">SPA </h5>
                      <p class="card-text">
                      Temos um serviços de SPA que vai lhe agradar completamente, faça a sua marcação e desfrute de um momento de relaxe.
                      </p>
                      <p class="card-text">Last updated 3 mins ago</p>
                      <div class="btn-wrapper">
                        <button class="btn btn-outline-danger">Ver serviço</button>
                     </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card bg-dark border-0 text-white">
                    <img class="card-img" src="../View/Suport/TILH/img/Reuniao.png" alt="Card image" />
                    <div class="card-img-overlay">
                      <h5 class="card-title">Marque uma reunião</h5>
                      <p class="card-text">
                        Marque uma reunião com o seu team dentro do The International Luxury Hotel e usufrua de um coffeebreak
                      </p>
                      <p class="card-text">Last updated 3 mins ago</p>
                      <div class="btn-wrapper">
                        <button class="btn btn-outline-danger">Ver serviço</button>
                     </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card bg-dark border-0 text-white">
                    <img class="card-img" src="../View/Suport/TILH/img/Pasta.png" alt="Card image" />
                    <div class="card-img-overlay">
                      <h5 class="card-title">Comida</h5>
                      <p class="card-text">
                       Marque uma reunião 
                      </p>
                      <p class="card-text">Last updated 3 mins ago</p>
                      <div class="btn-wrapper">
                        <button class="btn btn-outline-danger"  data-mdb-ripple-init data-mdb-ripple-color="dark">Ver Menu</button>
                     </div>
                    </div>
                  </div>
                </div>
        </div>
    </div>
    </section>

    <div class="col-lg-12">
        <div class="room-pagination">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">Next <i class="fa fa-long-arrow-right"></i></a>
        </div>
    </div>
    </div>
    </div>
    </section>
    <!-- Rooms Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <img src="../View/Suport/TILH/img/footer-logo-white.png" alt="">
                                </a>
                            </div>
                            <p>Nós inspiramos milhares de viajentes <br />atraves do nosso website, <a href="#">RESERVE
                                    AGORA</a> !!</p>
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contacta-Nos</h6>
                            <ul>
                                <li>+244 943336417</li>
                                <li>info.internationalluxuryhotel@contact.com</li>
                                <li>Av fidel de castro, talatona, edificio one metropolis</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>New latest</h6>
                            <p>Get the latest updates and offers.</p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container justify-content-center">
                <div class="row ">
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Environmental Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="../View/Suport/TILH/js/jquery-3.3.1.min.js"></script>
    <script src="../View/Suport/TILH/js/bootstrap.min.js"></script>
    <script src="../View/Suport/TILH/js/jquery.magnific-popup.min.js"></script>
    <script src="../View/Suport/TILH/js/jquery.nice-select.min.js"></script>
    <script src="../View/Suport/TILH/js/jquery-ui.min.js"></script>
    <script src="../View/Suport/TILH/js/jquery.slicknav.js"></script>
    <script src="../View/Suport/TILH/js/owl.carousel.min.js"></script>
    <script src="../View/Suport/TILH/js/main.js"></script>
    <script src="../View/Suport/TILH/Js/Sneat/vendor/libs/jquery/jquery.js"></script>
    <script src="../View/Suport/TILH/Js/Sneat/vendor/libs/popper/popper.js"></script>
    <script src="../View/Suport/TILH/Js/Sneat/vendor/js/bootstrap.js"></script>
    <script src="../View/Suport/TILH/Js/Sneat/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="J../View/Suport/TILH/s/Sneat/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../View/Suport/TILH/Js/Sneat/js/main.js"></script>
    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
        import { Button, initMDB } from "mdb-ui-kit";
        initMDB({ Button });
    </script>
    <style>
  .card {
    position: relative;
    overflow: hidden;
  }

  .card:hover img {
    transform: scale(1.1);
    filter: blur(5px);
  }

  .card:hover .card-img-overlay {
    bottom: 0;
  }

  .card-img {
    transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
  }

  .card-img-overlay {
    position: absolute;
    bottom: -100%;
    left: 0;
    right: 0;
    transition: bottom 0.3s ease-in-out;
  }

  .card-title,
  .card-text {
    transition: opacity 0.3s ease-in-out;
  }

  .card:hover .card-title,
  .card:hover .card-text,
  .card:hover .btn-wrapper {
    opacity: 1;
  }
  .btn-wrapper {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    opacity: 0;
  }
</style>
</body>

</html>