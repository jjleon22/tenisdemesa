<?php
    class CiudadDAO extends Query
    {
        public function __construct()
        {
            parent::__construct();
        }    

        public function getCiudadData()
        {
            $sql = "SELECT * FROM ciudad;";
            $data = $this->selectAll($sql);
            return $data;
        }
    }
?>