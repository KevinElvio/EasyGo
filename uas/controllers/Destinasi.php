<?php
class Destinasi extends Controller{
    public function index()
    {
        $this->view("template/session");
        $data['destinasi'] = $this->model('READ')->listDestinasi();
        $this->view("template/navbaruser");
        $this->view('user/destinasi/homepageuser',$data);
        $this->view("template/footeruser");
    }

}