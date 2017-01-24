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
     *                METHOD POUR AFFICHAGE UTILISATEURS
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
     *                METHOD POUR DELETE LES UTILISATEURS
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
     *                METHOD POUR UPDATE LES UTILISATEURS
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
}