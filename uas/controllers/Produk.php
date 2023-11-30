<?php

class Produk extends Controller
{
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

        $data['mobil'] = $model->ListProdukMobil($start, $itemsPerPage);
        
        $data['pagination'] = [
            'currentPage' => $page,
            'totalPages' => $totalPages,
        ];
       
        $this->view("template/navbaruser");
        $this->view("user/produk/mobil", $data);
        $this->view("template/footeruser");
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

        $data['motor'] = $model->ListProdukMotor($start, $itemsPerPage);
        
        $data['pagination'] = [
            'currentPage' => $page,
            'totalPages' => $totalPages,
        ];
       
        $this->view("template/navbaruser");
        $this->view("user/produk/motor", $data);
        $this->view("template/footeruser");
    }


    public function detail($id_transport)
    {
        $this->view("template/session");
        $data['DetailProduk'] = $this->model('READ')->GetDetailProduk($id_transport);
        $this->view("template/navbaruser");
        $this->view("user/produk/produkdetail", $data);
        $this->view("template/footeruser");
    }
    public function pemesanan()
    {
        $this->view("template/session");
        $this->view("template/navbaruser");
        $this->view("user/produk/formpemesanan");
        $this->view("template/footeruser");
    }

}

