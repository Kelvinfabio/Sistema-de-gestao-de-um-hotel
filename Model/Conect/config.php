<?php
    define("HOST","localhost");
    define("USER","root");
    define("PASS","");
    define("BASE","crud");

    $conn = new mysqli(HOST,USER,PASS,BASE);
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }
    
    $conn->close();