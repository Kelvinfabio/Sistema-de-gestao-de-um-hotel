<?php

class CategoriaQuartoDTO{
    private $id_categoriaquarto;
    private $Categoria;
    private $preco;

    public function getIdcategoriaQuarto(){
        return $this->id_categoriaquarto;
       }
       public function getCategoria(){
        return $this->Categoria;
       }
       public function getPreco(){
        return $this->preco;
       }
       public function setIdcategoriaQuarto($id_categoriaquarto){
           $this->id_categoriaquarto = $id_categoriaquarto;
            return $this;
       }
       public function setCategoria($Categoria){
        $this->Categoria = $Categoria;
         return $this;
    }
    public function setPreco($preco){
        $this->preco = $preco;
         return $this;
    }
}