<?php
class OrganizadorDAO extends Query
{
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

    public function getParticipante($id)
    {
        $SQL = "SELECT part.numero_asociado AS \"Num Asociado\", 
            part.nombre AS \"Nombre\", 
            part.direccion AS \"Dirección\",
            part.nivel_de_juego AS \"Nivel\",
            part.correo AS \"Email\",
            concat(c.id_ciudad, ' - ' ,(SELECT nombre from ciudad c WHERE part.id_ciudad=c.id_ciudad)) AS \"Ciudad\",
            concat(r.id_rol, ' - ' ,(SELECT nombre from rol r WHERE part.id_rol= r.id_rol)) AS \"Rol\"
            FROM participante part JOIN ciudad c ON part.id_ciudad = c.id_ciudad
            JOIN rol r ON part.id_rol = r.id_rol WHERE part.numero_asociado = $id";
        $data = $this->selectAll($SQL);
        return $data;
    }
    public function getParticipante1()
    {
        $SQL = "SELECT numero_asociado,nombre FROM participante where id_rol = 3";
        $data = $this->selectAll($SQL);
        return $data;
    }

    public function getJugador()
    {
        $SQL = "SELECT numero_asociado,nombre FROM participante where id_rol = 4";
        $data = $this->selectAll($SQL);
        return $data;
    }



    public function insertarparticipante($id, $nombre, $direccion, $nivel_juego, $correo, $clave, $id_rol)
    {
        $sql = "INSERT INTO participante(numero_asociado,nombre,direccion,nivel_juego,correo,clave,id_rol) VALUES (?,?,?,?,?,?,?)";
        $datos = array($id, $nombre, $direccion, $nivel_juego, $correo, $clave, $id_rol);
        $data = $this->save($sql, $datos);
        if ($data == 1) {
            $res = "ok";
        } else {
            $res = "error";
        }
        return $res;
    }

    function editarparticipante($id, $nombre, $direccion, $nivel_juego, $correo, $clave, $id_rol)
    {

        $sql = "UPDATE participante SET nombre = :nombre, direccion = :direccion, nivel_juego = :nivel_juego,
    correo = :correo, clave = :clave, id_rol = :id_rol
     WHERE numero_asociado = :numero_asociado";
        $datos = array($id, $nombre, $direccion, $nivel_juego, $correo, $clave, $id_rol);
        $data = $this->editar($sql, $datos);
        return $data;
        if ($data == 1) {
            $res = "ok";
        } else {
            $res = "error";
        }
    }



    function eliminarparticipante($id)
    {
        $sql = "DELETE FROM participante WHERE numero_asociado= :numero_asociado";
        $datos = array($id);
        $data = $this->eliminar($sql, $datos);
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
        if ($clave == $password) {
            return true;
        }
        return false;
    }
}
