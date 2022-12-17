<?php
    class SalaDAO extends Query{
        public function __construct()
        {
            parent::__construct();
        }
        public function getSalas()
        {
            $SQL = "SELECT * FROM sala;";
            $data = $this->selectAll($SQL);
            return $data;
        }
 }
?>