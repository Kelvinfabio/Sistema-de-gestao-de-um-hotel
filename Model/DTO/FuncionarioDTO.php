<?php
class FuncionarioDTO{
    private $id_funcionario;
    private $turno;
    private $nome;
    private $sobrenome;
    private $username;
    private $password;

    public function getIdfuncionario(){
        return $this->id_funcionario;
    }
    public function getTurno(){
        return $this->turno;
    }
    public function getnome(){
        return $this->nome;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function getusername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setNome($Nome){
        $this->nome = $Nome;
        return $this;
    }
    public function setSobrenome($Sobrenome){
        $this->sobrenome = $Sobrenome;
        return $this;
    }
    public function setIdfuncionario($id_funcionario){
        $this->id_funcionario = $id_funcionario;
        return $this;
    }
    public function setUsername($username){
        $this->username = $username;
        return $this;
    }
    public function setPassword($password){
        $this->password = $password;
        return $this;
    }
    public function setturno($turno){
        $this->turno = $turno;
        return $this;
    }
}