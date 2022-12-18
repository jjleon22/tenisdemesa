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

        public function insertarsala()
        {
            $id_sala = ($_POST['id_sala']); 
            $id_hotel = ($_POST['id_hotel']);
            $capacidad = ($_POST['capacidad']);
            
            if (
                empty($id_sala) || empty($id_hotel) || empty($capacidad) 
            ) {
                $msg = "Todos los campos son obligatorios";
            } else {
                $data = $this->model->insertarsala($id_sala, $id_hotel, $capacidad);
                if ($data === "ok") {
                    $msg = "Sala registrada";
                } else {
                    $msg = "Error";
                }
            }
        }

        public function editarsala()
        {
            $id_sala = ($_POST['id_sala']); 
            $id_hotel = ($_POST['id_hotel']);
            $capacidad = ($_POST['capacidad']);
            
            if (
                empty($id_sala) || empty($id_hotel) || empty($capacidad) 
            ) {
                $msg = "Todos los campos son obligatorios";
            } else {
                $data = $this->model->editarpartido($id_sala, $id_hotel, $capacidad);
                if ($data === "ok") {
                    $msg = "Sala editada";
                } else {
                    $msg = "Error";
                }
            }
    
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function eliminarsala($id_sala)
        {
            $data = $this->model->eliminarsala($id_sala);
            if ($data === 0) {
                $msg = "Sala eliminada";
            } else if ($data === "existe") {
                $msg = "Error";
            }
        }
    }
