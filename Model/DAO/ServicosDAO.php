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
    public function ShowReservationServices(ReservaServices $servico){
        try {
            $sql = "SELECT * FROM reservaservico JOIN cliente ON cliente.id_cliente = reservaservico.id_cliente 
            JOIN servicos ON servicos.id_servico = reservaservico.id_servico WHERE reservaservico.id_cliente = :id_cliente;";
            $SQL_procedure = DBConnection::getConnection()->prepare($sql);
            $SQL_procedure->bindValue(":id_cliente", $servico->getIdCliente());
            $SQL_procedure->execute();
            $servicos = $SQL_procedure->fetchAll(PDO::FETCH_ASSOC);

            return $servicos;
        } catch (\Throwable $th) {
            echo "Erro ao mostrar os dados".$th->getMessage();
        }
    }

    public function AddReservaService(ReservaServices $service){
        try {
            session_start();
            $sql = "INSERT INTO reservaservico(id_servico,id_cliente,Nome,Sobrenome,data_entrada,data_saida)VALUES(:id_servico,:id_cliente,:Nome,:Sobrenome,:data_entrada,:data_saida);";
            $sql_procedure = DBConnection::getConnection()->prepare($sql);
            $sql_procedure->bindValue(":id_servico",$service->getIdServico());
            $sql_procedure->bindValue(":id_cliente",$service->getIdCliente());
            $sql_procedure->bindValue(":Nome",$service->getNome());
            $sql_procedure->bindValue(":Sobrenome",$service->getSobrenome());
            $sql_procedure->bindValue(":data_entrada",$service->getdata_entrada());
            $sql_procedure->bindValue(":data_saida",$service->getdata_saida());
            $sql_procedure->execute();

            if($sql_procedure->rowCount()>0) {
                $_SESSION["status"] = "Success";
            }else{
                $_SESSION["status"] = "Failed";
            }
            header("Location: /TILH/View/ReservaServices.php");
            exit;
        } catch (\Throwable $th) {
            echo "".$th->getMessage();
        }
    }
}