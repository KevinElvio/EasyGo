<?php

class Produk extends Controller{
    public function index(){
        $this->view("template/navbaruser");
        $this->view("user/produk/produkuser");
        $this->view("template/footeruser");
    }
    public function detail(){
        $this->view("template/navbaruser");
        $this->view("user/produk/produkdetail");
        $this->view("template/footeruser");
    }
    public function pemesanan(){
        $this->view("template/navbaruser");
        $this->view("user/produk/formpemesanan");
        $this->view("template/footeruser");
    }
}