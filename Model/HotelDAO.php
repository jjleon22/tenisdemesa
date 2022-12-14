<?php
    class OrganizadorDAO extends Query{
        public function __construct()
        {
            parent::__construct();
        }
        public function getOrgData()
        {
            $SQL = "SELECT * FROM participantes;";
            $data = $this->selectAll($SQL);
            return $data;
        }
 }
?>