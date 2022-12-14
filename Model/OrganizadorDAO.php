<?php
    class OrganizadorDAO extends Query{
        public function __construct()
        {
            parent::__construct();
        }
        public function getOrgData()
        {
            $SQL = "SELECT * FROM participantes;";
            $data = $this->selectAll($SQL);
            return $data;
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
    }


?>