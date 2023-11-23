<?php

class Login extends Controller
{
    public function index()
    {
        $this->view('login/login');
    }
    public function register()
    {
        $this->view('login/register');
    }
    public function forgetpassword()
    {
        $this->view('login/forgetpass');
    }

    public function tambah()
    {
        if($this->model('dataUser')->RegisterUser($_POST) > 0 )
        {
            header('location: ' . BASEURL . '/produk');
        }
    }
}
