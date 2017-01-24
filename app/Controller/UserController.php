<?php
namespace Controller;

use \W\Controller\Controller;
use \Model\LoginModel;
use \W\Security\AuthentificationModel;


class UserController extends Controller
{
    public function home()
    {
        $this->show('user/home');
    }

    public function loginFrom()
    {
        $this->show('user/login');
    }

    public function loginSubmit()
    {
        /*   $tintin = new LoginModel();
           $email = $_POST['email'];

           $query = $tintin ->loginubmit($email);

           if ($query === 1){
               $this->show('user/loginSuccess');
           } elseif ($query === 0){
               $this->show('user/loginFail');
           }*/
        $userLog = new LoginModel();
        $result = $userLog->login($_POST);

        // SI L'UTILISATEUR EST CONNECTE IL EST ENVOYE VERS LA PAGE SUCCES
        if ($result == "login")
        {
            $this->show('user/loginSuccess');
        }
        else
        {
            $this->show('user/loginFail');
        }
    }

    public function logout()
    {
        $this->show('user/logout');
    }

    public function inscription()
    {
        $this->show('user/inscription');
    }
}