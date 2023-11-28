<?php

class DELETE{

    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function HapusKendaraan($id_transport)
    {
        $this->db->query('DELETE FROM tbl_transport WHERE id_transport = :id_transport');
        $this->db->bind('id_transport',$id_transport);

        $this->db->execute();
        return $this->db->RowCount();

    }

}