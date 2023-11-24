<?php

class Produk extends Controller{
    public function index($data){
        $data['produkUser']= $this->model('READ')->ListProdukUser();
        $this->view("template/navbaruser");
        $this->view("user/produk/produkuser", $data);
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