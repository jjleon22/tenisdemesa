<?php

    class Ciudad extends Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function getCiudades(){            
            $data = $this->model->getCiudades();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }

        public function insertarciudad(){            
            $data = $this->model->insertarciudad();
            // es necesario?? echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }
    }

?>