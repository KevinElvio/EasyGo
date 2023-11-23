<?php

class Profile extends Controller{
    public function index(){
        $this->view("template/navbaruser");
        $this->view("user/profile/profil-user");
        $this->view("template/footeruser");
    }
}