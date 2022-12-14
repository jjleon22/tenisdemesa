<?php

    class Campeonato extends Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function getCampData(){            
            $data = $this->model->getCampData();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }
    }

?>