<?php

class Destinasi extends Controller{
    public function index()
    {
        $this->view("template/navbaruser");
        $this->view('user/destinasi/homepageuser');
        $this->view("template/footeruser");
    }

}