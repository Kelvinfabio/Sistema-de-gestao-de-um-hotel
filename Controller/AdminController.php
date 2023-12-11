<?php
include("../Controller/Links.php");
class AdminController{

    public function AddQuarto($id_categoria,$NumQuarto,$andar){
        try {
            $quartoDTO = new QuartoDTO();
            $quartoDAO = new AdminDAO();
            $quartoDTO->setId_categoria($id_categoria);
            $quartoDTO->setNumQuarto($NumQuarto);
            $quartoDTO->setandar($andar);
            
            $quartoDAO->AddQuarto($quartoDTO);
        } catch (\Throwable $th) {
            echo "Erro".$th->getMessage();
        }
    }
}