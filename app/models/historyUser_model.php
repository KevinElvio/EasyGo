<?php

class historyUser_model{

    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllhistoryUser()
    {
        $this->db->query("select foto_transport, nama_transport, tgl_order, id_order, DATEDIFF(tgl_pengembalian, tgl_peminjaman) * harga_sewa AS total, jenis_status
        from tbl_order o
        join tbl_user u on u.id_user = o.id_user
        join tbl_transport t on t.id_transport = o.id_transport
        join tbl_statusorder s on s.id_statusorder = o.id_statusorder
        ");

        return $this->db->resultSet();
        
    }

    public function getHistoryUserById($id_order)
    {
        $this->db->query("select foto_transport, nama_transport, id_order, nama_rental, harga_sewa, tgl_peminjaman, tgl_pengembalian, nama_kota, DATEDIFF(tgl_pengembalian, tgl_peminjaman) * harga_sewa AS total
        from tbl_order o
        join tbl_user u on u.id_user = o.id_user
        join tbl_transport t on t.id_transport = o.id_transport
        join tbl_statusorder s on s.id_statusorder = o.id_statusorder
        join tbl_rental r on r.id_rental = t.id_rental
        join tbl_kota k on k.id_kota = r.id_kota where id_order:id_order");

        $this->db->bind('id_order', $id_order);
        return $this->db->single();  
    }
}
