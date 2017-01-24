<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 23/01/2017
 * Time: 11:17
 */

namespace Model;


use W\Model\Model;

class AdminModel extends Model
{
    /*********************************************************************
     *                METHOD POUR AFFICHAGE UTILISATEURS
     *
     ********************************************************************/

    // Method qui permet de recuperer tous les utilisateur pour les mettre en forme dans un tableau.
    public function adminUsers()
    {
    //Definie la table w_users pour la method findAll().
        $this->setTable('w_users');
        $query = $this->findAll();
    //On recupere le result du findAll().
        return $query;
    }

    /*********************************************************************
     *                METHOD POUR DELETE LES UTILISATEURS
     *
     ********************************************************************/

    // Method qui permet de supprimer un utilisateur depuis son ID.
    public function adminDelete($id)
    {
    // Definie la table w_users pour la method findAll().
        $this->setTable('w_users');
        $query = $this->delete($id);
        if ($query = false) {
            echo "Une erreur est survenur lors de la suppression.";
            return false;
        } elseif ($this->delete($id)) {
            return true;
        }
    }

    /*********************************************************************
     *                METHOD POUR UPDATE LES UTILISATEURS
     *
     ********************************************************************/

    // Method qui permet de recuperer un utilisateur par son ID pour pouvoir l'UPDATE
    public function adminFindUpdate($id)
    {
        $this->setTable('w_users');
        $query = $this->find($id);
        return $query;
    }

    // Method qui permet de mettre a jour l'utisateur
    public function adminUpdate($data, $id)
    {
        $this->setTable('w_users');
        $query = $this->update($data, $id, $stripTags = true);
        return $query;
    }
}