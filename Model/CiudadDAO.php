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
    }
?>