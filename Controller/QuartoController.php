<?php
include_once("../Controller/Links.php");

class QuartoController
{
  public function quarto()
  {
    $quarto =  "rooms.php";
    return $quarto;
  }
  public function GetbyId($id)
  {
    try {
      $Quarto = new QuartoDAO();
      $QuartoDTO = new CategoriaQuartoDTO();
      $quartoid = $QuartoDTO->setIdcategoriaQuarto($id);
      $Quarto->GetbyId($quartoid);
    } catch (\Throwable $th) {
      echo "Erro ao listar o quarto" . $th->getMessage();
    }
  }
  public function ReservaQuarto($id_cliente, $Nome, $Sobrenome, $id_quarto, $data_entrada, $data_saida, $NumQuarto, $NumHospedes)
  {
    try {
      $Quarto = new QuartoDAO();
      $reserva = new ReservaQuartoDTO();
      $reserva->setIdCliente($id_cliente);
      $reserva->setNome($Nome);
      $reserva->setSobrenome($Sobrenome);
      $reserva->setId_quarto($id_quarto);
      $reserva->setData_entrada($data_entrada);
      $reserva->setData_saida($data_saida);
      $reserva->setNumQuartos($NumQuarto);
      $reserva->setNumHospedes($NumHospedes);
      $Quarto->ReservaQuarto($reserva);
    } catch (\Throwable $th) {
      echo "" . $th->getMessage();
    }
  }
  public function VerReserva($id_cliente){
    try {
      $Quarto = new ReservaQuartoDTO();
      $QuartoDAO = new QuartoDAO();
      $Quarto->setIdCliente($id_cliente);
      $QuartoDAO->Reserva($Quarto);
    }catch (\Throwable $th) {
      echo "Erro ao mostrar os dados do join". $th->getMessage();
    }
  }
  public function DeleteReservaQuarto($id_reservaquarto,$motivo){
    try {
      $quartoDTO = new ReservaQuartoDTO();
      $quartoDAO = new QuartoDAO();
      $quartoDTO->setIdReservaQuarto($id_reservaquarto);
      $quartoDTO->setMotivo($motivo);
      $quartoDAO->DeleteReservaQuarto($quartoDTO);
    } catch (\Throwable $th) {
      //throw $th;
    }
  }
}
