<?php
    class CancelarReservaDTO{
        private $id_cancelarreserva;
        private $id_reservaquarto;
        private $motivo;

        public function getIdCancelarReserva(){
            return $this->id_cancelarreserva;
        }
        public function setIdCancelarReserva($id_cancelarreserva){
            $this->id_cancelarreserva = $id_cancelarreserva;
            return $this;
        }
        public function getIdReservaQuarto(){
            return $this->id_reservaquarto;
        }
        public function setIdReservaQuarto($id_reservaquarto){
            $this->id_reservaquarto = $id_reservaquarto;
            return $this;
        }
        public function getMotivo(){
            return $this->motivo;
        }
        public function setMotivo($motivo){
            $this->motivo = $motivo;
            return $this;
        }
    }
