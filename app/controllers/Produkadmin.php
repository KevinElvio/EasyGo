<?php

class Produkadmin extends Controller {
    public function index()
    {
        $this->view("template/navbarrental");
        $this->view('admin/produk/rentalmobil');
    }

    public function tambah()
    {
        $this->view("template/navbarrental");
        $this->view('admin/produk/createproduk');
    }

    public function update()
    {
        $this->view("template/navbarrental");
        $this->view('admin/produk/updateproduk');
    }

}