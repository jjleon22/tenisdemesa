<?php
    class PartidosDAO extends Query{
        public function __construct()
        {
            parent::__construct();
        }
        public function getPartidos()
        {
            $SQL = "SELECT * FROM partido;";
            $data = $this->selectAll($SQL);
            return $data;
        }
    }
?>