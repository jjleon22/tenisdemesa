<?php
    class HotelDAO extends Query{
        public function __construct()
        {
            parent::__construct();
        }
        public function getHotel()
        {
            $SQL = "SELECT h.id_hotel AS \"Id Hotel\", 
            h.nombre AS \"Nombre\", 
            h.direccion AS \"Dirección\"
            FROM hotel h";
            $data = $this->selectAll($SQL);
            return $data;
        }

        public function insertarhotel()
        {
            $id_hotel = ($_POST['id_hotel']); 
            $nombre = ($_POST['nombre']);
            $direccion = ($_POST['direccion']);
    
            if (
                empty($id_hotel) || empty($nombre) || empty($direccion) 
            ) {
                $msg = "Todos los campos son obligatorios";
            } else {
                $data = $this->model->insertarhotel($id_hotel, $nombre, $direccion);
                if ($data === "ok") {
                    $msg = "Hotel registrado";
                } else {
                    $msg = "Error";
                }
            }
        }
 }
