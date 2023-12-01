<?php
session_start();

if( isset($_SESSION["login"]))
{
    header("Location:" . BASEURL . "?controller=Destinasi");
    exit;
}

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
    public function registeradmin()
    {
        $this->view('login/registeradmin');
    }
    public function forgetpassword()
    {
        $this->view('login/forgetpass');
    }

    public function tambah()
    {
        if ($_POST['password'] == $_POST['re-password']) {
            if ($this->model('CREATE')->RegisterUser($_POST) > 0) {
                header('Location: ' . BASEURL . '/?controller=Login');
                exit;
            }
        }
        else 
        {
            header('Location:' . BASEURL . '/?controller=Login&method=register');
            exit;
        }
    }

    public function tambahadmin()
    {
        if ($_POST['password'] == $_POST['re-password']) {
            if ($this->model('CREATE')->RegisterAdmin($_POST) > 0) {
                header('Location: ' . BASEURL . '/?controller=Login');
                exit;
            }
        }
        else 
        {
            header('Location:' . BASEURL . '/?controller=Login&method=registeradmin');
            exit;
        }
    }

    public function validasi()
    {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $passRent = $_POST['password'];

        $data['validasi'] = $this->model('READ')->login_user($username, $password);
        $data['validasiAdmin'] = $this->model('READ')->login_admin($username, $passRent);

        if ($data['validasi'] != NULL) {
            $_SESSION["login"] = true ;
            header("Location:" . BASEURL . "/?controller=Destinasi");
            exit(); 
        } elseif ($data['validasiAdmin'] != NULL) {
            $_SESSION["loginAdmin"] = true ;
            header("Location:" . BASEURL . "/?controller=Homeadmin");
            exit();
        } elseif ($data['validasi'] == NULL) {
            
            header("Location:" . BASEURL . "/?controller=Login");
            exit(); 
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
