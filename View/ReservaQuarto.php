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
$quartoDTO->setIdCliente($cliente["id_cliente"]);
$showReservation = $quartoDAO->Reserva($quartoDTO);
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
                                    <li class="active"><a href="./index.php">Home</a></li>
                                    <li><a href="rooms.php">Rooms</a></li>
                                    <li><a href="Comer&Beber.php">Comer & Beber</a></li>
                                    <li><a href="#">Sua Reserva</a>
                                        <ul class="dropdown">
                                            <li><a href="ReservaQuarto.php">R. Quarto</a></li>
                                            <li><a href="ReservaServices.php">R. Outros serviços</a></li>
                                        </ul>
                                    </li>
                                    </li>
                                    <li><a href="Nossosservicos.php">Nossos Serviços</a>
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
                        <img src="../View/Suport/TILH/img/room/room-6.jpg" alt="">
                        <div class="ri-text">
                            <h4>
                                <?php echo $value['Categoria'];?>
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
                                        <td class="r-o">Nº quartos:</td>
                                        <td>
                                            <?php echo $value['NumQuartos'];?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Hospedes:</td>
                                        <td>
                                            <?php echo $value['NumHospedes'];?>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>

                            
                            
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalTop">
                          Cancelar
                        </button>
                            <div class="modal modal-top fade" id="modalTop" tabindex="-1">
                          <div class="modal-dialog">
                            <form class="modal-content" action="../Controller/DeleteReservaQaurto.php" method="POST">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalTopTitle">Cancelar Reserva</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                  style="border: none;"
                                >x</button>
                              </div>
                              <div class="modal-body">
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailSlideTop" class="form-label">Diga-nos o motivo do porquê que pretende cancelar a sua estadia.</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="cancelar"></textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <input type="hidden" name="id_reservaquarto" id="id_reservaquarto" value="<?php echo $value['id_reservaquarto'];?>">
                                <button type="submit" class="btn btn-primary">Save 
                                    </button>
                              </div>
                            </form>
                          </div>
                        </div>
                            <!-- Button trigger modal -->

                            <!-- Modal -->

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
    <script>
    var id_reservaquarto =document.getElementById("id_reservaquarto");
    document.getElementById("outro_input").value =id_reservaquarto;

    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if(isset($_SESSION["status"])){
                    $status = $_SESSION["status"];
                      if($status=="Success"){ ?>
    <script type="text/javascript">
        var status = "Success";
        swal({
            title: "Sucesso",
            text: "Agendamento do quarto foi efectuado com sucesso",
            icon: "success",
        });
    </script>
    <?php unset($_SESSION['status']);}}?>


</body>

</html>