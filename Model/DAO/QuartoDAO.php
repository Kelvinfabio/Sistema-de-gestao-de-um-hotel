<?php
class QuartoDAO extends DBConnection{
    public function update(QuartoDTO $quarto){    
    }
    public function delete(QuartoDTO $quarto){
        try {
            $sql = "DELETE FROM quarto Where id = :id";
            $Sql_procedure = DBConnection::getConnection()->prepare($sql);
            $Sql_procedure->bindValue(":id", $quarto->getId());

            return $Sql_procedure->execute();
        } catch (\Throwable $th) {
            print "Ocorreu um erro ao actualizar";
        }
    }
    public function ReadAll(){
        try {
            $sql = "SELECT id_categoriaquarto,Categoria,preco FROM categoriaquarto";
            $Sql_procedure = DBConnection::getConnection()->query($sql);
            $lista = $Sql_procedure->fetchAll(PDO::FETCH_ASSOC);
            $aux_list = array();
            foreach ($lista as $key) {
                $aux_list[] = $this->ListAllCategoria($key);
            }
            return $aux_list;
            
        } catch (\Throwable $th) {
            print "Erroaomostrar";
        }
    }
    public function GetbyId(CategoriaQuartoDTO $id){
        try {
            $sql = "SELECT id_categoriaquarto,Categoria,preco FROM categoriaquarto WHERE id_categoriaquarto=:id_categoriaquarto;";
            $Sql_procedure = DBConnection::getConnection()->prepare($sql);
            $Sql_procedure->bindValue(":id_categoriaquarto", $id->getIdcategoriaQuarto());
            $Sql_procedure->execute();
            $dadosDoQuarto = $Sql_procedure->fetchAll(PDO::FETCH_ASSOC);

                // Exiba ou manipule os dados conforme necessário
                // Por exemplo, você pode passar esses dados para a página room-details.php usando sessões, variáveis de consulta ou outras técnicas.
                // Aqui, estou usando uma sessão para armazenar temporariamente os dados.
                
                // Inicie a sessão
                session_start();
                // Armazene os dados do quarto na sessão
                $_SESSION['dadosDoQuarto'] = $dadosDoQuarto;
    
                // Redirecione para a página room-details.php
                header("Location: /TILH/View/room-details.php");
                exit;
        } catch (\Throwable $th) {
            echo"Erro ao selecionar o quarto".$th->getMessage();
            }

        }
    public function ReservaQuarto(ReservaQuartoDTO $reservaQuarto){
        try {
            session_start();
            $sql = "INSERT INTO reservaquarto(id_cliente,Nome,Sobrenome,id_quarto,data_entrada,data_saida,NumQuartos,NumHospedes)VALUES(:id_cliente,:Nome,:Sobrenome,:id_quarto,:data_entrada,:data_saida,:NumQuartos,:NumHospedes);";
            $Sql_procedure = DBConnection::getConnection()->prepare($sql);
            $Sql_procedure->bindValue(":id_cliente", $reservaQuarto->getId_cliente());
            $Sql_procedure->bindValue(":Nome", $reservaQuarto->getNome());
            $Sql_procedure->bindValue(":Sobrenome", $reservaQuarto->getSobrenome());
            $Sql_procedure->bindValue(":id_quarto", $reservaQuarto->getId_quarto());
            $Sql_procedure->bindValue(":data_entrada", $reservaQuarto->getData_entrada());
            $Sql_procedure->bindValue(":data_saida", $reservaQuarto->getData_Saida());
            $Sql_procedure->bindValue(":NumQuartos", $reservaQuarto->getNumQuartos());
            $Sql_procedure->bindValue(":NumHospedes", $reservaQuarto->getNumHospedes());
            $Sql_procedure->execute();
            var_dump($Sql_procedure->rowCount());
            if($Sql_procedure->rowCount()>0){
                $_SESSION["status"] = "Success";
            }else{
                $_SESSION["status"] = "Failed";
            }
            header("Location: /TILH/View/ReservaQuarto.php");
            exit;
        }catch(Exception $th) {
            echo "Erro ao gravar os dados".$th->getMessage();
        }
    }
    public function Reserva(ReservaQuartoDTO $reservaQuarto){
        try {
            $sql = "SELECT id_reservaquarto,Nome,delete_at, Sobrenome, data_entrada, data_saida, NumQuartos, NumHospedes,Categoria FROM reservaquarto 
            JOIN quarto ON quarto.id_quarto=reservaquarto.id_quarto
            JOIN categoriaquarto ON quarto.id_categoriaquarto = categoriaquarto.id_categoriaquarto
             WHERE id_cliente=:id_cliente AND delete_at IS NULL";
            $Sql_procedure = DBConnection::getConnection()->prepare($sql);
            $Sql_procedure->bindValue(":id_cliente",$reservaQuarto->getId_cliente());
            $Sql_procedure->execute();
            $lista = $Sql_procedure->fetchAll(PDO::FETCH_ASSOC);
            
            }catch(Exception $th) {
                echo "".$th->getMessage();
            }
            return $lista;
        }
        public function DeleteReservaQuarto(ReservaQuartoDTO $id_reservaquarto){
            try {
                session_start();
                $sql = "UPDATE reservaquarto SET delete_at = NOW(),motivo = :motivo  WHERE id_reservaquarto = :id_reservaquarto";
                $sql_procedure = DBConnection::getConnection()->prepare($sql);
                $sql_procedure->bindValue(":id_reservaquarto",$id_reservaquarto->getIdReservaQuarto());
                $sql_procedure->bindValue(":motivo",$id_reservaquarto->getMotivo());
                $sql_procedure->execute();

                if($sql_procedure->rowCount()>0){
                    $_SESSION["status"] = "Success";
                }else{
                    $_SESSION["status"] = "Failed";
                }
                header("Location: /TILH/View/ReservaQuarto.php");
                exit;
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
        public function cancelarReserva(CancelarReservaDTO $cancelar){
            try {
                $sql = "INSERT INTO cancelarreserva(id_reservaquarto,motivo) Values (:id_reservaquarto,:motivo)";
                $sql_procedure = DBConnection::getConnection()->prepare($sql);
                $sql_procedure->bindValue(":id_reservaquarto",$cancelar->getIdReservaQuarto());
                $sql_procedure->bindValue(":motivo",$cancelar->getMotivo());
                $sql_procedure->execute();

                header("Location: /TILH/View/ReservaQuarto.php");
                exit;
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
    public function ListAllReserva($linha){
        $Quarto = new ReservaQuartoDTO();
        $quartodto = new QuartoDTO();
        $Quarto->setNome($linha["Nome"]);
        $Quarto->setSobrenome($linha["Sobrenome"]);
        $Quarto->setData_entrada($linha["data_entrada"]);
        $Quarto->setData_saida($linha["data_saida"]);
        $Quarto->setNumQuartos($linha["NumQuartos"]);
        $Quarto->setNumHospedes($linha["NumHospedes"]);

        return [$Quarto,$quartodto];
    }
    public function ListAll($linha){
        $Quarto = new QuartoDTO();
        $Quarto->setId($linha["id_quarto"]);
        $Quarto->setNumQuarto($linha["NumQuarto"]);
        $Quarto->setandar($linha["andar"]);

        return $Quarto;
    }
    public function ListAllCategoria($linha){
        $Quarto = new CategoriaQuartoDTO();
        $Quarto->setIdcategoriaQuarto($linha["id_categoriaquarto"]);
        $Quarto->setCategoria($linha["Categoria"]);
        $Quarto->setPreco($linha["preco"]);
        return $Quarto;
    }
     

}