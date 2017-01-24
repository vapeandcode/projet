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
       // SI LES CHAMPS SONT REMPLIS
        if(!empty($data['username']) && !empty($data['password']))
        {
            $userLogin = new AuthentificationModel();

            // SI LES IDENTIFIANTS SONT PRESENTS EN BDD
            //var_dump($userLogin->isValidLoginInfo("tatatiti", "toto"));
            if($userLogin->isValidLoginInfo($data['username'], $data['password']) != 0)
            {
                $userConnection = new UsersModel();
               // var_dump($userConnection);

                // SELECTIONNE L'UTILISATEUR PAR SON PSEUDO
                $userData = $userConnection->getUserByUsernameOrEmail($data['username']);

                // CONNECTION DE L'UTILISATEUR
                $userLogin->logUserIn($userData);

                return "login";
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