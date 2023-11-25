<?php

class Produk extends Controller{
    public function index(){

        $data['ProdukUserMotor'] = $this->model('READ')->ListProdukMotor();
        $data['ProdukUserMobil'] = $this->model('READ')->ListProdukMobil();
        $this->view("template/navbaruser");
        $this->view("user/produk/produkuser",$data);
        $this->view("template/footeruser");
    }
    public function detail($id_transport){


        $data['DetailProduk'] = $this->model('READ')->GetDetailProduk($id_transport);
        $this->view("template/navbaruser");
        $this->view("user/produk/produkdetail",$data);
        $this->view("template/footeruser");
    }
    public function pemesanan(){
        $this->view("template/navbaruser");
        $this->view("user/produk/formpemesanan");
        $this->view("template/footeruser");
    }
}