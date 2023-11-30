<?php

class UPDATE
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function lupaPassword($username, $password)
    {
        $this->db->query("UPDATE tbl_user SET username= :username, password= :password");
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);

        return $this->db->single();

    }

    public function UpdateKendaraan($foto_transport, $nama_transport, $total_kilometer, $deskripsi_produk, $tahun_keluar, $harga_sewa, $id_transport)
    {
        $this->db->query('UPDATE tbl_transport SET foto_transport = :foto_transport, nama_transport = :nama_transport, total_kilometer = :total_kilometer, deskripsi_produk = :deskripsi_produk, tahun_keluar = :tahun_keluar, harga_sewa = :harga_sewa WHERE id_transport = :id_transport;');

        // $this->db->bind('foto_transport',$foto_transport);
        // $this->db->bind('nama_transport',$nama_transport);
        // $this->db->bind('total_kilometer',$total_kilometer);
        // $this->db->bind('deskripsi_produk',$deskripsi_produk);
        // $this->db->bind('tahun_keluar',$tahun_keluar);
        // $this->db->bind('harga_sewa',$harga_sewa);
        
        $this->db->bind('id_transport',$id_transport);

        $this->db->execute();
        return $this->db->rowCount();

        
    }


}