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
                header('Location: ' . BASEURL . '/login');
                exit;
            }
        }
        else 
        {
            header('Location:' . BASEURL . '/login/register');
        }

        // elseif ($_POST['admin'] == checked)
        // {
        //     $this
        // };
    }

    public function validasi()
    {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $data['validasi'] = $this->model('READ')->login_user($username, $password);



        if ($data['validasi'] == NULL) {
            header("Location:" . BASEURL . "/login");
        } else {
            header("Location:" . BASEURL . "/destinasi");
        }


    }

    // public function forgetpw()
    // {

    //     $username = $_POST['username'];
    //     $password = $_POST['password'];
    //     $Repass = $_POST['re-password'];

    //     $data['lupaPW'] = $this->model('UPDATE')->lupaPassword($username,$password);

    //     if($data['lupaPW'] == )

    //     if ($_POST['password'] == $_POST['re-password']) {
    //         if ($this->model('dataUser')->RegisterUser($_POST) > 0) {
    //             header('Location: ' . BASEURL . '/produk');
    //             exit;
    //         }
    //     }
    // }
}
