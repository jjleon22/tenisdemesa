<?php
class ParticipanteDAO extends Query
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getHospedajes($id)
    {
        $SQL = "select (select nombre from hotel h where ho.id_hotel=h.id_hotel), fecha_inicio, fecha_fin from hospedaje ho where numero_asociado=".$id.";";
        $data = $this->selectAll($SQL);
        return $data;
    }
}
?>