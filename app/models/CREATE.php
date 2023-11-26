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

    public function TambahKendaraan($data)
    {
        $this->db->query('insert into tbl_transport (nama_transport, harga_sewa, total_kilometer, tahun_keluar, deskripsi_singkat, foto_transport) VALUES (:nama_transport, :harga_sewa, :total_kilometer, :tahun_keluar, :deskripsi_singkat, :foto_transport)');

        $this->db->bind('nama_transport', $data['nama_transport']);
        $this->db->bind('harga_sewa', $data['harga_sewa']);
        $this->db->bind('total_kilometer', $data['total_kilometer']);
        $this->db->bind('tahun_keluar', $data['tahun_keluar']);
        $this->db->bind('deskripsi_singkat', $data['deskripsi_singkat']);
        $this->db->bind('foto_transport', $data['foto_transport']);
        $this->db->execute();
        return $this->db->rowCount();
    }

}