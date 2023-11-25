<?php

class READ
{


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

    public function listDestinasi($id_kota)
    {
        $this->db->query('select foto_transport, nama_transport, id_kota, tahun_keluar, harga_sewa
        from tbl_transport t
        join tbl_rental r on r.id_rental = t.id_rental
        join tbl_kota k on k.id_kota = r.id_kota
        where k.id_kota = :id_kota');

        $this->db->bind('id_kota', $id_kota);
        return $this->db->resultSet();
    }

    public function ListProdukMotor()
    {
        $this->db->query('select foto_transport, id_transport, id_kota, nama_transport, deskripsi_produk, tahun_keluar, harga_sewa
        from tbl_transport
        where id_jenistransport = 2');

        return $this->db->resultSet();
    }

    public function ListProdukMobil()
    {
        $this->db->query('select foto_transport, id_transport, id_kota, nama_transport, deskripsi_produk, tahun_keluar, harga_sewa
        from tbl_transport
        where id_jenistransport = 1');

        return $this->db->resultSet();
    }

    public function GetDetailProduk($id_transport)
    {
        $this->db->query('select foto_transport, id_transport, nama_transport, harga_sewa, total_kilometer, tahun_keluar, link_maps, deskripsi_produk
        from tbl_transport t
        join tbl_rental r 
        on t.id_rental = r.id_rental WHERE id_transport = :id_transport ');

        $this->db->bind('id_transport', $id_transport);
        return $this->db->single();
    }


    // public function DataProfile()
    // {
    //     $this->db->query('select foto, nama_lengkap, no_telp, email_user, alamat
    //     from tbl_user WHERE foto = :foto');
    // }
}
