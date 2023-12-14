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
    public function AddCategoria($categoria,$preco){
        try {
            $CategoriaDTO = new CategoriaQuartoDTO();
            $AdminDAO = new AdminDAO();
            $CategoriaDTO->setCategoria($categoria);
            $CategoriaDTO->setPreco($preco);
            $AdminDAO->AddCategoria($CategoriaDTO);
        } catch (\Throwable $th) {
            echo "".$th->getMessage();
        }

    }
    public function DeleteQuarto($id_quarto){
        try {
            $quarto = new QuartoDTO();
            $AdminDAO = new AdminDAO();
            $quarto->setId($id_quarto);
            $AdminDAO->DeleteQuarto($quarto);
        } catch (\Throwable $th) {
            echo "".$th->getMessage();
        }
    }
}