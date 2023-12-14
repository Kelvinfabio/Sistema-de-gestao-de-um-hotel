<?php

class AdminDAO extends DBConnection{

    public function ShowAllClients(){
        try {
            $sql = "SELECT COUNT(id_cliente) FROM cliente";
            $sql_procedure = DBConnection::getConnection()->prepare($sql);
            $sql_procedure->execute();
            $result = $sql_procedure->fetch(PDO::FETCH_ASSOC);

            return $result;
        } catch (\Throwable $th) {
            echo "".$th->getMessage();
        }

    }
    public function ShowCountRooms(){
        try {
            $sql = "SELECT COUNT(id_quarto) FROM quarto";
            $sql_procedure = DBConnection::getConnection()->prepare($sql);
            $sql_procedure->execute();
            $result = $sql_procedure->fetch(PDO::FETCH_ASSOC);

            return $result;
        } catch (\Throwable $th) {
            echo "".$th->getMessage();
        }
    }
    public function ShowAllRoomsReservation(){
        try {
            $sql = "SELECT COUNT(id_reservaquarto) FROM reservaquarto";
            $sql_procedure = DBConnection::getConnection()->prepare($sql);
            $sql_procedure->execute();
            $result = $sql_procedure->fetch(PDO::FETCH_ASSOC);

            return $result;
        } catch (\Throwable $th) {
            echo "".$th->getMessage();
        }
    }
    public function ShowAllServicesReservation(){
        try {
            $sql = "SELECT COUNT(id_reservaservico) FROM reservaservico";
            $sql_procedure = DBConnection::getConnection()->prepare($sql);
            $sql_procedure->execute();
            $result = $sql_procedure->fetch(PDO::FETCH_ASSOC);

            return $result;
        } catch (\Throwable $th) {
            echo "".$th->getMessage();
        }
    }
    public function ShowAllWorkers(){
        try {
            $sql = "SELECT COUNT(id_funcionario) FROM funcionario";
            $sql_procedure = DBConnection::getConnection()->prepare($sql);
            $sql_procedure->execute();
            $result = $sql_procedure->fetch(PDO::FETCH_ASSOC);

            return $result;
        } catch (\Throwable $th) {
            echo "".$th->getMessage();
        }
    }
    public function ShowCurrentGuest(){
        try {
            $sql = "SELECT id_reservaquarto,id_cliente,Nome,Sobrenome,quarto.id_quarto,data_entrada,data_saida,NumQuartos,NumHospedes, categoriaquarto.Categoria, quarto.NumQuarto FROM reservaquarto 
            JOIN quarto ON quarto.id_quarto = reservaquarto.id_quarto
            JOIN categoriaquarto ON categoriaquarto.id_categoriaquarto = quarto.id_categoriaquarto
            order by id_reservaquarto DESC LIMIT 1;";
            $sql_procedure = DBConnection::getConnection()->prepare($sql);
            $sql_procedure->execute();
            $result = $sql_procedure->fetch(PDO::FETCH_ASSOC);
            
            return $result;
        } catch (\Throwable $th) {
            echo "".$th->getMessage();
        }
    }
    public function ShowAllRoms(){
        try {
            $sql = "SELECT * FROM quarto JOIN categoriaquarto ON categoriaquarto.id_categoriaquarto = quarto.id_categoriaquarto ORDER BY id_quarto ASC;";
            $sql_procedure = DBConnection::getConnection()->prepare($sql);
            $sql_procedure->execute();
            $result = $sql_procedure->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (\Throwable $th) {
            echo "".$th->getMessage();
        }
    }
    public function ShowAllCategoria(){
        try {
            $sql = "SELECT * FROM categoriaquarto;";
            $sql_procedure = DBConnection::getConnection()->prepare($sql);
            $sql_procedure->execute();
            $result = $sql_procedure->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (\Throwable $th) {
            echo "".$th->getMessage();
        }
    }
    public function AddQuarto(QuartoDTO $quartoDTO){
        try {
            session_start();
            $sql = "INSERT INTO quarto(id_categoriaquarto,NumQuarto,andar)VALUES(:id_categoriaquarto,:NumQuarto,:andar)";
            $Sql_procedure = DBConnection::getConnection()->prepare($sql);
            $Sql_procedure->bindValue(":id_categoriaquarto",$quartoDTO->getId_categoria());
            $Sql_procedure->bindValue(":NumQuarto",$quartoDTO->getNumQuarto());
            $Sql_procedure->bindValue(":andar",$quartoDTO->getandar());
            $Sql_procedure->execute();

            if($Sql_procedure->rowCount()>0){
                $_SESSION['status'] = "Success";
            }else{
                $_SESSION['status'] = "failed";
            }

            header("Location: /TILH/View/AddQuarto.php");
            exit();
        } catch (\Throwable $th) {
            echo "".$th->getMessage();
        }
    }
    public function AddCategoria(CategoriaQuartoDTO $categoria){
        try {
            session_start();
            $sql = "INSERT INTO categoriaquarto(categoria,preco)VALUES(:categoria,:preco)";
            $sql_procedure = DBConnection::getConnection()->prepare($sql);
            $sql_procedure->bindValue(":categoria",$categoria->getCategoria());
            $sql_procedure->bindValue(":preco",$categoria->getPreco());
            $sql_procedure->execute();

            if($sql_procedure->rowCount()>0){
                $_SESSION["status"] = "Success";
            }else{
                $_SESSION["status"] = "Failed";
            }
            header("Location: /TILH/View/AddCategoria.php");
            exit();
        } catch (\Throwable $th) {
            //throw $th;
        }

    }
    public function DeleteQuarto(QuartoDTO $quartoDTO){
        try {
            session_start();
            $sql = "DELETE FROM quarto Where id_quarto = :id_quarto";
            $sql_procedure = DBConnection::getConnection()->prepare($sql);
            $sql_procedure->bindValue(":id_quarto",$quartoDTO->getId());
            $sql_procedure->execute();

            if($sql_procedure->rowCount()>0){
                $_SESSION["status"] = "Success";
            }else{
                $_SESSION["status"] = "Failed";
            }
            
            header("Location: /TILH/View/QuartoAdmin.php");
            exit();
        } catch (\Throwable $th) {
            echo "".$th->getMessage();
        }
    }
    public function Login(FuncionarioDTO $funcionario){
        try {
            session_start();
            $sql = "SELECT id_funcionario,username,password FROM funcionario WHERE username=:username and password=:password ";
            $Sql_procedure = DBConnection::getConnection()->prepare($sql);
            $Sql_procedure->bindValue(":username", $funcionario->getusername());
            $Sql_procedure->bindValue(":password", $funcionario->getPassword());
            $Sql_procedure->execute();
            $result = $Sql_procedure->fetch(PDO::FETCH_ASSOC);
                // Armazene os dados do quarto na sessão
            if($result){
                $_SESSION['funcionario'] = $result;
            header("Location: /TILH/View/Adminindex.php");
            exit;
            }else{
                    $_SESSION["status"] = "Failed";
                    header("Location: /TILH/View/LoginAdmin.php");
                    exit;
                }

        } catch (\Throwable $th) {
            echo "Erro ao fazer o login ".$th->getMessage();
        }
    }
    public function ShowAllReservationServices(){
        try {
            $sql = "SELECT * FROM reservaservico JOIN cliente ON cliente.id_cliente = reservaservico.id_cliente 
            JOIN servicos ON servicos.id_servico = reservaservico.id_servico;";
            $sql_procedure = DBConnection::getConnection()->prepare($sql);
            $sql_procedure->execute();
            $result = $sql_procedure->fetchAll(PDO::FETCH_ASSOC);

            return $result;

        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function ShowAllRoomsReservations(){
        try {
            $sql = "SELECT * FROM reservaquarto JOIN cliente ON cliente.id_cliente = reservaquarto.id_cliente 
            JOIN quarto ON quarto.id_quarto = reservaquarto.id_quarto 
            JOIN categoriaquarto ON categoriaquarto.id_categoriaquarto = quarto.id_categoriaquarto ;";
            $sql_procedure = DBConnection::getConnection()->prepare($sql);
            $sql_procedure->execute();
            $result = $sql_procedure->fetchAll(PDO::FETCH_ASSOC);

            return $result;

        } catch (\Throwable $th) {
            //throw $th;
        }
    }

}