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
    <link rel="stylesheet" href="../View/Suport/TILH/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../View/Suport/TILH/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="../View/Suport/TILH/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../View/Suport/TILH/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../View/Suport/TILH/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../View/Suport/TILH/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../View/Suport/TILH/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../View/Suport/TILH/css/style.css" type="text/css">
    <link rel="stylesheet" href="../View/Suport/TILH/js/vendor/css/core.css" class="template-customizer-core-css" />
</head>
<?php
include("../Controller/Links.php");
$quartoDTO = new QuartoDTO();
$quarto = new QuartoDAO();
$clienteDAO = new ClienteDAO();
$clienteDTO = new ClienteDTO();
session_start();
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
            <li><i class="fa fa-phone"></i> (12) 345 67890</li>
            <li><i class="fa fa-envelope"></i> info.colorlib@gmail.com</li>
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
                            <li><i class="fa fa-envelope"></i> info.internationalluxuryhotel@contact.com</li>
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
                            <a href="#" class="bk-btn">Reserve agora</a>
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
                                <img src="img/logo1.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active"><a href="./rooms.html">Rooms</a></li>
                                    <li><a href="./about-us.html">Comer e Beber</a></li>
                                    <li><a href="ReservaQuarto.php">Sua reserva</a></li>
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
                            <a href="./home.html">Home</a>
                            <span>Rooms</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Room Details Section Begin -->
    <section class="room-details-section spad">
        <div class="container" style="max-width: 1400px;">
            <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
              <span class="dot"></span>
              <hr class="flex-fill track-line"><span class="dot"></span>
              <hr class="flex-fill track-line"><span class="dot"></span>
              <hr class="flex-fill track-line"><span class="dot"></span>
              <hr class="flex-fill track-line"><span
                class="d-flex justify-content-center align-items-center big-dot dot">
                <i class="fa fa-check text-white"></i></span>
            </div>
            <form action="../Controller/ReservaQuarto.php" method="post" class="form" id="form1">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-5 col-xl-4">
                            <div class="card shadow-none bg-transparent border border-gray-100 mb-3">
                                <div class="card-body">
                                    <?php
                                    // Verifique se os dados do quarto estão na sessão
                                    if(isset($_SESSION['dadosDoQuarto'])) {
                                        $dadosDoQuarto = $_SESSION['dadosDoQuarto'];
                                        foreach($dadosDoQuarto as $key => $value) {
                                        ?>
                                    <h5 class="card-title">Dados do quarto</h5>
                                    <p class="card-text"
                                        style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;"><?php echo $value['Descricao']?></p>
                                    <p class="card-text" style="font-weight: bold;">Detalhes: Maximo 2 pessoas, Casa de
                                        banho king, FrigoBar...</p>
                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24"
                                            style="margin-bottom: 8px; fill: rgba(112, 112, 121, 1);">
                                            <path
                                                d="M12 6c3.537 0 6.837 1.353 9.293 3.809l1.414-1.414C19.874 5.561 16.071 4 12 4c-4.071.001-7.874 1.561-10.707 4.395l1.414 1.414C5.163 7.353 8.463 6 12 6zm5.671 8.307c-3.074-3.074-8.268-3.074-11.342 0l1.414 1.414c2.307-2.307 6.207-2.307 8.514 0l1.414-1.414z">
                                            </path>
                                            <path
                                                d="M20.437 11.293c-4.572-4.574-12.301-4.574-16.873 0l1.414 1.414c3.807-3.807 10.238-3.807 14.045 0l1.414-1.414z">
                                            </path>
                                            <circle cx="12" cy="18" r="2"></circle>
                                        </svg> Acesso ao wifi
                                        <br>
                                        <?xml version="1.0" ?>
                                        <svg fill="none" height="20" stroke-width="1.5" viewBox="0 0 24 24" width="20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 15.5V12.7M10 12.7C10.4762 12.7 11.7143 12.7 12.8571 12.7C13.5714 12.7 15 12.7 15 10.6C15 8.5 13.5714 8.5 12.8571 8.5L10 8.5V12.7Z"
                                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                            <circle cx="12" cy="12" r="10" stroke="currentColor" />
                                        </svg> Estacionamento
                                        <br>
                                        <?xml version="1.0" ?><svg height="20" viewBox="0 0 512 512" width="20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <title />
                                            <path
                                                d="M57.49,47.74,425.92,416.17a37.28,37.28,0,0,1,0,52.72h0a37.29,37.29,0,0,1-52.72,0l-90-91.55A32,32,0,0,1,274,354.91v-5.53a32,32,0,0,0-9.52-22.78l-11.62-10.73a32,32,0,0,0-29.8-7.44h0A48.53,48.53,0,0,1,176.5,295.8L91.07,210.36C40.39,159.68,21.74,83.15,57.49,47.74Z"
                                                style="fill:none;stroke:#707079;stroke-linejoin:round;stroke-width:32px" />
                                            <path
                                                d="M400,32l-77.25,77.25A64,64,0,0,0,304,154.51v14.86a16,16,0,0,1-4.69,11.32L288,192"
                                                style="fill:none;stroke:#707079;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                            <path
                                                d="M320,224l11.31-11.31A16,16,0,0,1,342.63,208h14.86a64,64,0,0,0,45.26-18.75L480,112"
                                                style="fill:none;stroke:#707079;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                            <line
                                                style="fill:none;stroke:#707079;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                x1="440" x2="360" y1="72" y2="152" />
                                            <path
                                                d="M200,368,100.28,468.28a40,40,0,0,1-56.56,0h0a40,40,0,0,1,0-56.56L128,328"
                                                style="fill:none;stroke:#707079;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                        </svg> Restaurante
                                    </p>
                                    <?php }
                                    }else{
                                        echo "Nenhum dado do quarto encontrado.";
                                    } ?>
                                </div>
                            </div>
                            <div class="card shadow-none bg-transparent border border-gray-100 mb-3">
                                <?php
                                    // Verifique se os dados do quarto estão na sessão
                                    if(isset($_SESSION['dadosDoQuarto'])) {
                                        $dadosDoQuarto = $_SESSION['dadosDoQuarto'];
                                        foreach($dadosDoQuarto as $key => $value) {
                                        ?>
                                <div class="card-body">
                                    <p class="card-title">Resumo Do Preço</p>
                                    <div class="card-title " style="padding-bottom: 20px;">
                                        <h6 class="card-text text-align-end"
                                            style="font-family: Arial, Helvetica, sans-serif; font-weight: bold; ">Preço</h6>
                                        <h3 class="card-text text-align-end"
                                            style="font-family: Arial, Helvetica, sans-serif; font-weight: bold; text-align: end;">   <?php echo $value['preco']?>kz</h3>
                                    </div>
                                    <p class="card-text" style="font-weight: bold;">Informação sobre o preço</p>
                                    <?xml version="1.0" ?><svg viewBox="0 0 24 14.92" width="20" height="20" xmlns="http://www.w3.org/2000/svg">
                                        <title/><g data-name="Camada 2" id="Camada_2">
                                            <g data-name="Camada 1" id="Camada_1-2">
                                                <path d="M23.5,4H22V2.5a.5.5,0,0,0-.5-.5H20V.5a.5.5,0,0,0-.5-.5H.5A.5.5,0,0,0,0,.5v9.91a.5.5,0,0,0,.5.5H2v1.5a.5.5,0,0,0,.5.5H4v1.5a.5.5,0,0,0,.5.5h19a.5.5,0,0,0,.5-.5V4.5A.5.5,0,0,0,23.5,4ZM15.8,9.91H4.2A3.74,3.74,0,0,0,1,6.71V4.2A3.74,3.74,0,0,0,4.2,1H15.8A3.74,3.74,0,0,0,19,4.2V6.71A3.74,3.74,0,0,0,15.8,9.91ZM19,7.71V9.91H16.79A2.76,2.76,0,0,1,19,7.71ZM19,1V3.21A2.76,2.76,0,0,1,16.79,1ZM1,1H3.21A2.76,2.76,0,0,1,1,3.21ZM1,7.71A2.76,2.76,0,0,1,3.21,9.91H1Zm2,3.21H19.5a.5.5,0,0,0,.5-.5V3h1v8.91H3Zm20,3H5v-1H21.5a.5.5,0,0,0,.5-.5V5h1Z"/>
                                                <path d="M10,2.06a3.39,3.39,0,1,0,3.39,3.39A3.4,3.4,0,0,0,10,2.06Zm0,5.78a2.39,2.39,0,1,1,2.39-2.39A2.39,2.39,0,0,1,10,7.85Z"/></g></g></svg> <p>Inclui US$122,73 em taxas e impostos 10 % IVA</p>
                                </div>
                                <?php }
                                    }else{
                                        echo "Nenhum dado do quarto encontrado.";
                                    } ?>
                            </div>
                            <div class="card shadow-none bg-transparent border border-gray-100 mb-3">
                                <div class="card-body">
                                    <p class="card-title" style="font-weight: bold;">O seu plano de pagamento</p>
                                     <p style="font-weight: bold; color: #57c370;">Não é necessário pagar hoje. Pagará durante a sua estadia.</p>
                                </div>
                            </div>
                            <div class="card shadow-none bg-transparent border border-gray-100 mb-3">
                                <div class="card-body">
                                    <p class="card-title" style="font-weight: bold;">Quanto vai custar o cancelamento?</p>
                                     <p style="font-weight: bold; color: #57c370;">Cancelamento gratuito antes de .... de ....</p>
                                     <p >A partir das 00:00 de 19 de dez.          US$675</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-8">
                            <div class="card shadow-none bg-transparent border border-gray-100 mb-3">
                                <div class="card-body mg-8" style="padding-bottom: 1px">
                                <?php 
                                    if(isset($_SESSION['cliente'])){
                                        $cliente = $_SESSION['cliente'];
                                ?>
                                    <h5><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                                height="24">
                                                <path
                                                    d="M12 2.5a5.5 5.5 0 0 1 3.096 10.047 9.005 9.005 0 0 1 5.9 8.181.75.75 0 1 1-1.499.044 7.5 7.5 0 0 0-14.993 0 .75.75 0 0 1-1.5-.045 9.005 9.005 0 0 1 5.9-8.18A5.5 5.5 0 0 1 12 2.5ZM8 8a4 4 0 1 0 8 0 4 4 0 0 0-8 0Z">
                                                </path>
                                            </svg> <?php echo $cliente['Email']; ?></h5>
                                
                                    <?php }
                                     else{
                                     ?>
                                        <div class="row"><a href="sign-in.php">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                                height="24">
                                                <path
                                                    d="M12 2.5a5.5 5.5 0 0 1 3.096 10.047 9.005 9.005 0 0 1 5.9 8.181.75.75 0 1 1-1.499.044 7.5 7.5 0 0 0-14.993 0 .75.75 0 0 1-1.5-.045 9.005 9.005 0 0 1 5.9-8.18A5.5 5.5 0 0 1 12 2.5ZM8 8a4 4 0 1 0 8 0 4 4 0 0 0-8 0Z">
                                                </path>
                                            </svg>
                                            Inicie Sessão
                                        </a>
                                        <p>Para reservar com os seus dados guardados ou registe-se para gerir as suas
                                            reservas em qualquer lugar! </p>

                                    </div>
                                        <?php } ?>
                                </div>
                            </div>
                            <div class="card shadow-none bg-transparent border border-gray-100 mb-3">
                                <div class="card-body mg-8" style="padding-bottom: 1px;">
                                    <h5 style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">Insira os
                                     dados da reserva </h5>
                                    
                                        <input type="hidden" name="accao" value="insert">
                                        <div class="row">
                                            <div class="mb-3 col-lg-6">
                                                <br>
                                                <label for="">Name</label>
                                                <input type="text" name="Nome" id="nome" class="form-control">
                                            </div>
                                            <div class="mb-3 col-6">
                                                <br>
                                                <label for="">Sobrenome</label>
                                                <input type="text" name="sobrenome" id="nome" class="form-control">
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <br>
                                                <label for="">Endereço de email</label>
                                                <input type="text" name="email" id="nome" class="form-control"
                                                    placeholder="info@gmail.com">
                                            </div>
                                        </div>
                                        <div class="rd-reviews" style="padding-top: 10px;">
                                            <h5 class="mb-4"
                                                style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">A
                                                sua morada </h5>
                                            <p>É necessário que informe os seus dados de forma correcta </p>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-6">
                                                <label for="">Morada</label>
                                                <input type="text" name="Morada"
                                                    placeholder="Av 21 de janeiro, Morro Bento" id="nome"
                                                    class="form-control">
                                            </div>
                                            <div class="mb-3 col-6">
                                                <label for="">Cidade</label>
                                                <input type="text" name="cidade" placeholder="Luanda" id="nome"
                                                    class="form-control">
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label for="">País/Região</label>
                                                <br>
                                                <select name="Pais" id="" class="form-select">
                                                    <option value="Angola">Angola</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="Africa do sul">Africa do sul</option>
                                                    <option value="Cabo Verde">Cabo Verde</option>
                                                    <option value="São tome e principe">São tome e principe</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label for="">Número</label>
                                                <input type="tel" name="numero" id="numero" placeholder="+244 93555500"
                                                    class="form-control">
                                            </div>
                                        </div><?php
                                        if(isset($_SESSION['cliente'])) {
                                            $cliente = $_SESSION['cliente'];
                                        ?>
                                        <input name="id_cliente" type="hidden" value="<?php echo $cliente['id_cliente'] ?>">
                                        <?php 
                                    }else{
                                        echo"Nao foi encontrado nenhum resultado";}?>
                                    <?php if(isset($_SESSION['dadosDoQuarto'])) {
                                        $dadosDoQuarto = $_SESSION['dadosDoQuarto'];
                                        foreach($dadosDoQuarto as $key => $value) {
                                        ?>
                                        <input type="hidden" name="id_quarto" value="<?php echo $value["id_quarto"];?>">
                                    <?php }
                                    }?>
                                </div>
                            </div>
                            <div class="card shadow-none bg-transparent border border-gray-100 mb-3">
                                <div class="card-body">
                                    <h4 class="card-title" style="font-weight: bold;">Informação útil:</h4>
                                    <div class="rd-reviews" style="padding: 10px;">
                                    <p class="card-text"
                                        style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">Premium
                                        King Room</p>
                                    <p class="card-text" style="font-weight: bold;">Detalhes: Maximo 2 pessoas, Casa de
                                        banho king, FrigoBar...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- REVIEWS-->
                    <div class="rd-reviews">
                        <h4>Reviews</h4>
                        <div class="review-item">
                            <div class="ri-pic">
                                <img src="img/room/avatar/avatar-1.jpg" alt="">
                            </div>
                            <div class="ri-text">
                                <span>27 Aug 2019</span>
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5>Brandon Kelley</h5>
                                <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et dolore
                                    magnam.</p>
                            </div>
                        </div>
                        <div class="review-item">
                            <div class="ri-pic">
                                <img src="img/room/avatar/avatar-2.jpg" alt="">
                            </div>
                            <div class="ri-text">
                                <span>27 Aug 2019</span>
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5>Brandon Kelley</h5>
                                <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et dolore
                                    magnam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                <div class="room-booking">
                        <h3>Your Reservation</h3>
                            <div class="check-date">
                                <label for="date-in">Check In:</label>
                                <input type="text" class="date-input" id="date-in" name="data_entrada">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Check Out:</label>
                                <input type="text" class="date-input" id="date-out" name="data_saida">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="select-option">
                                <label for="guest">Guests:</label>
                                <select id="guest" name="NumHospedes">
                                    <option value="1">1 Adult</option>
                                    <option value="2">2 Adults</option>
                                    <option value="3">3 Adults</option>
                                    <option value="4">4 Adults</option>
                                </select>
                            </div>
                            <div class="select-option">
                                <label for="room">Room:</label>
                                <select id="room" name="NumQuartos">
                                    <option value="1">1 Room</option>
                                    <option value="2">2 Room</option>
                                    <option value="3">3 Room</option>
                                    <option value="4">4 Room</option>
                                    <option value="5">5 Room</option>
                                    <option value="6">+6 Room</option>
                                </select>
                            </div>
                            <button type="submit">Reservar</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </section>
    <!-- Room Details Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <img src="img/footer-logo-white.png" alt="">
                                </a>
                            </div>
                            <p>We inspire and reach millions of travelers<br /> across 90 local websites</p>
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
                                <li>(+244) 943336417</li>
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
                    <div class="col-lg-5">
                        <div class="co-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                                template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
                                    href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
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
    <script src="../View/Suport/TILH/js/ui-modals.js"></script>

    <script src="../View/Suport/TILH/Js/Sneat/vendor/libs/jquery/jquery.js"></script>
    <script src="../View/Suport/TILH/Js/Sneat/vendor/libs/popper/popper.js"></script>
    <script src="../View/Suport/TILH/Js/Sneat/vendor/js/bootstrap.js"></script>
    <script src="../View/Suport/TILH/Js/Sneat/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="J../View/Suport/TILH/s/Sneat/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../View/Suport/TILH/Js/Sneat/js/main.js"></script>
    <style>
        .track-line {
height: 2px !important;
background-color: #488978;
opacity: 1;
}

.dot {
height: 10px;
width: 10px;
margin-left: 3px;
margin-right: 3px;
margin-top: 0px;
background-color: #57c370;
border-radius: 50%;
display: inline-block
}

.big-dot {
height: 25px;
width: 25px;
margin-left: 0px;
margin-right: 0px;
margin-top: 0px;
background-color: #488978;
border-radius: 50%;
display: inline-block;
}

.big-dot i {
font-size: 12px;
}

.card-stepper {
z-index: 0
}
    </style>
</body>

</html>