<?php

class History extends Controller {

    public function index(){
        $data['historyUser'] = $this->model('historyUser_model')->getAllhistoryUser();
        $this->view("template/navbaruser");
        $this->view('user/history/historyuser', $data);
    }

    public function detail(){
        $data['historyUser'] = $this->model('historyUser_model')->getHistoryUserById($id_order);
        $this->view("template/navbaruser");
        $this->view('user/history/detailhistoryuser',$data);
    }
}