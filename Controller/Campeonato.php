<?php

class Campeonato extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getCampeonatos()
    {
        $data = $this->model->getCampeonatos();
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }


    public function insertarcampeonato()
    {
        $_post = json_decode(file_get_contents('php://input'),true);
        //$id_campeonato = ($_POST['id_campeonato']);
        $nombre = ($_post['nombre']);
        $id_ciudad = ($_post['id_ciudad']);
        $numero_asociado_ganador = ($_post['numero_asociado_ganador']);

        if (
            empty($nombre) || empty($id_ciudad) || empty($numero_asociado_ganador)
        ) {
            $msg = "Todos los campos son obligatorios";
        } else {
            $data = $this->model->insertarcampeonato($nombre, $id_ciudad, $numero_asociado_ganador);
            if ($data === "ok") {
                $msg = "Campeonato registrado";
            } else {
                $msg = "Error";
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function editarcampeonato()
    {
        $id_campeonato = ($_POST['id_campeonato']);
        $nombre = ($_POST['nombre']);
        $id_ciudad = ($_POST['id_ciudad']);
        $numero_asociado_ganador = ($_POST['numero_asociado_ganador']);

        if (
            empty($id_campeonato) || empty($nombre) || empty($id_ciudad) || empty($numero_asociado_ganador)
        ) {
            $msg = "Todos los campos son obligatorios";
        } else {
            $data = $this->model->editarcampeonato($id_campeonato, $nombre, $id_ciudad, $numero_asociado_ganador);
            if ($data === "ok") {
                $msg = "Campeonato actualizado";
            } else {
                $msg = "Error";
            }
        }

        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function eliminarcampeonato($id_campeonato)
    {
        $data = $this->model->eliminarcampeonato($id_campeonato);
        if ($data === 0) {
            $msg = "Campeonato eliminado";
        } else if ($data === "existe") {
            $msg = "Error";
        }
    }
}
