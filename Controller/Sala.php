<?php
    class Sala extends Controller{
        public function __construct()
        {
            parent::__construct();
        }

        public function getSalas1()
        {
            $data = $this->model->getSalas1();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();//terminar peticion
        }

        public function getSalas()
        {
            $data = $this->model->getSalas();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();//terminar peticion
        }

        public function insertarsala()
        {
            $_post = json_decode(file_get_contents('php://input'),true);
            $id_hotel = ($_post['id_hotel']);
            $capacidad = ($_post['capacidad']);
            
            if (
                empty($id_hotel) || empty($capacidad) 
            ) {
                $msg = "Todos los campos son obligatorios";
            } else {
                $data = $this->model->insertarsala($id_hotel, $capacidad);
                if ($data === "ok") {
                    $sala = $this->model->getSalasOne();
                    $msg = $sala;
                } else {
                    $msg = "Error";
                }
            }
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function insertarmediosala()
        {
            $_post = json_decode(file_get_contents('php://input'),true);
            $id_sala = ($_post['id_sala']);
            $id_medio = ($_post['id_medio']);
            
            if (
                empty($id_sala) || empty($id_medio) 
            ) {
                $msg = "Todos los campos son obligatorios";
            } else {
                $data = $this->model->insertarmediosala($id_sala, $id_medio);
                if ($data === "ok") {
                    $msg = "medio registrado";
                } else {
                    $msg = "Error";
                }
            }
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
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
