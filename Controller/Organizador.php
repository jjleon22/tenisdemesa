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
        
        
        public function getOrgData()
        {
            $data = $this->model->getOrgData();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();//terminar peticion
        }

        public function verificar()
        {
            $email = ($_POST['correo']);
            $password = ($_POST['clave']);
            session_start();
            $_SESSION['correo']=$email;
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

        public function insertarparticipante()
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
            $data = $this->model->insertarparticipante($id, $nombre, $direccion, $nivel_juego, $correo, $clave, $id_rol);
            if ($data === "ok") {
                $msg = "Participante registrado";
            } else {
                $msg = "Error";
            }
        }
    }
 }
?>