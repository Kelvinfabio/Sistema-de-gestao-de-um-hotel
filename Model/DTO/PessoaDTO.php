<?php
class PessoaDTO{
    public $nome;
    public $Sobrenome;
    public $user;
    public $email;
    public $passe;

    public function __construct(){
    }
    public function getNome(){
        return $this->nome;
    }
    public function getSobrenome(){
        return $this->Sobrenome;
    }
    public function getUser(){
        return $this->user;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }
    public function setSobrenome($Sobrenome){
        $this->Sobrenome = $Sobrenome;
        return $this;
    }
    public function setUser($user){
        $this->user = $user;
        return $this;
    }
    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

}