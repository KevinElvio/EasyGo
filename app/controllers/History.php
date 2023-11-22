<?php

class History extends Controller {

    public function index(){
        $data['historyUser'] = $this->model('historyUser_model')->getAllhistoryUser();
        $this->view("template/navbaruser");
        $this->view('user/history/historyuser', $data);
    }

    public function detail(){
        $this->view("template/navbaruser");
        $this->view('user/history/detailhistoryuser');
    }
}