<?php

class Produkadmin extends Controller {
    public function index()
    {
        $this->view("template/navbarrental");
        $this->view('admin/produk/rentalmobil');
        $this->view("template/footeradmin");
    }

    public function tambah()
    {
        $this->view("template/navbarrental");
        $this->view('admin/produk/createproduk');
        $this->view("template/footeradmin");
    }

    public function update()
    {
        $this->view("template/navbarrental");
        $this->view('admin/produk/updateproduk');
        $this->view("template/footeradmin");
    }

}