<?php

class User_model{
    // private $username = '';
    // private $nama_lengkap = '';
    // private $alamat = '';
    // private $telp = '';
    // private $tgl_lahir = '';
    // private $foto = '';

    // private $password = '';

    // public function get_user(){
    //     return $this->username;
    // }
    private $table= 'tbl_user';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM' . $this->table);
        return $this->db->resultSet();
    }

}