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

        public function getCiudad()
        {
            $data = $this->model->getCiudad();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();//terminar peticion
        } 

        public function insertarciudad()
        {
            $id_ciudad = ($_POST['id_ciudad']); 
            $nombre = ($_POST['nombre']);
            $num_clubes = ($_POST['num_clubes']);
    
            if (
                empty($id_ciudad) || empty($nombre) || empty($num_clubes) 
            ) {
                $msg = "Todos los campos son obligatorios";
            } else {
                $data = $this->model->insertarciudad($id_ciudad, $nombre, $num_clubes);
                if ($data === "ok") {
                    $msg = "Ciudad registrada";
                } else {
                    $msg = "Error";
                }
            }
        }

        public function editarciudad()
        {
            $id_ciudad = ($_POST['id_ciudad']); 
            $nombre = ($_POST['nombre']);
            $num_clubes = ($_POST['num_clubes']);
    
            if (
                empty($id_ciudad) || empty($nombre) || empty($num_clubes) 
            ) {
                $msg = "Todos los campos son obligatorios";
            } else {
                $data = $this->model->editarciudad($id_ciudad, $nombre, $num_clubes);
                if ($data === "ok") {
                    $msg = "Ciudad actualizada";
                } else {
                    $msg = "Error";
                }
            }
    
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function eliminarciudad($id_ciudad)
    {
        $data = $this->model->eliminarciudad($id_ciudad);
        if ($data === 0) {
            $msg = "Ciudad eliminada";
        } else if ($data === "existe") {
            $msg = "Error";
        }
    }
    }
