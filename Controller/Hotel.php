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
        
        public function getHotel()
        {
            $data = $this->model->getHotel();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();//terminar peticion
        }
    }
?>