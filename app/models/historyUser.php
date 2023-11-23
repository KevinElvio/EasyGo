<?php

// class historyUser{
//     private $db;
//     private $nama = "";
//     private $tgl_order = "";
//     private $id_order = "";
//     public function __construct() 
//     {
//         $this->db = new Database();

    
//     }

//     public function getAllhistory()
//     {
//         $this->db->query('select foto_transport, nama_transport, tgl_order, id_order, DATEDIFF(tgl_pengembalian, tgl_peminjaman) * harga_sewa AS total, jenis_status
//         from tbl_order o
//         join tbl_user u on u.id_user = o.id_user
//         join tbl_transport t on t.id_transport = o.id_transport
//         join tbl_statusorder s on s.id_statusorder = o.id_statusorder');
//         return $this->db->resultSet();
//     }

    // public function get_user(){
    //     return $this->username;
    // }
    // private $table= 'tbl_user';
    // private $db;
    // public function __construct()
    // {
    //     $this->db = new Database;
    // }

    // public function getAllMahasiswa()
    // {
    //     $this->db->query('SELECT * FROM' . $this->table);
    //     return $this->db->resultSet();
    // }
// }
