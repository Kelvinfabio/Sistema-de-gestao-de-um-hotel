<?php
include("../Controller/Links.php");

$Quarto = new AdminController();

$id_categoria = $_POST["id_categoria"];
$NumQuarto = $_POST["NumQuarto"];
$andar = $_POST["andar"];

$Quarto->AddQuarto($id_categoria,$NumQuarto,$andar);
?>