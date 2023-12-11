<?php

class QuartoDTO{
    private $id_quarto;
    private $id_categoria;
    private $NumQuarto;
    private $andar;
public function __construct() {
    }
    public function getId() {
        return $this->id_quarto;
    }
    public function getId_categoria() {
        return $this->id_categoria;
    }
    public function getNumQuarto() {
        return $this->NumQuarto;
    }
    public function getandar() {
        return $this->andar;
    }
    public function setandar($andar) {
        $this->andar = $andar;
        return $this;
    }
    public function setNumQuarto($NumQuarto) {
        $this->NumQuarto = $NumQuarto;
        return $this;
    }
    public function setId($id) {
        $this->id_quarto = $id;
        return $this;
    }
    public function setId_categoria($id_categoria){
        $this->id_categoria = $id_categoria;
        return $this;
    }
    
    



}