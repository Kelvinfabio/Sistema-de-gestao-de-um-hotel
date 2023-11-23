<?php
class QuartoDAO extends DBConnection{
    public function create(QuartoDTO $quarto){
        try {
            $sql = "INSERT INTO quarto(NumQuarto,Descricao,andar,preco)VALUES(:NumQuarto,:Descricao,:andar,:preco)";
            $Sql_procedure = DBConnection::getConnection()->prepare($sql);
            $Sql_procedure->bindValue(":NumQuarto", $quarto->getNumQuarto());
            $Sql_procedure->bindValue(":Descricao", $quarto->getDescricao());
            $Sql_procedure->bindValue(":andar", $quarto->getandar());
            $Sql_procedure->bindValue(":preco", $quarto->getpreco());
        } catch (Exception $th) {
        print "Ocorreu um erro ao cadastrar";
        }
    }
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
            $sql = "SELECT id_quarto,NumQuarto,Descricao,andar,preco FROM quarto";
            $Sql_procedure = DBConnection::getConnection()->query($sql);
            $lista = $Sql_procedure->fetchAll(PDO::FETCH_ASSOC);
            $aux_list = array();
            foreach ($lista as $key) {
                $aux_list[] = $this->ListAll($key);
            }
            return $aux_list;
            
        } catch (\Throwable $th) {
            print "Erroaomostrar";
        }
    }
    public function GetbyId(QuartoDTO $id){
        try {
            $sql = "SELECT id_quarto,NumQuarto,Descricao,andar,preco FROM quarto WHERE id_quarto=:id_quarto;";
            $Sql_procedure = DBConnection::getConnection()->prepare($sql);
            $Sql_procedure->bindValue(":id_quarto", $id->getId());
            $Sql_procedure->execute();
            $dadosDoQuarto = $Sql_procedure->fetchAll(PDO::FETCH_ASSOC);

                // Exiba ou manipule os dados conforme necessário
                // Por exemplo, você pode passar esses dados para a página room-details.php usando sessões, variáveis de consulta ou outras técnicas.
                // Aqui, estou usando uma sessão para armazenar temporariamente os dados.
                
                // Inicie a sessão
                session_start();
                // Armazene os dados do quarto na sessão
                $_SESSION['dadosDoQuarto'] = $dadosDoQuarto;
                $id->setDescricao($dadosDoQuarto['Descricao']);
    
                // Redirecione para a página room-details.php
                header("Location: /Helmark/View/room-details.php");
                exit;
        } catch (\Throwable $th) {
            echo"Erro ao selecionar o quarto".$th->getMessage();
            }

        }
    public function ReservaQuarto(ReservaQuartoDTO $reservaQuarto){
        try {
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
            $cliente = $Sql_procedure->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION['reserva'] = $this->Reserva($reservaQuarto);
            // Armazene os dados do quarto na sessão
            $_SESSION['cliente'] = $cliente;
            header("Location: /Helmark/View/ReservaQuarto.php");
            exit;
        }catch(Exception $th) {
            echo "Erro ao gravar os dados".$th->getMessage();
        }
    }
    public function Reserva(ReservaQuartoDTO $reservaQuarto){
        try {
            $sql = "SELECT Nome, Sobrenome, Descricao, preco, data_entrada, data_saida, NumQuartos, NumHospedes FROM reservaquarto 
            JOIN quarto as id_quarto ON id_quarto.id_quarto=reservaquarto.id_quarto WHERE id_cliente=:id_cliente;";
            $Sql_procedure = DBConnection::getConnection()->prepare($sql);
            $Sql_procedure->bindValue(":id_cliente",$reservaQuarto->getId_cliente());
            $Sql_procedure->execute();
            $lista = $Sql_procedure->fetchAll(PDO::FETCH_ASSOC);
            }catch(Exception $th) {
                echo "".$th->getMessage();
            }
            return $lista;
        }
    public function ListAllReserva($linha){
        $Quarto = new ReservaQuartoDTO();
        $quartodto = new QuartoDTO();
        $quartodto->setDescricao($linha["Descricao"]);
        $quartodto->setPreco($linha["preco"]);
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
        $Quarto->setDescricao($linha["Descricao"]);
        $Quarto->setandar($linha["andar"]);
        $Quarto->setPreco($linha["preco"]);

        return $Quarto;
    }
     

}