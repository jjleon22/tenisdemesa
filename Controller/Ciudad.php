<?php

    class Ciudad extends Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function getCiudadData(){            
            $data = $this->model->getCiudadData();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }
    }

?>