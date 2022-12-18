<?php class Juez extends Controller{
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->views->getView('Home','juez');
        }
    }
?>