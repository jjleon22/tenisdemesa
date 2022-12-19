<?php
    class Partido extends Controller{
        public function __construct()
        {
            parent::__construct();
        }
        public function getPartidos()
        {
            $data = $this->model->getPartidos();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();//terminar peticion
        }

        public function insertarpartido()
        {
<<<<<<< HEAD
            $_post = json_decode(file_get_contents('php://input'),true);>
            $id_partido = ($_post['id_partido']); 
            $fecha_de_juego = ($_post['fecha_de_juego']);
            $id_sala = ($_post['id_sala']);
            $num_entradas_vendidas = ($_post['num_entradas_vendidas']);
=======
            $id_partido = ($_POST['id_partido']); 
            $fecha_de_juego = ($_POST['fecha_de_juego']);
            $id_sala = ($_POST['id_sala']);
            $num_entradas_vendidas = ($_POST['num_entradas_vendidas']);
            $numero_asociado_juez = ($_POST['numero_asociado_juez']);
            $numero_asociado_jugador1 = ($_POST['numero_asociado_jugador1']);
            $numero_asociado_jugador2 = ($_POST['numero_asociado_jugador2']);
            $numero_asociado_ganador = ($_POST['numero_asociado_ganador']);
            $marcador = ($_POST['marcador']);
            $comenatrios = ($_POST['comenatrios']);
>>>>>>> july2
    
            if (
                empty($id_partido) || empty($fecha_de_juego) || empty($id_sala) || empty($num_entradas_vendidas)
                || empty($numero_asociado_juez) || empty($numero_asociado_jugador1) || empty($numero_asociado_jugador2)
                || empty($numero_asociado_ganador) || empty($marcador) || empty($comenatrios)
            ) {
                $msg = "Todos los campos son obligatorios";
            } else {
                $data = $this->model->insertarpartido($id_partido, $fecha_de_juego, $id_sala, $num_entradas_vendidas);
                $data = $this->model->insertarresultado($id_partido, $numero_asociado_juez, $numero_asociado_jugador1, $numero_asociado_jugador2,
                $numero_asociado_ganador, $marcador, $comenatrios);
                if ($data === "ok") {
                    $msg = "Partido registrado";
                } else {
                    $msg = "Error";
                }
            }
        }

        public function editarpartido($id_partido)
        {
            $id_partido = ($_POST['id_partido']); 
            $fecha_de_juego = ($_POST['fecha_de_juego']);
            $id_sala = ($_POST['id_sala']);
            $num_entradas_vendidas = ($_POST['num_entradas_vendidas']);
            $numero_asociado_juez = ($_POST['numero_asociado_juez']);
            $numero_asociado_jugador1 = ($_POST['numero_asociado_jugador1']);
            $numero_asociado_jugador2 = ($_POST['numero_asociado_jugador2']);
            $numero_asociado_ganador = ($_POST['numero_asociado_ganador']);
            $marcador = ($_POST['marcador']);
            $comenatrios = ($_POST['comenatrios']);
    
            if (
                empty($id_partido) || empty($fecha_de_juego) || empty($id_sala) || empty($num_entradas_vendidas)
                || empty($numero_asociado_juez) || empty($numero_asociado_jugador1) || empty($numero_asociado_jugador2)
                || empty($numero_asociado_ganador) || empty($marcador) || empty($comenatrios)
            ) {
                $msg = "Todos los campos son obligatorios";
            } else {
                $data = $this->model->editarpartido($id_partido, $fecha_de_juego, $id_sala, $num_entradas_vendidas);
                $data = $this->model->editarresultado($id_partido, $numero_asociado_juez, $numero_asociado_jugador1, $numero_asociado_jugador2,
                $numero_asociado_ganador, $marcador, $comenatrios);
                if ($data === "ok") {
                    $msg = "Partido editado";
                } else {
                    $msg = "Error";
                }
            }
    
            echo json_encode($msg, JSON_UNESCAPED_UNICODE);
            die();
        }


        public function eliminarpartido($id_partido)
    {
        $data = $this->model->eliminarpartido($id_partido);
        if ($data === 0) {
            $msg = "Partido eliminado";
        } else if ($data === "existe") {
            $msg = "Error";
        }
    }
        
    }
