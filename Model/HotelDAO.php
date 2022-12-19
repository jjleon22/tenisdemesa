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
        public function getHotelito()
    {
        $SQL = "SELECT id_hotel,nombre FROM hotel";
        $data = $this->selectAll($SQL);
        return $data;
    }

        public function insertarhotel($id_hotel, $nombre, $direccion)
    {
        $sql = "INSERT INTO hotel(id_hotel,nombre,direccion) VALUES (?,?,?)";
        $datos = array($id_hotel, $nombre, $direccion);
        $data = $this->save($sql, $datos);
        if ($data == 1) {
            $res = "ok";
        } else {
            $res = "error";
        }
        return $res;
    }

    function editarhotel($id_hotel, $nombre, $direccion)
{
  
    $sql = "UPDATE hotel SET nombre = :nombre, direccion = :direccion
     WHERE id_ciudad = :id_ciudad";
    $datos = array($id_hotel, $nombre, $direccion);
    $data = $this->editar($sql, $datos);
    return $data;
    if($data == 1){
        $res = "ok";
    } else {
        $res = "error";
    }
  }

  function eliminarhotel($id_hotel)
  {
    $sql = "DELETE FROM hotel WHERE id_hotel= :id_hotel";
    $datos = array($id_hotel);
    $data = $this->eliminar($sql, $datos);
    return $data;
  }

        
 }
