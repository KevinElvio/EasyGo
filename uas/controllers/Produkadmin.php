<?php

class Produkadmin extends Controller {
    public function index($page = 1)
    {
        $this->view("template/session");
        $model = $this->model('READ');
        
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
        $this->view("template/session");
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
        $this->view("template/session");
        // $Tambah = $_POST['file']. $_POST['JenisKendaraan'] . $_POST['NamaTransport'] . $_POST['MerkMobil'] . $_POST['HargaSewa'] . $_POST['TotalKilometer'] . $_POST['Deskripsi'];
        
        $this->view("template/navbarrental");
        $this->view('admin/produk/createproduk');
        $this->view("template/footeradmin");

    }

    public function hapus($id_transport)
    {
        $this->view("template/session");
        if($this->model('DELETE')->HapusKendaraan($id_transport) > 0)
        {
            header('Location: ' . BASEURL . '/?controller=Produkadmin');
            exit;
        }
        
    }

    public function tambahprodukadmin()
    {
        $this->view("template/session");

        if($this->model('CREATE')->TambahKendaraan($_POST) > 0)
        {
            header('Location: ' . BASEURL . '/?controller=Produkadmin');
            exit;
        }
        
    }


    public function update($id_transport)
    {
        $this->view("template/sessionAdmin");
        $data['ALLProduk'] = $this->model('READ')->AllProdukAdmin($id_transport);
        $this->view("template/navbarrental");
        $this->view('admin/produk/updateproduk',$data);
        $this->view("template/footeradmin");
    }

    public function updatedata() {
        $this->view("template/sessionAdmin");
        // Assuming you have a model for handling data updates
        $produkModel = $this->model('ProdukModel'); // Adjust the model class name based on your actual implementation

        // Assuming your form data is submitted via POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Collect form data
            $id_transport = $_POST['id_transport'];
            $merkMobil = $_POST['MerkMobil'];
            $hargaSewa = $_POST['harga'];
            $totalKilometer = $_POST['total_kilometer'];
            $tahunKeluar = $_POST['tahun'];
            $deskripsi = $_POST['deskripsi'];

            // Call the model method to update data
            $result = $produkModel->UpdateKendaraan($id_transport, $merkMobil, $hargaSewa, $totalKilometer, $tahunKeluar, $deskripsi);

            // Check the result and redirect accordingly
            if ($result !== null && $result > 0) {
                // Jika update berhasil
                header('Location: ' . BASEURL . '/?controller=Produkadmin');
                exit;
            } else {
                // Jika update gagal
                header('Location: ' . BASEURL . '/?controller=Produkadmin');
                exit;
            }
        }
    }

}