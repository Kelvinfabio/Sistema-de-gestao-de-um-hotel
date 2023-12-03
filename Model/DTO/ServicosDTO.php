<?php

class ServicosDTO{
    private $id_servico;
    private $Nome;
    private $Descricao;
    private $preco;
    private $img;

    public function getIdservicos(){
        return $this->id_servico;
    }
    public function getNome(){
        return $this->Nome;
    }
    public function getDescricao(){
        return $this->Descricao;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function getImg(){
        return $this->img;
    }
    public function setIdservicos($id_servico){
        $this->id_servico = $id_servico;
        return $this;
    }
    public function setDescricao($Descricao){
        $this->Descricao = $Descricao;
        return $this;
    }
    public function setPreco($preco){
        $this->preco = $preco;
        return $this;
    }
    public function setImg($img){
        $this->img = $img;
        return $this;
    }

}