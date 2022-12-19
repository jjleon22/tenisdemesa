<?php
class SalaDAO extends Query
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getSalas1()
    {
        $SQL = "SELECT id_sala FROM sala";
        $data = $this->selectAll($SQL);
        return $data;
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

    public function insertarsala($id_sala, $id_hotel, $capacidad)
    {
        $sql = "INSERT INTO sala(id_sala,id_hotel,capacidad) VALUES (?,?,?)";
        $datos = array($id_sala, $id_hotel, $capacidad);
        $data = $this->save($sql, $datos);
        if ($data == 1) {
            $res = "ok";
        } else {
            $res = "error";
        }
        return $res;
    }

    function editarsala($id_sala, $id_hotel, $capacidad)
    {

        $sql = "UPDATE sala SET id_hotel = :id_hotel, capacidad = :capacidad
             WHERE id_sala = :id_sala";
        $datos = array($id_sala, $id_hotel, $capacidad);
        $data = $this->editar($sql, $datos);
        return $data;
        if ($data == 1) {
            $res = "ok";
        } else {
            $res = "error";
        }
    }

    function eliminarsala($id_sala)
    {
        $sql = "DELETE FROM sala WHERE id_sala= :id_sala";
        $datos = array($id_sala);
        $data = $this->eliminar($sql, $datos);
        return $data;
    }
}
