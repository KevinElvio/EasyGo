<?php

class Destinasi extends Controller{
    public function index()
    {

        $data['destinasi'] = $this->model('READ')->listDestinasi();
        $this->view("template/navbaruser");
        $this->view('user/destinasi/homepageuser',$data);
        $this->view("template/footeruser");
    }

}