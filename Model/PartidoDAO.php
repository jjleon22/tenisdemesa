<?php
    class PartidoDAO extends Query{
        public function __construct()
        {
            parent::__construct();
        }
        public function getPartidos()
        {
            $SQL = "SELECT p.id_partido AS \"Num Asociado\", 
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

        public function insertarpartido()
        {
            $id_partido = ($_POST['id_partido']); 
            $fecha_de_juego = ($_POST['fecha_de_juego']);
            $id_sala = ($_POST['id_sala']);
            $num_entradas_vendidas = ($_POST['num_entradas_vendidas']);
    
            if (
                empty($id_partido) || empty($fecha_de_juego) || empty($id_sala) || empty($num_entradas_vendidas)
            ) {
                $msg = "Todos los campos son obligatorios";
            } else {
                $data = $this->model->insertarpartido($id_partido, $fecha_de_juego, $id_sala, $num_entradas_vendidas);
                if ($data === "ok") {
                    $msg = "Partido registrado";
                } else {
                    $msg = "Error";
                }
            }
        }

    
    }
?>