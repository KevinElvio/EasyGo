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

    public function hapus($id_transport)
    {
        if($this->model('DELETE')->HapusKendaraan($id_transport) > 0)
        {
            header('Location: ' . BASEURL . '/?controller=Produkadmin');
            exit;
        }
        
    }

    public function tambahprodukadmin()
    {

        if($this->model('CREATE')->TambahKendaraan($_POST) > 0)
        {
            header('Location: ' . BASEURL . '/?controller=Produkadmin');
            exit;
        }
        
    }


    public function update($id_transport)
    {
        $data['ALLProduk'] = $this->model('READ')->AllProdukAdmin($id_transport);
        $this->view("template/navbarrental");
        $this->view('admin/produk/updateproduk',$data);
        $this->view("template/footeradmin");
    }

    public function updatedata($id_transport)
    {
        $result = $this->model('UPDATE')->UpdateKendaraan($id_transport);

        if ($result !== null && $result > 0) {
            // Jika update berhasil
            header('Location: ' . BASEURL . '/?controller=Produkadmin');
            exit;
        } else {
            header('Location: ' . BASEURL . '/?controller=Produkadmin');
            exit;
        }





        // if($this->model('UPDATE')->UpdateKendaraan($_POST) != null)
        // {
        //     header('Location: ' . BASEURL . '/?controller=Produkadmin');
        //     exit;
        // }
    }

}