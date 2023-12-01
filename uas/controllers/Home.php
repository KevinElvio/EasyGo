<?php

class Home extends Controller{
    public function index()
    {
        $this->view("template/session");
        $this->view('user/home/index');
    }
}