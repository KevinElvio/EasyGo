<?php

class dataUser
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

    public function login_user($username, $password)
    {
        // $query= ;

        $this->db->query('select username, password form tbl_user where username= :username AND password= :password');
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);

        $this->db->execute();

    }
}
