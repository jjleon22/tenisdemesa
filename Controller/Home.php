<?php
    class Home extends Controller{
        public function __construct(){
            parent::__construct();
        }

        public function index()
        {
            $this->views->getView('Home','index');
        }

        public function salir()
        {
            session_destroy();
            print_r($_SESSION);
            //header("location:".BASE_URL);
        }
    }
?>