<?php
include("../Controller/Links.php");
$quarto = new QuartoController();
$id_reservaquarto = $_POST["id_reservaquarto"];
$motivo = $_POST["cancelar"];
$quarto->DeleteReservaQuarto($id_reservaquarto,$motivo);

