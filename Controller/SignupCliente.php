<?php
require_once '../Controller/ClienteController.php';
require_once '../Model/DAO/DBConnection.php';
require_once '../Model/DAO/ClienteDAO.php';
require_once '../Model/DTO/ClienteDTO.php';

$cliente = new ClienteController();

if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $Nome = $_POST['Nome'];
    $Sobrenome = $_POST['Sobrenome'];
    $Email = $_POST['Email'];
    $password = $_POST['password'];

    $cliente->signUP($Nome, $Sobrenome,$Email,$password);
}

?>