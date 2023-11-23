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

    public function logout()
    {
        $this->view('login/logout');
    }

    public function forgetpassword()
    {
        $this->view('login/forgetpass');
    }

    public function tambah()
    {
        var_dump($_POST);
    }
}
