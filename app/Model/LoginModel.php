<?php
namespace Model;

use \W\Model\UsersModel;
use \W\Model\ConnectionModel;
use \W\Security\AuthentificationModel;

//class LoginModel extends \W\Model\Model
class LoginModel extends UsersModel
{
    public function login(array $data)
    {
       /* //var_dump($_POST);
            $query = $this -> getUserByUsernameOrEmail($email);
            var_dump($query['id']);
            if (isset($query['id']))
            {

                $_SESSION['pseudo'] = $query['username'];
                $_SESSION['role'] = $query['role'];
                var_dump($_SESSION);
                return 1;
            }
            else {
                session_unset();
                return 0;
            }*/

       // SI LES CHAMPS SONT REMPLIS
        if(!empty($data['username']) && !empty($data['password']))
        {
            $userLogin = new AuthentificationModel();

            // SI LES IDENTIFIANTS SONT PRESENTS EN BDD
            if($userLogin->isValidLoginInfo($data['username'], $data['password']) != 0)
            {
                $userConnection = new UsersModel();

                // SELECTIONNE L'UTILISATEUR PAR SON PSEUDO
                $userData = $userConnection->getUserByUsernameOrEmail($data['username']);

                // CONNECTION DE L'UTILISATEUR
                $userLogin->logUserIn($userData);
            }
            else
            {
                echo "IDENTIFIANTS INCORRECTS !";
            }
        }
        else
        {
          echo "CHAMPS INCORRECTS !";
        }
    }
}