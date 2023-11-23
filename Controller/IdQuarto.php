<?php
require_once '../Model/DAO/DBConnection.php';
include_once("../model/DTO/QuartoDTO.php");
include_once("../Controller/QuartoController.php");
include_once("../model/DAO/QuartoDAO.php");

    $quarto = new QuartoController();

$idquarto = $_POST["id_quarto"];
if((isset($idquarto))){
    $quarto->GetbyId($idquarto);
}
