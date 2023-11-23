<?php
class ReservaQuartoDTO{
    private $id_reservaquarto;
    private $id_cliente;
    private $nome;
    private $Sobrenome;
    private $id_endereco;
    private $id_quarto;
    private $data_entrada;
    private $data_saida;
    private $NumQuarto;
    private $NumHospedes;

    public function getIdReservaQuarto(){
        return $this->id_reservaquarto;
    }
    public function setIdReservaQuarto($id_reservaquarto){
        $this->id_reservaquarto = $id_reservaquarto;
    }
    public function getId_cliente(){
        return $this->id_cliente;
    }
    public function setIdCliente($id_cliente){
        $this->id_cliente = $id_cliente;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getSobrenome(){
        return $this->Sobrenome;
    }
    public function setSobrenome($Sobrenome){
        $this->Sobrenome = $Sobrenome;
    }
    public function getId_endereco(){
        return $this->id_endereco;
    }
    public function setId_endereco($id_endereco){
        $this->id_endereco = $id_endereco;
    }
    public function getId_quarto(){
        return $this->id_quarto;
    }
    public function setId_quarto($id_quarto){
        $this->id_quarto = $id_quarto;
    }
    public function getData_entrada(){
        return $this->data_entrada;
    }
    public function setData_entrada($data_entrada){
        $this->data_entrada = $data_entrada;
    }
    public function getData_Saida(){
        return $this->data_saida;
    }
    public function setData_saida($data_saida){
        $this->data_saida = $data_saida;
    }
    public function getNumQuartos(){
        return $this->NumQuarto;
    }
    public function setNumQuartos($num_quartos){
        $this->NumQuarto = $num_quartos;
    }
    public function getNumHospedes(){
        return $this->NumHospedes;
    }
    public function setNumHospedes($num_hospedes){
        $this->NumHospedes = $num_hospedes;
    }



}