<?php
class ClienteController{
    public function signUP($Nome,$Sobrenome,$Email,$password){
        try {
            $cliente = new ClienteDAO();
            $clienteDTO = new ClienteDTO($Nome,$Sobrenome, $Email, $password);
            $cliente->create($clienteDTO);
        } catch (\Throwable $th) {
            print 'Erro ao cadastrar os dados'. $th->getMessage();
        } 
    }
    public function login($email,$password){
        try { 
            $cliente = new ClienteDAO();
            $clienteDTO = new ClienteDTO();
            $clienteDTO->setEmail($email);
            $clienteDTO->setPassword($password);
            $cliente->Login($clienteDTO);
        } catch (\Throwable $th) {
        }
    }
}