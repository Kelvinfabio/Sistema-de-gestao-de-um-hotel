<?php

class QuartoDTO{
    public $id;
    public $NumQuarto;
    public $Descricao;
    public $andar;
    public $preco;
public function __construct() {
    }
    public function getId() {
        return $this->id;
    }
    public function getNumQuarto() {
        return $this->NumQuarto;
    }
    public function getDescricao() {
        return $this->Descricao;
    }
    public function getandar() {
        return $this->andar;
    }
    public function getPreco() {
        return $this->preco;
    }
    public function setDescricao($Descricao) {
        $this->Descricao = $Descricao;
        return $this;
    }
    public function setandar($andar) {
        $this->andar = $andar;
        return $this;
    }
    public function setPreco($preco) {
        $this->preco = $preco;
        return $this;
    }
    public function setNumQuarto($NumQuarto) {
        $this->NumQuarto = $NumQuarto;
        return $this;
    }
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    
    



}