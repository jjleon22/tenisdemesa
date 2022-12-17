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
 }
