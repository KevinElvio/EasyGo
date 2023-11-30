<?php

class Produkadmin extends Controller {
    public function index($page = 1)
    {$model = $this->model('READ');
        
        $itemsPerPage = 10;
        $totalItems = $model->CountMobil();
        $totalPages = ceil($totalItems / $itemsPerPage);

        if ($page < 1) {
            $page = 1;
        } elseif ($page > $totalPages && $totalPages > 0) {
            $page = $totalPages;
        }

        $start = ($page - 1) * $itemsPerPage;

        $data['MobilAdmin'] = $model->ListProdukMobil($start, $itemsPerPage);
        
        $data['pagination'] = [
            'currentPage' => $page,
            'totalPages' => $totalPages,
        ];
        $this->view("template/navbarrental");
        $this->view('admin/produk/rentalmobil', $data);
        $this->view("template/footeradmin");
    }

    public function motor($page = 1)
    {
        $model = $this->model('READ');
        
        $itemsPerPage = 10;
        $totalItems = $model->CountMotor();
        $totalPages = ceil($totalItems / $itemsPerPage);

        if ($page < 1) {
            $page = 1;
        } elseif ($page > $totalPages && $totalPages > 0) {
            $page = $totalPages;
        }

        $start = ($page - 1) * $itemsPerPage;

        $data['MotorAdmin'] = $model->ListProdukMotor($start, $itemsPerPage);
        
        $data['pagination'] = [
            'currentPage' => $page,
            'totalPages' => $totalPages,
        ];
       
        $this->view("template/navbarrental");
        $this->view('admin/produk/rentalmotor', $data);
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



    public function update()
    {
        $this->view("template/navbarrental");
        $this->view('admin/produk/updateproduk');
        $this->view("template/footeradmin");
    }

}