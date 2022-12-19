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
    
        public function insertarparticipante()
        {
            $_post = json_decode(file_get_contents('php://input'),true);
            //$id = ($_post['numero_asociado']); 
            $nombre = ($_post['nombre']);
            $direccion = ($_post['direccion']);
            $nivel_de_juego = intval($_post['nivel_de_juego']);
            $correo = ($_post['correo']);
            $id_ciudad = intval($_post['id_ciudad']);
            $clave = ($_post['clave']);
            $id_rol = intval(($_post['id_rol']));
            
            print_r($_post);
            if (
                empty($id_rol) || empty($nombre) || empty($direccion) || empty($nivel_de_juego) || empty($correo) ||
                empty($clave) || empty($id_ciudad)
            ) {
                $msg = "Todos los campos son obligatorios";
            } else {
                $data = $this->model->insertarparticipante($nombre, $direccion, $nivel_de_juego, $correo, $clave, $id_ciudad, $id_rol);
                if ($data === "ok") {
                    $msg = "Participante registrado";
                } else {
                    $msg = "Error";
                }
            }
            echo json_encode($msg,JSON_UNESCAPED_UNICODE);
            die();//terminar peticion
        }

        public function editarparticipante()
        {
            $id = ($_POST['numero_asociado']); 
            $nombre = ($_POST['nombre']);
            $direccion = ($_POST['direccion']);
            $nivel_juego = ($_POST['nivel_juego']);
            $correo = ($_POST['correo']);
            $clave = intval(($_POST['clave']));
            $id_rol = intval(($_POST['id_rol']));
    
    
            echo var_dump($id_rol);
    
            if (
                empty($id_rol) || empty($nombre) || empty($direccion) || empty($nivel_juego) || empty($correo) ||
                empty($clave) || empty($id_rol)
            ) {
                $msg = "Todos los campos son obligatorios";
            } else {
                $data = $this->model->editarparticipante($id, $nombre, $direccion, $nivel_juego, $correo, $clave, $id_rol);
                if ($data === "ok") {
                    $msg = "Participante editado";
                } else {
                    $msg = "Error";
                }
            }
    
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function eliminarparticipante($id)
    {
        $data = $this->model->eliminarparticipante($id);
        if ($data === 0) {
            $msg = "Participante eliminado";
        } else if ($data === "existe") {
            $msg = "Error";
        }
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

        
 }
