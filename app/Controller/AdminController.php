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

        /*if (isset($_POST['picture']) || isset($_POST['schema']))
        {
            $filename = $_FILES['name'];
            var_dump($_FILES);*/

            /*$picture = new AdminModel();
            $dir = __DIR__;
            var_dump($dir);

            $erase = 'app\Controller';
            $change = 'public\assets\img\\img_article\\';
            $imgDir = str_replace($erase, $change, $dir);
            var_dump($imgDir);

            $picture -> upload('picture', $imgDir . 'penelope', 1000000, array('png','gif','jpg','jpeg') );
            var_dump('picture', $imgDir . $filename, 1000000, array('png','gif','jpg','jpeg'));*/
        /*}*/
        // ON RECUPERE LE $_POST DANS UN TABLEAU POUR LE SOUMETTRE A LA METHOD.
        $data = array(
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'picture' => $_POST['picture'],
            'schema' => $_POST['schema'],
            'link' => $link,
            'type_id' => $_POST['type_id'],
            // ID = 1, pour le moment pour faire du test.
            'users_id' => 1,
            // A ENLEVER CAR FAIL DE BDD LORS DE LA CREATION DE LA METHOD.
//            'type_id1' => $_POST['type_id']
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