<?php

class Profiladmin extends Controller{
    public function index()
    {
        $this->view("template/navbarrental");
        $this->view('admin/profile/profilrental');
        $this->view("template/footeradmin");
    }
}