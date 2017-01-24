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
        $this->show('admin/update', ['listeUser' => $result]);
    }

    public function updateUser()
    {
        $data = array(
            'username' => $_POST['username'],
            'role' => $_POST['role'],
            'email' => $_POST['email']
        );
        $query = new AdminModel();
        $result = $query -> adminUpdate($data, $_POST['userId']);
        if ($result)
        {
            $this ->admin();
        } else
            {
                $this->show('w_errors/404');
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

        $data = array(
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'picture' => $_POST['picture'],
            'schema' => $_POST['schema'],
            'link' => $link,
            'type_id' => $_POST['type_id'],
            'users_id' => 1,
            // A ENLEVER CAR FAIL DE BDD LORS DE LA CREATION DE LA METHOD.
            'type_id1' => $_POST['type_id']
            // FIN DE FAIL.
        );
        $query = new AdminModel();
        $result = $query -> adminAddArticle($data);
        if ($result)
        {
            echo "Article ajouté !";
            $this ->admin();
        }
    }
}