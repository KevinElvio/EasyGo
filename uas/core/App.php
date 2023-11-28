<?php

class App
{
    protected $controller = "Home";
    protected $method = "index";
    protected $params = [];
    public function __construct()
    {
        $url = $this->parseURL();

        // Ini Controller
        if (file_exists('../uas/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            
            unset($url[0]);
        }

        require_once '../uas/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;


        // Method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Params
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // run controller & method, serta kirimkan params 
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    public function parseURL()
    {
        // if (isset($_GET['url'])) {
        //     $url = $_GET['url'];
        //     $url = rtrim($_GET['url'], '/');
        //     $url = filter_var($url, FILTER_SANITIZE_URL);
        //     $url = explode('/', $url);
        //     return $url;
        // }

        $url = [null, null];
        if (isset($_GET["controller"])) {
            $url[0] = $_GET["controller"];
        }
        if (isset($_GET["method"])) {
            $url[1] = $_GET["method"];
        }

        $url = [];

        // Mendapatkan nilai controller dari URL
        if (isset($_GET['controller'])) {
            $url[] = $_GET['controller'];
        }

        // Mendapatkan nilai method dari URL
        if (isset($_GET['method'])) {
            $url[] = $_GET['method'];
        }

        // Mendapatkan nilai parameter dari URL
        foreach ($_GET as $key => $value) {
            if ($key !== 'controller' && $key !== 'method') {
                $url[$key] = $value;
            }
        }

        return $url;

        

        
    }
}
