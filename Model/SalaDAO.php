<?php
    class SalaDAO extends Query{
        public function __construct()
        {
            parent::__construct();
        }
        public function getSalas()
        {
            $SQL = "SELECT s.id_sala AS \"Número Sala\", 
            concat(h.id_hotel, ' - ' ,(SELECT nombre from hotel h WHERE s.id_hotel=h.id_hotel)) AS \"Nombre Hotel\",
            me.nombre AS \"Medios Disponibles\",
            s.capacidad AS \"Capacidad\"
            FROM sala s JOIN hotel h ON h.id_hotel = s.id_hotel
            JOIN medios_sala m ON s.id_sala = m.id_sala
			JOIN medio_comunicacion me ON me.id_medio = m.id_medio
			ORDER BY s.id_sala;";
            $data = $this->selectAll($SQL);
            return $data;
        }

        public function insertarsala()
        {
            $id_sala = ($_POST['id_sala']); 
            $id_hotel = ($_POST['id_hotel']);
            $capacidad = ($_POST['capacidad']);
            
            if (
                empty($id_sala) || empty($id_hotel) || empty($capacidad) 
            ) {
                $msg = "Todos los campos son obligatorios";
            } else {
                $data = $this->model->insertarsala($id_sala, $id_hotel, $capacidad);
                if ($data === "ok") {
                    $msg = "Sala registrada";
                } else {
                    $msg = "Error";
                }
            }
        }
 }
?>