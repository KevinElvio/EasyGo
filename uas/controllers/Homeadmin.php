<?php

class Homeadmin extends Controller {
    public function index()
    {
        $this->view("template/session");
        $data['Konfirmasi'] = $this->model('READ')->GetListKonfirmasi();
        $this->view("template/navbarrental");
        $this->view('admin/home/homepagerental',$data);
        $this->view("template/footeradmin");
    }
}