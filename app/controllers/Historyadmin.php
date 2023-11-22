<?php

class Historyadmin extends Controller {

    public function index(){
        $data['history'] = $this->model('historyRental_model')->getAllhistory();
        $this->view("template/navbarrental");
        $this->view('admin/history/historyrental', $data);
    }

    public function detail($id_order){
        $data['history'] = $this->model('historyRental_model')->getHistoryById($id_order);
        $this->view("template/navbarrental");
        $this->view('admin/history/detailhistoryrental', $data);
    }
}