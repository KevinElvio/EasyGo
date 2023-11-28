<?php

class Controller{
    public function view($view, $data = [])
    {

        require_once '../uas/views/' . $view . '.php' ;
    }

    public function model($model){
        require_once '../uas/models/'. $model . '.php';
        return new $model;
    }



}