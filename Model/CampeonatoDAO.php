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
        /*CREATE VIEW "vista_historico" AS SELECT camp.id_campeonato AS "Id Campeonato",  
camp.nombre AS "Título", 
concat(c.id_ciudad, ' - ' ,(SELECT nombre from ciudad c WHERE camp.id_ciudad=c.id_ciudad)) AS "Ciudad",
concat(part.numero_asociado, ' - ' ,(SELECT nombre from participante part WHERE camp.numero_asociado_ganador=part.numero_asociado)) AS "Ganador"
FROM campeonato camp JOIN ciudad c ON camp.id_ciudad = c.id_ciudad
JOIN participante part ON camp.numero_asociado_ganador = part.numero_asociado;*/
    }
?>