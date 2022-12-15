<?php
    class Organizador extends Controller{
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->views->getView('Home','organizador');
        }
        
        public function logeo()
        {
            $email = ($_POST['correo']);
            $password = ($_POST['clave']);
            if (empty($_POST['correo']) || empty($_POST['clave'])) {
                $msg = "Error campos vacios";
            } else {
                $data = $this->model->getEmail($email);
                if ($data) {
                    if (password_verify($password, $data['clave'])) {
                        $_SESSION['id'] = $data['numero_asociado'];
                        $_SESSION['nombre'] = $data['nombre'];
                        $_SESSION['direccion'] = $data['direccion'];
                        $_SESSION['nivel_de_juego'] = $data['nivel_de_juego'];
                        $_SESSION['usuario'] = $data['correo'];
                        $_SESSION['rol'] = $data['id_rol'];
                        $msg = $data['id_rol'];
                    } else {
                        $msg = "Usuario o contraseña incorrecta";
                    }
                } else {
                    $msg = "Usuario o contraseña incorrecta";
                }
            }
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }
        public function getOrgData()
        {
            $data = $this->model->getOrgData();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();//terminar peticion
        }
    }
?>