<?php

class Historyadmin extends Controller {

    public function index(){
        $this->view("template/navbarrental");
        $this->view('admin/history/historyrental');
    }

    public function detail(){
        $this->view("template/navbarrental");
        $this->view('admin/history/detailhistoryrental');
    }
}