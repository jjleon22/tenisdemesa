<?php
    class Partido extends Controller{
        public function __construct()
        {
            parent::__construct();
        }
        public function getPartidos()
        {
            $data = $this->model->getPartidos();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();//terminar peticion
        }
    }
?>