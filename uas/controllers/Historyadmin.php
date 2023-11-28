<?php

class Historyadmin extends Controller {

    public function index(){
        $data['history'] = $this->model('READ')->getAllhistory();
        $this->view("template/navbarrental");
        $this->view('admin/history/historyrental', $data);
        $this->view("template/footeradmin");
    }

    public function detail($id_order){
        $data['history'] = $this->model('READ')->getHistoryById($id_order);
        $this->view("template/navbarrental");
        $this->view('admin/history/detailhistoryrental', $data);
        $this->view("template/footeradmin");
    }
}