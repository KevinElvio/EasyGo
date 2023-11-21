<?php

class History extends Controller {

    public function index(){
        // $data['nama'] = $this->model('historyUser')->getUser();
        $this->view("template/navbaruser", );
        $this->view('user/history/historyuser');
    }

    public function detail(){
        $this->view("template/navbaruser");
        $this->view('user/history/detailhistoryuser');
    }
}