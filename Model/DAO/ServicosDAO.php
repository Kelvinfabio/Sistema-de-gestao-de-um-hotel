<?php
class ServicosDAO extends DBConnection{
    
    public function ShowAll(){
        try{
            $sql = "SELECT * FROM servicos;";
            $Sql_procedure = DBConnection::getConnection()->prepare($sql);
            $Sql_procedure->execute();
            $lista = $Sql_procedure->fetchAll(PDO::FETCH_ASSOC);
            return $lista;
        }catch(\Throwable $th){
            print"Ocorreu um erro ao mostrar os serviços".$th->getMessage();;
            
        }
    }
    public function GetById(ServicosDTO $servico){
        try {
            $sql = "SELECT * FROM servicos WHERE id_servico=:id_servico";
            $SQL_procedure = DBConnection::getConnection()->prepare($sql);
            $SQL_procedure->bindValue(":id_servico", $servico->getIdservicos());
            $SQL_procedure->execute();
            $servicos = $SQL_procedure->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["servicos"] = $servicos;

            header("Location: /TILH/View/services-details.php");
            exit;
        } catch (\Throwable $th) {
            echo "Erro ao mostrar os dados".$th->getMessage();
        }
    }
}