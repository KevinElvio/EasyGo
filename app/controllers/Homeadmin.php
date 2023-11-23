<?php

class Homeadmin extends Controller {
    public function index()
    {
        $this->view("template/navbarrental");
        $this->view('admin/home/homepagerental');
        $this->view("template/footeradmin");
    }
}