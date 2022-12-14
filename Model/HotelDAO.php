<?php
    class OrganizadorDAO extends Query{
        public function __construct()
        {
            parent::__construct();
        }
        public function getHotelData()
        {
            $SQL = "SELECT * FROM hotel;";
            $data = $this->selectAll($SQL);
            return $data;
        }
 }
