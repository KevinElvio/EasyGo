<?php

class Login extends Controller
{
    public function index()
    {
        $this->view('login/login');
    }
    public function register()
    {
        $this->view('login/register');
    }
    public function forgetpassword()
    {
        $this->view('login/forgetpass');
    }

    public function tambah()
    {
        if ($_POST['password'] == $_POST['re-password']) {
            if ($this->model('CREATE')->RegisterUser($_POST) > 0) {
                header('Location: ' . BASEURL . '/produk');
                exit;
            }
        } else {
            header('Location:' . BASEURL . '/login/register');
        }

        // elseif ($_POST['admin'] == checked)
        // {
        //     $this
        // };
    }

    public function validasi()
    {
        // $username = $this->model('dataUser')->login_user($data['username']);
        // $password = $this->model('dataUser')->login_user($data['password']);

        // if($_POST['username'] != $username && $_POST['password'] != $password)
        // {
        //     header('Location:'.BASEURL.'/login');
        // }
        // else
        // {
        //     header('Location:'.BASEURL.'/produk');
        // }

        $username = $_POST['username'];
        $password = $_POST['password'];

        $data['validasi'] = $this->model('READ')->login_user($username, $password);


        if ($data['validasi'] == NULL) {
            header("Location:" . BASEURL . "/login");
        } else {
            header("Location:" . BASEURL . "/produk");
        }



        // if ($data['validasi']['username'] == $username && $data['validasi']['password'] == $password) {
        //     header("Location:" . BASEURL . "/produk");
        // } else {
        //     header("Location:" . BASEURL . "/login");
        // }




        // if ($data['validasi'] == $username && $data['validasi'] == $password) {
        //     header("Location:" . BASEURL . "/produk");
        // } elseif ($data['validasi'] != $username || $data['validasi'] != $password) {
        //     header("Location:" . BASEURL . "/login");
        // }
    }

    public function forgetpw()
    {


        if ($_POST['password'] == $_POST['re-password']) {
            if ($this->model('dataUser')->RegisterUser($_POST) > 0) {
                header('Location: ' . BASEURL . '/produk');
                exit;
            }
        }
    }
}
