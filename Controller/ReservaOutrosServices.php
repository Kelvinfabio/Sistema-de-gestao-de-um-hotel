<?php
include("../Controller/Links.php");

$reserva = new ServicoController();
$id_servico  = $_POST["id_servico"];
$id_cliente = $_POST["id_cliente"];
$Nome = $_POST["nome"];
$Sobrenome = $_POST["sobrenome"];
$data_entrada = $_POST["data_entrada"];
$data_saida = $_POST["data_saida"];
$reserva->AddReservaServices($id_servico,$id_cliente,$Nome,$Sobrenome,$data_entrada,$data_saida);