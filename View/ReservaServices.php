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
$serviceDAO = new ServicosDAO();
$serviceDTO = new ReservaServices();
session_start();
if(isset($_SESSION['cliente'])) {
    $cliente = $_SESSION['cliente'];
}else{
    echo 'Nenhum resultado encontrado';
}
$serviceDTO->setIdCliente($cliente["id_cliente"]);
$showReservation = $serviceDAO->ShowReservationServices($serviceDTO);
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
                <li><a href="./pages.html">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./room-details.html">Room Details</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                        <li><a href="#">Family Room</a></li>
                        <li><a href="#">Premium Room</a></li>
                    </ul>
                </li>
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
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> (+244) 943336417</li>
            <li><i class="fa fa-envelope"></i> info.internationalluxuryhotel@contact.com</li>
        </ul>
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
                            <a href="./index.php">
                                <img src="../View/Suport/TILH/img/logo1.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li><a href="./index.php">Home</a></li>
                                    <li class="active"><a href="rooms.php">Rooms</a></li>
                                    <li><a href="./about-us.html">Comer & beber</a></li>
                                    <li><a href="./pages.html">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="./room-details.html">Room Details</a></li>
                                            <li><a href="./blog-details.html">Blog Details</a></li>
                                            <li><a href="#">Family Room</a></li>
                                            <li><a href="#">Premium Room</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="./blog.html">News</a></li>
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
                        <h2>Sua Reserva</h2>
                        <div class="bt-option">
                            <a href="./home.html">Inicio</a>
                            <span>Sua reserva</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Rooms Section Begin -->
    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
                <?php 
                                        foreach($showReservation as $key => $value) {
                                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="../View/Suport/TILH/img/<?php echo $value['img']?>" alt="">
                        <div class="ri-text">
                            <h4>
                                <?php echo $value['nome'];?>
                            </h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Check-in: </td>
                                        <td>
                                            <?php echo $value['data_entrada'];?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Check-out:</td>
                                        <td>
                                            <?php echo $value['data_saida'];?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">preco:</td>
                                        <td>
                                            <?php echo $value['preco'];?>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                            <button type="button" class="btn primary-btn" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                <?xml version="1.0"?>
                                <svg class="feather feather-trash-2" style="color: #e14444;" fill="none"
                                    height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <polyline points="3 6 5 6 21 6" />
                                    <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                                    <line x1="10" x2="10" y1="11" y2="17" />
                                    <line x1="14" x2="14" y1="11" y2="17" />
                                </svg>
                            </button>
                            <!-- Button trigger modal -->

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="container py-5 h-100">
                                            <div
                                                class="row d-flex justify-content-center align-items-center h-100 text-center">
                                                <div class="col">
                                                    <!-- Button trigger modal -->

                                                    <!-- Modal -->
                                                    <div class="modal-header border-bottom-0">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <?xml version="1.0" ?><svg enable-background="new 0 0 32 32"
                                                                height="32px" id="Layer_1" version="1.1"
                                                                viewBox="0 0 32 32" width="32px" xml:space="preserve"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <g>
                                                                    <polyline fill="none"
                                                                        points="   649,137.999 675,137.999 675,155.999 661,155.999  "
                                                                        stroke="#FFFFFF" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                                        stroke-width="2" />
                                                                    <polyline fill="none"
                                                                        points="   653,155.999 649,155.999 649,141.999  "
                                                                        stroke="#FFFFFF" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                                        stroke-width="2" />
                                                                    <polyline fill="none"
                                                                        points="   661,156 653,162 653,156  "
                                                                        stroke="#FFFFFF" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                                        stroke-width="2" />
                                                                </g>
                                                                <g>
                                                                    <path
                                                                        d="M11.312,12.766c0.194,0.195,0.449,0.292,0.704,0.292c0.255,0,0.51-0.097,0.704-0.292c0.389-0.389,0.389-1.02,0-1.409   L4.755,3.384c-0.389-0.389-1.019-0.389-1.408,0s-0.389,1.02,0,1.409L11.312,12.766z" />
                                                                    <path
                                                                        d="M17.407,16.048L28.652,4.793c0.389-0.389,0.389-1.02,0-1.409c-0.389-0.389-1.019-0.561-1.408-0.171L15.296,15   c0,0-0.296,0-0.296,0s0,0.345,0,0.345L3.2,27.303c-0.389,0.389-0.315,1.02,0.073,1.409c0.194,0.195,0.486,0.292,0.741,0.292   s0.528-0.097,0.722-0.292L15.99,17.458l11.249,11.255c0.194,0.195,0.452,0.292,0.706,0.292s0.511-0.097,0.705-0.292   c0.389-0.389,0.39-1.02,0.001-1.409L17.407,16.048z" />
                                                                </g>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-start text-black p-4">
                                                        <h5 class="modal-title text-uppercase mb-5"
                                                            id="exampleModalLabel">
                                                            <?php echo $value["Nome"];?>
                                                            <?php echo $value["Sobrenome"];?>
                                                        </h5>
                                                        <h4 class="mb-5" style="color: #35558a;">Thanks for your order
                                                        </h4>
                                                        <p class="mb-0" style="color: #35558a;">Payment summary</p>
                                                        <hr class="mt-2 mb-4"
                                                            style="height: 0; background-color: transparent; opacity: .75; border-top: 2px dashed #9e9e9e;">

                                                        <div class="d-flex justify-content-between">
                                                            <p class="fw-bold mb-0">Quarto: ;?></p>
                                                            <p class="text-muted mb-0">
                                                                <?php echo $value["preco"];?>
                                                            </p>
                                                        </div>

                                                        <div class="d-flex justify-content-between">
                                                            <p class="small mb-0">Shipping</p>
                                                            <p class="small mb-0">$175.00</p>
                                                        </div>

                                                        <div class="d-flex justify-content-between pb-1">
                                                            <p class="small">Tax</p>
                                                            <p class="small">$200.00</p>
                                                        </div>

                                                        <div class="d-flex justify-content-between">
                                                            <p class="fw-bold">Total</p>
                                                            <p class="fw-bold" style="color: #35558a;">$2125.00</p>
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

                </div>
                <?php
                                        }?>
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
    </script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if(isset($_SESSION["status"])){
                    $status = $_SESSION["status"];
                      if($status=="Success"){ ?>
  <script type="text/javascript">
	var status = "Success";
		swal({
        title: "Sucesso",
        text: "Agendamento de serviços foi efectuado com sucesso",
        icon: "success",
        });
        </script>
<?php unset($_SESSION['status']);}}?>
</body>

</html>