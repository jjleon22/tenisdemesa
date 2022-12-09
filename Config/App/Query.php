<?php
    class Query extends Conexion
    {
        private $PDO, $con, $SQL, $datos;
        public function __construct(){
            $this->PDO = new Conexion();
            $this->con = $this->PDO->connect();
        }
        //metodo para hacer selects generales
        public function selectAll($SQL)
        {
            $this->SQL = $SQL;
            $result = $this->con->prepare($this->SQL);
            $result->execute();
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
    }
    

?>