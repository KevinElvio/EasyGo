<?php

class History extends Controller {

    public function index(){
        $this->view("template/navbaruser");
        $this->view('user/history/historyuser');
    }

    public function detail(){
        $this->view("template/navbaruser");
        $this->view('user/history/detailhistoryuser');
    }
}