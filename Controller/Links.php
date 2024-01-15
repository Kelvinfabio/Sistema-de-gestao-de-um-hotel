<?php
require_once '../Controller/ClienteController.php';
require_once '../Model/DAO/DBConnection.php';
require_once '../Model/DAO/ClienteDAO.php';
require_once '../Model/DTO/ClienteDTO.php';

include_once("../model/DTO/QuartoDTO.php");
include_once("../Controller/QuartoController.php");
include_once("../model/DAO/QuartoDAO.php");

include_once("../Model/DTO/ReservaQuartoDTO.php");
include_once("../Model/DTO/CategoriaQuartoDTO.php");
include_once("../Model/DAO/ServicosDAO.php");
include_once("../Model/DTO/ServicosDTO.php");
include_once("../Controller/ServicoController.php");
include_once("../Model/DAO/AdminDAO.php");
include_once("../Controller/AdminController.php");
include_once("../Model/DTO/ReservaServices.php");
include_once("../Model/DTO/FuncionarioDTO.php");
include_once("../Model/DTO/CancelarReservaDTO.php");