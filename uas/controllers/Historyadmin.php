<?php

class Historyadmin extends Controller {

    public function index(){
        $this->view("template/session");
        $data['history'] = $this->model('READ')->getAllhistory();
        $this->view("template/navbarrental");
        $this->view('admin/history/historyrental', $data);
        $this->view("template/footeradmin");
    }

    public function detail($id_order){
        $this->view("template/session");
        $data['history'] = $this->model('READ')->getHistoryById($id_order);
        $this->view("template/navbarrental");
        $this->view('admin/history/detailhistoryrental', $data);
        $this->view("template/footeradmin");
    }
}