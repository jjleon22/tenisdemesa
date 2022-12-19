<?php class Participante extends Controller{
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->views->getView('Home','participante');
        }

        public function getHospedajes()
        {
            $_post = json_decode(file_get_contents('php://input'),true);
            $data = $this->model->getHospedajes($_post["id"]);
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();//terminar peticion
        }
    }
?>