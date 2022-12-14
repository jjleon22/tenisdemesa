<?php
    class Sala extends Controller{
        public function __construct()
        {
            parent::__construct();
        }
        public function getSalaData()
        {
            $data = $this->model->getSalaData();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();//terminar peticion
        }
    }
?>