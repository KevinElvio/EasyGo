<?php

class Profile extends Controller{
    public function index(){
        $this->view("user/profile/profil-user");
    }
}