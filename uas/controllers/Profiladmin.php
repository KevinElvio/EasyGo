<?php

class Profiladmin extends Controller{
    public function index()
    {
        $this->view("template/sessionAdmin");
        $this->view("template/navbarrental");
        $this->view('admin/profile/profilrental');
        $this->view("template/footeradmin");
    }

    public function editprofil()
    {
        $this->view("template/sessionAdmin");
        $this->view("template/navbarrental");
        $this->view('admin/profile/edit_profilrental');
        $this->view("template/footeradmin");
    }
}