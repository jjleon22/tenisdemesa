<?php
    class PartidoDAO extends Query{
        public function __construct()
        {
            parent::__construct();
        }
        public function getPartidos()
        {
            $SQL = "SELECT p.id_partido AS \"ID Partido\", 
            p.fecha_de_juego AS \"Fecha\", 
            p.id_sala AS \"Sala\",
            p.num_entradas_vendidas AS \"Entradas Vendidas\",
            concat(r.numero_asociado_juez, ' - ' ,j.nombre) AS \"Juez\",
            concat(r.numero_asociado_jugador1, ' - ' ,(SELECT nombre from participante WHERE numero_asociado=numero_asociado_jugador1)) AS \"Jugador 1\",
            concat(r.numero_asociado_jugador2, ' - ' ,(SELECT nombre from participante WHERE numero_asociado=numero_asociado_jugador2)) AS \"Jugador 2\",
            r.numero_asociado_ganador,
            r.marcador AS \"Marcador\", r.comenatrios AS \"Comentarios\"
            FROM partido p NATURAL JOIN resultado_partido r
            JOIN participante j ON r.numero_asociado_juez = j.numero_asociado
            ORDER BY p.fecha_de_juego ASC;";
            $data = $this->selectAll($SQL);
            return $data;
        }

        public function getPartidoRes($fecha_de_juego, $id_sala, $num_entradas_vendidas)
        {
            $SQL = "SELECT id_partido FROM partido WHERE fecha_de_juego::TEXT LIKE '%".$fecha_de_juego."%' AND id_sala=".$id_sala."AND num_entradas_vendidas=".$num_entradas_vendidas.";";
            //$datos = array($fecha_de_juego, $id_sala, $num_entradas_vendidas);
            $data = $this->select($SQL);
            return $data;
        }

        public function insertarpartido($id_partido, $fecha_de_juego, $id_sala, $num_entradas_vendidas)
    {
        $sql = "INSERT INTO partido(fecha_de_juego,id_sala,num_entradas_vendidas) VALUES (?,?,?)";
        $datos = array($fecha_de_juego, $id_sala, $num_entradas_vendidas);
        $data = $this->save($sql, $datos);
        if ($data == 1) {
            $res = "ok";
        } else {
            $res = "error";
        }
        return $res;
    }

    public function insertarresultado($id_partido, $numero_asociado_juez, $numero_asociado_jugador1, $numero_asociado_jugador2,
    $numero_asociado_ganador, $marcador, $comenatrios)
    {
        $sql = "INSERT INTO resultado_partido(id_partido,numero_asociado_juez,numero_asociado_jugador1,numero_asociado_jugador2,
        numero_asociado_ganador, marcador, comenatrios) VALUES (?,?,?,?,?,?,?)";
        $datos = array($id_partido, $numero_asociado_juez, $numero_asociado_jugador1, $numero_asociado_jugador2,
        $numero_asociado_ganador, $marcador, $comenatrios);
        $data = $this->save($sql, $datos);
        if ($data == 1) {
            $res = "ok";
        } else {
            $res = "error";
        }
        return $res;
    }



    function editarpartido($id_partido, $fecha_de_juego, $id_sala, $num_entradas_vendidas)
{
  
    $sql = "UPDATE partido SET fecha_de_juego = :fecha_de_juego, id_sala = :id_sala, num_entradas_vendidas = :num_entradas_vendidas
     WHERE id_partido = :id_partido";
    $datos = array($id_partido, $fecha_de_juego, $id_sala, $num_entradas_vendidas);
    $data = $this->editar($sql, $datos);
    return $data;
    if($data == 1){
        $res = "ok";
    } else {
        $res = "error";
    }
  }

  function editarresultado($id_partido, $numero_asociado_juez, $numero_asociado_jugador1, 
  $numero_asociado_jugador2, $numero_asociado_ganador, $marcador, $comenatrios)
{
  
    $sql = "UPDATE resultado_partido SET numero_asociado_juez = :numero_asociado_juez, numero_asociado_jugador1 = :numero_asociado_jugador1, 
    numero_asociado_jugador2 = :numero_asociado_jugador2, numero_asociado_ganador = :numero_asociado_ganador, marcador = :marcador,
    comenatrios = :comenatrios WHERE id_partido = :id_partido";
    $datos = array($id_partido,$numero_asociado_juez, $numero_asociado_jugador1, 
    $numero_asociado_jugador2, $numero_asociado_ganador, $marcador, $comenatrios);
    $data = $this->editar($sql, $datos);
    return $data;
    if($data == 1){
        $res = "ok";
    } else {
        $res = "error";
    }
  }

  function eliminarpartido($id_partido)
  {
    $sql = "DELETE FROM partido WHERE id_partido= :id_partido";
    $datos = array($id_partido);
    $data = $this->eliminar($sql, $datos);
    return $data;
  }

        

    
    }
