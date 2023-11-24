<?php

class READ{


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
        join tbl_kota k on k.id_kota = r.id_kota where id_order=:id_order");

        $this->db->bind('id_order', $id_order);
        return $this->db->single();
    }

    public function getAllhistory() 
    {
        $this->db->query("select foto_transport, nama_transport, tgl_order, id_order, DATEDIFF(tgl_pengembalian, tgl_peminjaman) * harga_sewa AS total, jenis_status
        from tbl_order o
        join tbl_user u on u.id_user = o.id_user
        join tbl_transport t on t.id_transport = o.id_transport
        join tbl_statusorder s on s.id_statusorder = o.id_statusorder
        ");

        return $this->db->resultSet();
    }

    public function getHistoryById($id_order)
    {
        $this->db->query("select foto_transport, nama_transport, id_order, nama_rental, harga_sewa, tgl_peminjaman, tgl_pengembalian, nama_kota, DATEDIFF(tgl_pengembalian, tgl_peminjaman) * harga_sewa AS total
        from tbl_order o
        join tbl_user u on u.id_user = o.id_user
        join tbl_transport t on t.id_transport = o.id_transport
        join tbl_statusorder s on s.id_statusorder = o.id_statusorder
        join tbl_rental r on r.id_rental = t.id_rental
        join tbl_kota k on k.id_kota = r.id_kota where id_order=:id_order");

        $this->db->bind('id_order', $id_order);
        return $this->db->single();
    }

    public function login_user($username, $password)
    {
        // $query= ;

        $this->db->query('select * from tbl_user where username= :username AND password= :password');
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);

       return $this->db->resultSet();

    }

    public function login_admin($username, $passRent)
    {
        $this->db->query('SELECT * FROM tbl_rental where username= :username AND pass_rental= :passRent');
        $this->db->bind('username', $username);
        $this->db->bind('passRent', $passRent);

        return $this->db->resultSet();


    }

    public function listDestinasi()
    {
        $this->db->query('select foto_kota, nama_kota from tbl_kota');
        return $this->db->resultSet();
    }

    public function ListProdukUser()
    {
        $this->db->query('');
    }

}