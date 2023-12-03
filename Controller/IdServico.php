<?php

include_once("../Controller/Links.php");


$servico = new ServicoController();
$idServico = $_POST['id_servico'];
if((isset($idServico))){
    $servico->GetById($idServico);
}
