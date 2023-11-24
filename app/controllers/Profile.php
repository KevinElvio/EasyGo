<?php

class Profile extends Controller{
    public function index(){
        // $data['DataProfile'] = $this->model('READ')->DataProfile();
        $this->view("template/navbaruser");
        $this->view("user/profile/profil-user");
        $this->view("template/footeruser");
    }
}