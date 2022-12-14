<?php
    class SalaDAO extends Query{
        public function __construct()
        {
            parent::__construct();
        }
        public function getSalaData()
        {
            $SQL = "SELECT * FROM sala;";
            $data = $this->selectAll($SQL);
            return $data;
        }
 }
?>