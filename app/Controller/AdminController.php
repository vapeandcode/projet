<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 23/01/2017
 * Time: 11:14
 */

namespace Controller;

use \W\Controller\Controller;
use \Model\AdminModel;
use \W\Security\AuthentificationModel;
use Controller\UserController;


class AdminController extends Controller
{
    /*********************************************************************
     *                AFFICHAGE UTILISATEURS
     *
     ********************************************************************/

    public function admin()
    {
        $query = new AdminModel();
        $result = $query ->adminUsers();
        // On envoi le $result dans la vue afin de pouvoir l'afficher.
        $this->show('admin/admin', ['listeUser' => $result]);
    }

    /*********************************************************************
     *                DELETE LES UTILISATEURS
     *
     ********************************************************************/

    public function deleteUser()
    {
        $query = new AdminModel();
        $result = $query ->adminDelete($_POST['userId']);
        if ($result == true)
        {
            // On renvoi le METHOD admin() pour re-afficher la page avec la liste des utilisateur
            $this->admin();
        }
    }

    /*********************************************************************
     *                UPDATE LES UTILISATEURS
     *
     ********************************************************************/

    public function updateFindUser()
    {
        $query = new AdminModel();
        $result = $query -> adminFindUpdate($_POST['userId']);
        $this->show('admin/update_user', ['listeUser' => $result]);
    }

    public function updateUser()
    {
        // SI LA METHOD EST LANCE DEPUIS UN USER
        if (isset($_POST['myUserUpdate']))//nom du boutton submit coter user.
        {
            if ($_POST['password'] == '' ) // Si le user ne change pas sont password.
            {
                $data = array( // On ne recup que l'email.
                    'email' => $_POST['email']
                );
            } else {
                // ON HASH LE PASSWORD
                $hash = new AuthentificationModel();
                $pwdHash = $hash->hashPassword($_POST['password']);

                $data = array( // Sinon les deux.
                    'password' => $pwdHash,
                    'email' => $_POST['email']
                );
            }
        } else {
            // SI C EST LANCE DEPUIS ADMIN
            $data = array(
                'username' => $_POST['username'],
                'role' => $_POST['role'],
                'email' => $_POST['email']
            );
        }
        $query = new AdminModel();
        $result = $query -> adminUpdate($data, $_POST['userId']);
        if (isset($_POST['myUserUpdate']))
        {
            if ($result) {
                $homeUser = new UserController();
                $homeUser->myHome();
            } else {
                $this->show('w_errors/404');
            }
        } else {
            if ($result) {
                $this->admin();
            } else {
                $this->show('w_errors/404');
            }
        }
    }

    /*********************************************************************
     *                AJOUT ARTICLE
     *
     ********************************************************************/

    public function addArticle()
    {
        if (!isset($_POST['link'])) {
            $link = '';
        } else {
            $link = $_POST['link'];
        }

        // ON RECUPERE LE $_POST DANS UN TABLEAU POUR LE SOUMETTRE A LA METHOD.
        $data = array(
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'picture' => $_POST['picture'],
            'schema' => $_POST['schema'],
            'link' => $link,
            'type_id' => $_POST['type_id'],
            'users_id' => $_SESSION['user']['id']

        );
        $query = new AdminModel();
        $result = $query -> adminAddArticle($data);
        if ($result)
        {
            echo "Article ajouté !";
            $this ->admin();
        }
    }

    /*********************************************************************
     *                UPDATE ARTICLE
     *
     ********************************************************************/

    public function updateFindArticle()
    {
        $query = new AdminModel();
        $result = $query -> articleFindUpdate($_POST['articleId']);
        $this->show('admin/update_article', ['listeArticle' => $result]);
    }

    public function updateArticle()
    {
//            CONDITION SI PAS DE CHANGEMENT SUR IMAGE
        if ($_POST['picture'] == '') {

            if ($_POST['schema'] == '') {
//                SI AUCUN RENSEIGNEMENT D IMAGE
                $data = array(
                    'title' => $_POST['title'],
                    'description' => $_POST['description'],
                    'link' => $_POST['link'],
                    'type_id' => $_POST['type_id']
                );
            } else {
//              SI QUE SCHEMA !
                $data = array(
                    'title' => $_POST['title'],
                    'description' => $_POST['description'],
                    'schema' => $_POST['schema'],
                    'link' => $_POST['link'],
                    'type_id' => $_POST['type_id']
                );
            }
        } elseif ($_POST['schema'] == '') {
//          SI QUE PICTURE
            $data = array(
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'picture' => $_POST['picture'],
                'link' => $_POST['link'],
                'type_id' => $_POST['type_id']
            );
        } else {
//            SINON ON RENSEIGNE TOUT
            $data = array(
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'picture' => $_POST['picture'],
                'schema' => $_POST['schema'],
                'link' => $_POST['link'],
                'type_id' => $_POST['type_id']
            );
        }
        var_dump($data);
        $query = new AdminModel();
        $result = $query -> adminUpdateArticle($data, $_POST['articleId']);
        if ($result)
        {
            echo "GG garcon tu nest plus ligne 95 !";
        } else
        {
            $this->show('w_errors/404');
        }
    }

    public function deleteArticle()
    {
        $query = new AdminModel();
        $result = $query ->articleDelete($_POST['articleId']);
        if ($result == true)
        {
            // On renvoi le METHOD admin() pour re-afficher la page avec la liste des utilisateur
//            $this->admin();
            echo "gg cest suppr";
        }
    }
}