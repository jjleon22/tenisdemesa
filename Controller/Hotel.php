<?php
    class Hotel extends Controller{
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->views->getView('Home','hotel');
        }
        
        public function getHotel()
        {
            $data = $this->model->getHotel();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();//terminar peticion
        }

        public function getHotelito()
        {
            $data = $this->model->getHotelito();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();//terminar peticion
        }

        public function insertarhotel()
        {
            //$id_hotel = ($_POST['id_hotel']); 
            $nombre = ($_POST['nombre']);
            $direccion = ($_POST['direccion']);
    
            if (
                empty($nombre) || empty($direccion) 
            ) {
                $msg = "Todos los campos son obligatorios";
            } else {
                $data = $this->model->insertarhotel($nombre, $direccion);
                if ($data === "ok") {
                    $msg = "Hotel registrado";
                } else {
                    $msg = "Error";
                }
            }
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();//terminar peticion
        }

        public function editarhotel()
        {
            $id_hotel = ($_POST['id_hotel']); 
            $nombre = ($_POST['nombre']);
            $direccion = ($_POST['direccion']);
    
            if (
                empty($id_hotel) || empty($nombre) || empty($direccion) 
            ) {
                $msg = "Todos los campos son obligatorios";
            } else {
                $data = $this->model->editarhotel($id_hotel, $nombre, $direccion);
                if ($data === "ok") {
                    $msg = "Hotel editado";
                } else {
                    $msg = "Error";
                }
            }
    
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function eliminarhotel($id_hotel)
    {
        $data = $this->model->eliminarhotel($id_hotel);
        if ($data === 0) {
            $msg = "Hotel eliminado";
        } else if ($data === "existe") {
            $msg = "Error";
        }
    }
    }
