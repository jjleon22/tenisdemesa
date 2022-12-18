<?php
    class Sala extends Controller{
        public function __construct()
        {
            parent::__construct();
        }
        public function getSalas()
        {
            $data = $this->model->getSalas();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();//terminar peticion
        }

        public function insertarsala(){            
            $data = $this->model->insertarsala();
            // es necesario?? echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }
    }
?>