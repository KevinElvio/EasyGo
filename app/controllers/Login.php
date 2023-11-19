<?php

class login extends Controller{

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


    
}