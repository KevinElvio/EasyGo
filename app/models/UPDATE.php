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


}