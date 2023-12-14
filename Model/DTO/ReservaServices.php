<?php
class ReservaServices{

    private $id_reservaservico;
    private $id_Servico;
    private $id_Cliente;
    private $Nome;
    private $Sobrenome;
    private $data_entrada;
    private $data_saida;

    public function getIdServico(){
        return $this->id_Servico;
    }
    public function getIdCliente(){
        return $this->id_Cliente;
    }
    public function getNome(){
        return $this->Nome;
    }
    public function getSobrenome(){
        return $this->Sobrenome;
    }
    public function getdata_entrada(){
        return $this->data_entrada;
    }
    public function getdata_saida(){
        return $this->data_saida;
    }
    public function setIdservicos($id_servico){
        $this->id_Servico = $id_servico;
        return $this;
    }
    public function setIdCliente($id_cliente){
        $this->id_Cliente = $id_cliente;
        return $this;
    }
    public function setNome($Nome){
        $this->Nome = $Nome;
        return $this;
    }
    public function setSobrenome($Sobrenome){
        $this->Sobrenome = $Sobrenome;
        return $this;
    }
    public function setdata_entrada($data_entrada){
        $this->data_entrada = $data_entrada;
        return $this;
    }
    public function setdata_saida($data_saida){
        $this->data_saida = $data_saida;
        return $this;
    }
    

    
}