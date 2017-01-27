<?php
namespace Controller;

use \W\Security\AuthentificationModel;
use \W\Controller\Controller;
use Model\LoginModel;
use Model\SignupModel;
use \W\Model\UsersModel;



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
        unset($_SESSION['user']);
        $this->show('default/home');
    }

    /*********************************************************************
     *                METHOD POUR CREATION UTILISATEURS
     *
     ********************************************************************/

    public function inscription()
    {
        $this->show('user/inscription');
    }

    public function createUser()
    {
        // ON VERIFIE SI LE MAIL OU LE USERNAME EST DEJA DANS LA BDD
        $ifExist = new UsersModel();
        $mailExist = $ifExist->emailExists($_POST['email']);
        $userExist = $ifExist->usernameExists($_POST['username']);

        if ($userExist == true)
        {
            $msg = "Pseudo déjà utilisé";
            $this->show('user/inscription', ['msg' => $msg]);
        } elseif ($mailExist == true)
        {
            $msg = "Adresse email déjà existante";
            $this->show('user/inscription', ['msg' => $msg]);
        } else {
            // ON HASH LE PASSWORD
            $hash = new AuthentificationModel();
            $pwdHash = $hash->hashPassword($_POST['password']);
            // ON RECUPERE LE $_POST DANS UN TABLEAU POUR LE SOUMETTRE A LA METHOD.
            $data = array(
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => $pwdHash
            );
            $query = new SignupModel();
            $result = $query -> createUserQuery($data);
            if ($result)
            {
                $msg = "Votre compte a bien été crée, veuillez vous connecter !";
                $this->show('user/inscription', ['msg' => $msg]);
            }
        }

    }
}