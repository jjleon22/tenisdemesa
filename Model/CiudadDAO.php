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
        public function insertarciudad()
        {
            $id_ciudad = ($_POST['id_ciudad']); 
            $nombre = ($_POST['nombre']);
            $num_clubes = ($_POST['num_clubes']);
    
            if (
                empty($id_ciudad) || empty($nombre) || empty($num_clubes) 
            ) {
                $msg = "Todos los campos son obligatorios";
            } else {
                $data = $this->model->insertarciudad($id_ciudad, $nombre, $num_clubes);
                if ($data === "ok") {
                    $msg = "Ciudad registrada";
                } else {
                    $msg = "Error";
                }
            }
        }
    }
?>