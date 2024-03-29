<?php
class ClienteDAO extends DBConnection{
    public function create(ClienteDTO $cliente){
        try {
            session_start();
            $sql = "INSERT INTO cliente(nome,lastname,Email,password)VALUES(:nome,:lastname,:Email,:password)";
            $Sql_procedure = DBConnection::getConnection()->prepare($sql);
            $Sql_procedure->bindValue(":nome", $cliente->getNome());
            $Sql_procedure->bindValue(":lastname", $cliente->getSobrenome());
            $Sql_procedure->bindValue(":Email", $cliente->getEmail());
            $Sql_procedure->bindValue(":password", password_hash($cliente->getPassword(), PASSWORD_BCRYPT));
            $Sql_procedure->execute();
            
            if ($Sql_procedure->rowCount()>0) {
                $_SESSION["status"]= "Success";
            }else{
                $_SESSION["status"]= "Failed";
            }
            
            header("Location: /TILH/View/sign-up.php");    
            exit();
        } catch (Exception $th) {
        print "Ocorreu um erro ao cadastrar".$th->getMessage();
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
    public function Login(ClienteDTO $cliente){
        try {
            session_start();
            $sql = "SELECT id_cliente,Email,password FROM cliente WHERE Email=:Email ";
            $Sql_procedure = DBConnection::getConnection()->prepare($sql);
            $Sql_procedure->bindValue(":Email", $cliente->getEmail());
            $Sql_procedure->execute();
            $result = $Sql_procedure->fetch(PDO::FETCH_ASSOC);
                // Armazene os dados do quarto na sessã
            if($result && password_verify($cliente->getPassword(),$result['password'])){
                $_SESSION['cliente'] = $result;
            header("Location: /TILH/View/room-details.php");
            exit;
            }else{
                    $_SESSION["status"] = "Failed";
                    header("Location: /TILH/View/sign-in.php");
                    exit;
                }

        } catch (\Throwable $th) {
            echo "Erro ao fazer o login ".$th->getMessage();
        }
    }
    public function ListAll($linha){
        $cliente = new ClienteDTO();
        $cliente->setNome($linha["nome"]);
        $cliente->setId($linha["id_cliente"]);
        $cliente->setSobrenome($linha["sobrenome"]);
        $cliente->setemail($linha["email"]);



    }
     

}