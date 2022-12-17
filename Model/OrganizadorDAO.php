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