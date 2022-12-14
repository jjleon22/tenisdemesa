<?php
    class Hotel extends Controller{
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->views->getView('Home','hotel');
        }
        
        public function getHotelData()
        {
            $data = $this->model->getHotelData();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();//terminar peticion
        }
    }
?>