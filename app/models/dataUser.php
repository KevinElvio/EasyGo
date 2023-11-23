<?php

class DataUser
{
    private $db;

    public function __construct()
    {
        $db = new Database;      
    }

    public function RegisterUser($data)
    {
        $query = "INSERT INTO tbl_user VALUES ('', :username, :nama_lengkap, :alamat, :no_telp, :email_user, :tgl_lahir, :foto, :password )";

        $this->db->query($query);
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email_user', $data['email_user']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        $this->db->rowCount();


    }
}

