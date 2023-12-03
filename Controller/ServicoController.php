<?php
include_once("../Controller/Links.php");
class ServicoController{

    public function GetById($id_servico){
        try {
            $servicoDTO = new ServicosDTO();
            $servico = new ServicosDAO();
            $servicoDTO->setIdservicos($id_servico);
            $servico->GetById($servicoDTO);
            
        } catch (\Throwable $th) {
            echo "Error em mostrar ".$th->getMessage();
        }
        
    }
}