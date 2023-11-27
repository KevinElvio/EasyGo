<?php

class CREATE
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function RegisterUser($data)
    {
        // $query = "insert into tbl_user (username, nama_lengkap, alamat, no_telp, email_user, tgl_lahir, password) VALUES (:username, :nama_lengkap, :alamat, :no_telp, :email_user, :tgl_lahir, :foto, :password )";

        // $query = "insert into tbl_user (nama_lengkap, username, email_user, password) VALUES (:nama_lengkap, :username, :email_user, :password )";
        // (username, nama_lengkap, alamat, no_telp, email_user, tgl_lahir, password)         

        $query = "insert into tbl_user (nama_lengkap, username, email_user, password) VALUES (:nama_lengkap, :username, :email_user,:password )";

        $this->db->query($query);
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email_user', $data['email_user']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function RegisterAdmin($data)
    {
        $this->db->query('insert into tbl_rental (nama_rental, username, email, no_telp, pass_rental, link_maps, id_provinsi, id_kota) VALUES (:nama_rental, :username, :email, :no_telp, :pass_rental, :link_maps, :id_provinsi, :id_kota)');


        $this->db->bind('nama_rental', $data['nama_rental']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email_user']);
        $this->db->bind('no_telp', $data['no_telp']);
        $this->db->bind('pass_rental', $data['password']);
        $this->db->bind('link_maps', $data['link_maps']);
        $this->db->bind('id_provinsi', $data['provinsi']);
        $this->db->bind('id_kota', $data['kota']);

        $this->db->execute();
        return $this->db->rowCount();
    }


    public function TambahKendaraan($data)
    {
        $this->db->query('insert into tbl_transport (nama_transport, merk, tahun_keluar, harga_sewa, total_kilometer, deskripsi_produk, foto_transport, id_jenistransport) VALUES (:nama_transport, :merk, :tahun_keluar, :harga_sewa, :total_kilometer, :deskripsi_produk, :foto_transport , :id_jenistransport)');
                
        $this->db->bind('nama_transport', $data['NamaTransport']);
        $this->db->bind('merk', $data['MerkMobil']);
        $this->db->bind('tahun_keluar', $data['TahunKeluar']);
        $this->db->bind('harga_sewa', $data['HargaSewa']);
        $this->db->bind('total_kilometer', $data['TotalKilometer']);
        $this->db->bind('deskripsi_produk', $data['Deskripsi']);
        $this->db->bind('foto_transport', $data['file']);
        $this->db->bind('id_jenistransport', $data['JenisKendaraan']);


        $this->db->execute();
        return $this->db->rowCount();
    }

}