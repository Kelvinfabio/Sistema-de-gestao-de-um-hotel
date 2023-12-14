<!DOCTYPE html>
<html lang="pt-pt">

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

$quarto = new QuartoController();
?>
<body>
    <!-- Page Preloder -->

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon  search-switch">
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
    <header class="header-section">
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
                                    <li class="active"><a href="./index.php">Home</a></li>
                                    <li><a href="<?= $quarto->quarto();?>">Rooms</a></li>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>The International Luxury Hotel</h1>
                        <p>As tuas viagens têm um lugar agora para ti, faça a sua reserva agora e garanta o seu espaço
                            no melhor hotel da cidade de luanda.</p>
                        <a href="#" class="primary-btn">Discover Now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    <div class="booking-form">
                        <h3>Reserve já!</h3>
                        <form action="#">
                            <div class="check-date">
                                <label for="date-in">Check In:</label>
                                <input type="text" class="date-input" id="date-in">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Check Out:</label>
                                <input type="text" class="date-input" id="date-out">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="select-option">
                                <label for="guest">Hospedes:</label>
                                <select id="guest">
                                    <option value="">2 Adults</option>
                                    <option value="">3 Adults</option>
                                </select>
                            </div>
                            <div class="select-option">
                                <label for="guest">Crianças:</label>
                                <select id="guest">
                                    <option value="">0 </option>
                                    <option value="">1 </option>
                                    <option value="">2 </option>
                                    <option value="">3 </option>
                                </select>
                            </div>
                            <div class="select-option">
                                <label for="room">Room:</label>
                                <select id="room">
                                    <option value="">1 Room</option>
                                    <option value="">2 Room</option>
                                    <option value="">3 Room</option>
                                    <option value="">4 Room</option>
                                    <option value="">5 Room</option>
                                    <option value="">+6 Room</option>
                                </select>
                            </div>
                            <button type="submit">Check Availability</button>
                            <div class="loader"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="../View/Suport/TILH/img/hero/hero-1.jpg"></div>
            <div class="hs-item set-bg" data-setbg="../View/Suport/TILH/img/hero/hero-2.jpg"></div>
            <div class="hs-item set-bg" data-setbg="../View/Suport/TILH/img/hero/hero-3.jpg"></div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
    <section class="aboutus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span>Sobre Nos</span>
                            <h2>The International <br />Luxury Hotel</h2>
                        </div>
                        <p class="f-para">The International Luxury Hotel é um hotel para acomadação para viajantes 
                            que procuram pelo melhor em Angola. Nosso foco é fazer com que o cliente sinta-se satisfeito com os nossos serviços
                            .</p>
                        <p class="s-para">Temos o dominio de mais de 4 linguas, por isso sinta-se a vontade em comunicar conosco.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="../View/Suport/TILH/img/about/about-1.jpg" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img src="../View/Suport/TILH/img/about/about-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Services Section End -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>O QUE NOS TEMOS</span>
                        <h2>Descubra Os Nossos Serviços</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-036-parking"></i>
                        <h4>Travel Plan</h4>
                        <p>Faça os seus planos e conte conosco para o que for preciso.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-033-dinner"></i>
                        <h4>Catering Service</h4>
                        <p>Peça o seu Catering no conforto do seu quarto e deixa-nos brinda-lo com o melhor que temos a oferecer.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-026-bed"></i>
                        <h4>Babysitting</h4>
                        <p>Até a sua criança tem um espaço reservado no nosso hotel, confie agora e agradeç-nos depois com o serviço de Babysitting.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-024-towel"></i>
                        <h4>Laundry</h4>
                        <p>Podemos dar um jeito na sua roupa por isso, não se preocupe, cuidamos dela e entregamos para si da melhor forma possivel.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-044-clock-1"></i>
                        <h4>Hire Driver</h4>
                        <p>Quando quiser sair pode falar conosco que iremos leva-lo para aonde quiser e quando quiser.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-012-cocktail"></i>
                        <h4>Bar & Drink</h4>
                        <p>Temos uma variedade gigantesca de bebidas que podem usufruir a tempo inteiro, não se preocupa basta pedir e iremos servi-lo .</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Home Room Section Begin -->
    <section class="hp-room-section">
        <div class="container-fluid">
            <div class="hp-room-items">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="../View/Suport/TILH/img/room/room-b1.jpg">
                            <div class="hr-text">
                                <h3>Double Room</h3>
                                <h2>20.000kz<span>/Pornoite</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>30 ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max persion 5</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Cama:</td>
                                            <td>King Beds</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="../View/Suport/TILH/img/room/room-b2.jpg">
                            <div class="hr-text">
                                <h3>Premium King Room</h3>
                                <h2>15.000kz<span>/Pornoite</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>30 ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacidade:</td>
                                            <td>5 pessoas</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Cama:</td>
                                            <td>King beds</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Serviços:</td>
                                            <td>Wifi, Televisão, quarto de banho,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="../View/Suport/TILH/img/room/room-b3.jpg">
                            <div class="hr-text">
                                <h3>Deluxe Room</h3>
                                <h2>24.000kz<span>/Pornoite</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>30 ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacidade:</td>
                                            <td>5 Pessoas</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Cama:</td>
                                            <td>Cama King</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Serviços:</td>
                                            <td>Wifi, Televisão, quarto de banho,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="../View/Suport/TILH/img/room/room-b4.jpg">
                            <div class="hr-text">
                                <h3>Family Room</h3>
                                <h2>35.000kz<span>/Pornoite</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>30 ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>5 pessoas</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Cama:</td>
                                            <td>King Beds</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Serviços:</td>
                                            <td>Wifi, Televisão, quarto de banho, Varanda</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Room Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Testemunhos</span>
                        <h2>O Que Os Nossos Hospedes Disseram?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-slider owl-carousel">
                        <div class="ts-item">
                            <p>After a construction project took longer than expected, my husband, my daughter and I
                                needed a place to stay for a few nights. As a Chicago resident, we know a lot about our
                                city, neighborhood and the types of housing options available and absolutely love our
                                vacation at Sona Hotel.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Alexander Vasquez</h5>
                            </div>
                            <img src="img/testimonial-logo.png" alt="">
                        </div>
                        <div class="ts-item">
                            <p>After a construction project took longer than expected, my husband, my daughter and I
                                needed a place to stay for a few nights. As a Chicago resident, we know a lot about our
                                city, neighborhood and the types of housing options available and absolutely love our
                                vacation at Sona Hotel.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Alexander Vasquez</h5>
                            </div>
                            <img src="img/testimonial-logo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

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
                            <h6>Contact Us</h6>
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
            <div class="container">
                <div class="row">
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