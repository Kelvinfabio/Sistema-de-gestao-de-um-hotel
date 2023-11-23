<?php
class PessoaDAO extends DBConnection{
    public function create(PessoaDTO $pessoa){
        try {
            $sql = "INSERT INTO pessoa(nome,sobronome,idade,username,passe)VALUES(:nome,:sobrenome,:numero,:email)";
            $Sql_procedure = DBConnection::getConnection()->prepare($sql);
            $Sql_procedure->bindValue(":nome", $cliente->getNome());
            $Sql_procedure->bindValue(":sobrenome", $cliente->getSobrenome());
            $Sql_procedure->bindValue(":numero", $cliente->getnumero());
            $Sql_procedure->bindValue(":email", $cliente->getemail());
        } catch (Exception $th) {
        print "Ocorreu um erro ao cadastrar";
        }
    }
    public function update(ClienteDTO $cliente){    
    }
    public function delete(ClienteDTO $cliente){
        try {
            $sql = "DELETE FROM usuario Where id = :id";
            $Sql_procedure = DBConnection::getConnection()->prepare($sql);
            $Sql_procedure->bindValue(":id", $cliente->getId());

            return $Sql_procedure->execute();
        } catch (\Throwable $th) {
            print "Ocorreu um erro ao actualizar";
        }
    }
    public function ReadAll(){
        try {
            $sql = "SELECT id,nome,sobrenome,numero,email,data_nasci FROM usuarios";
            $Sql_procedure = DBConnection::getConnection()->query($sql);
            $lista = $Sql_procedure->fetchAll(PDO::FETCH_ASSOC);
            $aux_list = array();
            foreach ($lista as $key) {
                $aux_list[] = $this->ListAll($key);
            }
            return $aux_list;
            
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function ListAll($linha){
        $cliente = new ClienteDTO();
        $cliente->setNome($linha["nome"]);
        $cliente->setSobrenome($linha["sobrenome"]);
        $cliente->setnumero($linha["numero"]);
        $cliente->setemail($linha["email"]);



    }
     

}