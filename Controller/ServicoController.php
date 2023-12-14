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
    public function AddReservaServices($id_servico,$id_cliente,$Nome,$Sobrenome,$data_entrada,$data_saida){
        try {
            $servico = new ReservaServices();
            $servicoDAO = new ServicosDAO();
            $servico->setIdservicos($id_servico);
            $servico->setIdCliente($id_cliente);
            $servico->setNome($Nome);
            $servico->setSobrenome($Sobrenome);
            $servico->setdata_entrada($data_entrada);
            $servico->setdata_saida($data_saida);
            $servicoDAO->AddReservaService($servico);
        } catch (\Throwable $th) {
            echo "".$th->getMessage();
        }
    }
}