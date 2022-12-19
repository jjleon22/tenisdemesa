<?php
    class CampeonatoDAO extends Query
    {
        public function __construct()
        {
            parent::__construct();
        }    

        public function getCampeonatos()
        {
            
            $SQL = "SELECT * FROM vista_historico";
            $data = $this->selectAll($SQL);
            return $data;
        }

        public function insertarcampeonato($nombre, $id_ciudad, $numero_asociado_ganador)
    {
        $sql = "INSERT INTO campeonato(nombre,id_ciudad,numero_asociado_ganador) VALUES (?,?,?)";
        $datos = array($nombre, $id_ciudad, $numero_asociado_ganador);
        $data = $this->save($sql, $datos);
        if ($data == 1) {
            $res = "ok";
        } else {
            $res = "error";
        }
        return $res;
    }

    function editarcampeonato($id_campeonato, $nombre, $id_ciudad, $numero_asociado_ganador)
{
  
    $sql = "UPDATE campeonato SET nombre = :nombre, id_ciudad = :id_ciudad,
    numero_asociado_ganador = :numero_asociado_ganador
     WHERE id_campeonato = :id_campeonato";
    $datos = array($id_campeonato, $nombre, $id_ciudad, $numero_asociado_ganador);
    $data = $this->editar($sql, $datos);
    return $data;
    if($data == 1){
        $res = "ok";
    } else {
        $res = "error";
    }
  }

  function eliminarcampeonato($id_campeonato)
  {
    $sql = "DELETE FROM campeonato WHERE id_campeonato= :id_campeonato";
    $datos = array($id_campeonato);
    $data = $this->eliminar($sql, $datos);
    return $data;
  }

        /*CREATE VIEW "vista_historico" AS SELECT camp.id_campeonato AS "Id Campeonato",  
camp.nombre AS "Título", 
concat(c.id_ciudad, ' - ' ,(SELECT nombre from ciudad c WHERE camp.id_ciudad=c.id_ciudad)) AS "Ciudad",
concat(part.numero_asociado, ' - ' ,(SELECT nombre from participante part WHERE camp.numero_asociado_ganador=part.numero_asociado)) AS "Ganador"
FROM campeonato camp JOIN ciudad c ON camp.id_ciudad = c.id_ciudad
JOIN participante part ON camp.numero_asociado_ganador = part.numero_asociado;*/



    }
