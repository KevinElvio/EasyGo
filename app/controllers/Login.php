<?php

class login extends Controller{
    // public function index($nama = 'Kevin', $pekerjaan = 'Mahasiswa')
    // {
    //     echo"Hello $nama, Saya bekerja sebagai $pekerjaan ";
    // }
    // public function page()
    // {
    //     echo"Hello, This is About";
    // }

    public function index()
    {
        $this->view('login/login');
    }

    public function register()
    {
        $this->view('login/register-user');
    }

}