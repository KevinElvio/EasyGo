<?php

class Produkadmin extends Controller {
    public function index()
    {
        $data['MobilAdmin'] = $this->model('READ')->ListMobilAdmin();
        $data['MotorAdmin'] = $this->model('READ')->ListMotorAdmin();
        $this->view("template/navbarrental");
        $this->view('admin/produk/rentalmobil', $data);
        $this->view("template/footeradmin");
    }

    public function tambah()
    {
        // $Tambah = $_POST['file']. $_POST['JenisKendaraan'] . $_POST['NamaTransport'] . $_POST['MerkMobil'] . $_POST['HargaSewa'] . $_POST['TotalKilometer'] . $_POST['Deskripsi'];
        
        $this->view("template/navbarrental");
        $this->view('admin/produk/createproduk');
        $this->view("template/footeradmin");

    }

    public function tambahprodukadmin()
    {

        if($this->model('CREATE')->TambahKendaraan($_POST) > 0)
        {
            header('Location: ' . BASEURL . '/Produkadmin');
            exit;
        }
        
    }



    public function update()
    {
        $this->view("template/navbarrental");
        $this->view('admin/produk/updateproduk');
        $this->view("template/footeradmin");
    }

}