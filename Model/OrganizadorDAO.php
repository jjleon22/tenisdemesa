<?php
    class OrganizadorDAO extends Query{
        public function __construct()
        {
            parent::__construct();
        }
        public function getParticipantes()
        {
           
            
            $SQL = "SELECT part.numero_asociado AS \"Num Asociado\", 
            part.nombre AS \"Nombre\", 
            part.direccion AS \"Dirección\",
            part.nivel_de_juego AS \"Nivel\",
            part.correo AS \"Email\",
            concat(c.id_ciudad, ' - ' ,(SELECT nombre from ciudad c WHERE part.id_ciudad=c.id_ciudad)) AS \"Ciudad\",
            concat(r.id_rol, ' - ' ,(SELECT nombre from rol r WHERE part.id_rol= r.id_rol)) AS \"Rol\"
            FROM participante part JOIN ciudad c ON part.id_ciudad = c.id_ciudad
            JOIN rol r ON part.id_rol = r.id_rol;";
            $data = $this->selectAll($SQL);
            return $data;
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

 
        public function getEmail($email)
        {
            $SQL = "SELECT * FROM participante WHERE correo='$email';";
            $data = $this->select($SQL);
            return $data;
        }

        public function password_verify2($password, $clave)
        {   
            if($clave == $password)
            {
                return true;
            }
            return false;
        }
    }
?>