<?php

class ClienteDTO{
    private $id;
    private $nome;
    private $sobrenome;
    private $Email;
    private $password;

public function __construct($nome = null,$sobrenome=null,$Email=null, $password=null){
    $this->setNome($nome);
    $this->setSobrenome($sobrenome);
    $this->setEmail($Email);
    $this->setPassword($password);
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function setSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
        return $this;
    }
    public function getEmail(){
        return $this->Email;
    }
    public function setEmail($Email){
        $this->Email = $Email;
    }

    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password = $password;
        return $this;
    }

}