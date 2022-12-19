<?php
    class CiudadDAO extends Query
    {
        public function __construct()
        {
            parent::__construct();
        }    

        public function getCiudades()
        {
            $SQL = "SELECT c.id_ciudad AS \"Id Ciudad\", 
            c.nombre AS \"Ciudad\", 
            c.num_clubes AS \"Número de Clubes\"
            FROM ciudad c";
            $data = $this->selectAll($SQL);
            return $data;
        }

        public function getCiudad()
    {
        $SQL = "SELECT id_ciudad,nombre FROM ciudad";
        $data = $this->selectAll($SQL);
        return $data;
    }

        public function insertarciudad($id_ciudad, $nombre, $num_clubes)
    {
        $sql = "INSERT INTO ciudad(id_ciudad,nombre,num_clubes) VALUES (?,?,?)";
        $datos = array($id_ciudad, $nombre, $num_clubes);
        $data = $this->save($sql, $datos);
        if ($data == 1) {
            $res = "ok";
        } else {
            $res = "error";
        }
        return $res;
    }

    function editarciudad($id_ciudad, $nombre, $num_clubes)
{
  
    $sql = "UPDATE ciudad SET nombre = :nombre, num_clubes = :num_clubes
     WHERE id_ciudad = :id_ciudad";
    $datos = array($id_ciudad, $nombre, $num_clubes);
    $data = $this->editar($sql, $datos);
    return $data;
    if($data == 1){
        $res = "ok";
    } else {
        $res = "error";
    }
  }

  function eliminarciudad($id_ciudad)
  {
    $sql = "DELETE FROM ciudad WHERE id_ciudad= :id_ciudad";
    $datos = array($id_ciudad);
    $data = $this->eliminar($sql, $datos);
    return $data;
  }


    
        
    }
?>