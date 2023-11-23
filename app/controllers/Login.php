<?php

class Login extends Controller
{

    public function index()
    {
        $this->view('user/login/login');
    }

    public function register()
    {
        $this->view('user/login/register');
    }

    public function logout()
    {
        $this->view('user/login/logout');
    }

    public function forgetpassword()
    {
        $this->view('user/login/forgetpass');
    }

    public function tambah()
    {
        var_dump($_POST);
    }
}
