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
include_once("../Controller/Links.php");

$quartoDTO = new CategoriaQuartoDTO();
$quartoDAO = new QuartoDAO();

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
                            <a href="index.php">
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
                                            <li><a href="./blog-details.html">R. Outros serviços</a></li>
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
                        <h2>Nossos Quartos</h2>
                        <div class="bt-option">
                            <a href="./home.html">Inicio</a>
                            <span>Quartos</span>
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
                    foreach ($quartoDAO->ReadAll() as $quarto):
                    
                        ?>
                <div class="col-lg-4 col-md-6">
                
                    <div class="room-item">
                        <img src="../View/Suport/TILH/img/room/room-1.jpg" alt="">
                        <div class="ri-text">
                            <h4> <?php echo $quarto->getCategoria(); ?></h4>
                            <h3><?php  echo $quarto->getPreco(); ?>kz<span>/Pornoite</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Capacidade:</td>
                                        <td>Maximo 3 pessoas</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Cama:</td>
                                        <td>King Beds</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Serviços:</td>
                                        <td> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="margin-bottom: 8px; fill: rgba(112, 112, 121, 1);">
                                            <path d="M12 6c3.537 0 6.837 1.353 9.293 3.809l1.414-1.414C19.874 5.561 16.071 4 12 4c-4.071.001-7.874 1.561-10.707 4.395l1.414 1.414C5.163 7.353 8.463 6 12 6zm5.671 8.307c-3.074-3.074-8.268-3.074-11.342 0l1.414 1.414c2.307-2.307 6.207-2.307 8.514 0l1.414-1.414z"></path>
                                            <path d="M20.437 11.293c-4.572-4.574-12.301-4.574-16.873 0l1.414 1.414c3.807-3.807 10.238-3.807 14.045 0l1.414-1.414z"></path><circle cx="12" cy="18" r="2"></circle></svg> Acesso ao wifi
                                            <br> 
                                            <?xml version="1.0" ?>
                                            <svg fill="none" height="20" stroke-width="1.5" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 15.5V12.7M10 12.7C10.4762 12.7 11.7143 12.7 12.8571 12.7C13.5714 12.7 15 12.7 15 10.6C15 8.5 13.5714 8.5 12.8571 8.5L10 8.5V12.7Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="10" stroke="currentColor"/></svg> Estacionamento
                                                <br>
                                                <?xml version="1.0" ?><svg height="20" viewBox="0 0 512 512" width="20" xmlns="http://www.w3.org/2000/svg"><title/>
                                                    <path d="M57.49,47.74,425.92,416.17a37.28,37.28,0,0,1,0,52.72h0a37.29,37.29,0,0,1-52.72,0l-90-91.55A32,32,0,0,1,274,354.91v-5.53a32,32,0,0,0-9.52-22.78l-11.62-10.73a32,32,0,0,0-29.8-7.44h0A48.53,48.53,0,0,1,176.5,295.8L91.07,210.36C40.39,159.68,21.74,83.15,57.49,47.74Z" style="fill:none;stroke:#707079;stroke-linejoin:round;stroke-width:32px"/>
                                                    <path d="M400,32l-77.25,77.25A64,64,0,0,0,304,154.51v14.86a16,16,0,0,1-4.69,11.32L288,192" style="fill:none;stroke:#707079;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><path d="M320,224l11.31-11.31A16,16,0,0,1,342.63,208h14.86a64,64,0,0,0,45.26-18.75L480,112" style="fill:none;stroke:#707079;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/>
                                                    <line style="fill:none;stroke:#707079;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" x1="440" x2="360" y1="72" y2="152"/><path d="M200,368,100.28,468.28a40,40,0,0,1-56.56,0h0a40,40,0,0,1,0-56.56L128,328" style="fill:none;stroke:#707079;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
                                                        Restaurante
                                                </td>
                                    </tr>
                                </tbody>
                            </table>
                            <form action="../Controller/IdQuarto.php" method="post">
                                <input type="hidden" value="<?php echo $quarto->getIdcategoriaQuarto();?>" name="id_quarto">
                                <button type="submit" class="btn btn-primary">Reservar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
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
                            <p>Nós inspiramos milhares de viajentes <br />atraves do nosso website, <a href="#">RESERVE AGORA</a> !!</p>
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
</body>

</html>