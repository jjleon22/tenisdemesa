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
        
        
        public function getParticipantes()
        {
            $data = $this->model->getParticipantes();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();//terminar peticion
        }
        
        public function verificar()
        {      
            $_post = json_decode(file_get_contents('php://input'),true);
            $email = $_post['correo'];
            $password = $_post['clave'];
            //print_r($_post);
            session_start();
            $_SESSION['correo']=$email;
            if (empty($email) || empty($password)) {
                $msg = "Error campos vacios";
            } else {
                $data = $this->model->getEmail($email);
                if ($data) {
                    if ($this->model->password_verify2($password, $data['clave'])) {
                        $_SESSION['id'] = $data['numero_asociado'];
                        $_SESSION['nombre'] = $data['nombre'];
                        $_SESSION['direccion'] = $data['direccion'];
                        $_SESSION['nivel_de_juego'] = $data['nivel_de_juego'];
                        $_SESSION['usuario'] = $data['correo'];
                        $_SESSION['rol'] = $data['id_rol'];
                        echo json_encode($_SESSION, JSON_UNESCAPED_UNICODE);
                        die();
                    } else {
                        $msg = "Usuario o contraseña incorrecta";
                    }
                } else {
                    $msg = "Usuario o contraseña incorrecta tipo 2";
                }
            }
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function insertarparticipante(){            
            $data = $this->model->insertarparticipante();
            // es necesario?? echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }
 }
?>