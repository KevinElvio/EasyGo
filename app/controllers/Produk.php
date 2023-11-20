<?php

class Produk extends Controller{
    public function index(){
        $this->view("template/navbaruser");
        $this->view("user/produk/produkuser");
    }
    public function detail(){
        $this->view("user/produk/produkdetail");
    }
    public function pemesanan(){
        $this->view("user/produk/formpemesanan");
    }
}