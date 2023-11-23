<?php
include("../Controller/Links.php");

$quarto = new QuartoController();
$QuartoDAO = new QuartoDAO();
$QuartoDTO = new ReservaQuartoDTO();
$id_cliente = $_POST["id_cliente"];
$Nome = $_POST["Nome"];
$Sobrenome = $_POST["sobrenome"];
$id_quarto = $_POST["id_quarto"];
$data_entrada = $_POST["data_entrada"];
$data_saida = $_POST["data_saida"];
$NumQuartos = $_POST["NumQuartos"];
$NumHospedes = $_POST["NumHospedes"];
if(isset($id_cliente)&& isset($Nome)&& isset($Sobrenome) && isset($id_quarto) && isset($data_entrada) 
&& isset($data_saida) && isset($NumQuartos) && isset($NumHospedes)){
    $quarto->ReservaQuarto($id_cliente, $Nome, $Sobrenome, $id_quarto, $data_entrada, $data_saida, $NumQuartos, $NumHospedes);

    $quarto->VerReserva($id_cliente);
}


