<?php

class History extends Controller {

    public function index(){
        $data['historyUser'] = $this->model('READ')->getAllhistoryUser();
        $this->view("template/navbaruser");
        $this->view('user/history/historyuser', $data);
        $this->view("template/footeruser");
    }

    public function detail($id_order){
        $data['historyUser'] = $this->model('READ')->getHistoryUserById($id_order);
        $this->view("template/navbaruser");
        $this->view('user/history/detailhistoryuser',$data);
        $this->view("template/footeruser");
    }
}