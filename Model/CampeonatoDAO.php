<?php
    class CampeonatoDAO extends Query
    {
        public function __construct()
        {
            parent::__construct();
        }    

        public function getCampData()
        {
            $sql = "SELECT * FROM campeonato;";
            $data = $this->selectAll($sql);
            return $data;
        }
    }
?>