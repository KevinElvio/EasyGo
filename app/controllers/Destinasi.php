<?php

class Destinasi extends Controller{
    public function index($id_kota)
    {

        $data['destinasi'] = $this->model('READ')->listDestinasi($id_kota);
        $this->view("template/navbaruser");
        $this->view('user/destinasi/homepageuser',$data);
        $this->view("template/footeruser");
    }

}