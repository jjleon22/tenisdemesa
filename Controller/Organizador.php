<?php
    class Organizador extends Controller{
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->views->getView('Home','organizador');
        }
        
        public function getOrgData()
        {
            $data = $this->model->getOrgData();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();//terminar peticion
        }
    }
?>