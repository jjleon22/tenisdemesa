<?php

    class Campeonato extends Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function getCampeonatos(){            
            $data = $this->model->getCampeonatos();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }

        public function insertarcampeonato(){            
            $data = $this->model->insertarcampeonato();
            // es necesario?? echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }
    }

?>