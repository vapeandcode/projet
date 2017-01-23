<?php
namespace Model;
use W\Model\UsersModel;

//class LoginModel extends \W\Model\Model
class LoginModel extends UsersModel
{

    public function loginubmit($email)
    {
        //var_dump($_POST);
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
            }

    }
}