<?php
    class CampeonatoDAO extends Query
    {
        public function __construct()
        {
            parent::__construct();
        }    

        public function getCampData()
        {
            
            $SQL = "CREATE VIEW vista_historico AS SELECT camp.id_campeonato AS \"Id Campeonato\",  
            camp.nombre AS \"Título\", 
            concat(c.nombre, ' - ' ,(SELECT nombre from ciudad WHERE camp.id_ciudad=c.id_ciudad)) AS \"Ciudad\",
            concat(part.nombre, ' - ' ,(SELECT nombre from participante WHERE camp.numero_asociado_ganador=part.numero_asociado)) AS \"Ganador\"
            FROM campeonato camp JOIN ciudad c ON camp.id_ciudad = c.id_ciudad
            JOIN participante part ON camp.numero_asociado_ganador = part.numero_asociado;";
            $data = $this->selectAll($SQL);
            return $data;
            
        }
    }
?>