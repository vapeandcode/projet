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
        $this->setTable('users');
        $query = $this->findAll();
    //On recupere le result du findAll().
        if ($query == false)
        {
            echo "Une erreur est survenue lors de la récupération.";
        } else
        {
            return $query;
        }
    }

    /*********************************************************************
     *                METHOD POUR DELETE LES UTILISATEURS
     *
     ********************************************************************/

    // Method qui permet de supprimer un utilisateur depuis son ID.
    public function adminDelete($id)
    {
    // Definie la table w_users pour la method findAll().
        $this->setTable('users');
        $query = $this->delete($id);
        if ($query == false)
        {
            echo "Une erreur est survenue lors de la suppression.";
        } else
        {
            return $query;
        }
    }

    /*********************************************************************
     *                METHOD POUR UPDATE LES UTILISATEURS
     *
     ********************************************************************/

    // Method qui permet de recuperer un utilisateur par son ID pour pouvoir l'UPDATE
    public function adminFindUpdate($id)
    {
        $this->setTable('users');
        $query = $this->find($id);
        if ($query == false)
        {
            echo "Une erreur est survenue lors de la recherche.";
        } else
        {
            return $query;
        }
    }

    // Method qui permet de mettre a jour l'utisateur
    public function adminUpdate($data, $id)
    {
        $this->setTable('users');
        $query = $this->update($data, $id, $stripTags = true);
        if ($query == false)
        {
            echo "Une erreur est survenue lors de la mise a jour.";
        } else
        {
            return $query;
        }
    }

    /*********************************************************************
     *                METHOD POUR AJOUT ARTICLE
     *
     ********************************************************************/

    // Method qui permet d'ajouter un article
    public function adminAddArticle($data)
    {
        $this->setTable('article');
        $query = $this -> insert($data, $stripTags = true);
        if ($query == false)
        {
            echo "Une erreur est survenue lors de la création.";
        } else
        {
            return $query;
        }
    }


    /*********************************************************************
    *                METHOD POUR UPLOAD IMAGES ET SCHEMAS DES ARTICLES
    *
    ********************************************************************/

    // Method pour upload images
    public function upload($index, $destination, $maxsize=FALSE, $extensions=FALSE)
    {
        //Test1: fichier correctement uploadé
        if (!isset($_FILES[$index]) OR $_FILES[$index]['error'] > 0) return FALSE;

        //Test2: taille limite
        if ($maxsize !== FALSE AND $_FILES[$index]['size'] > $maxsize) return FALSE;

        //Test3: extension
        $ext = substr(strrchr($_FILES[$index]['name'],'.'),1);
        if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;

        //Déplacement
        return move_uploaded_file($_FILES[$index]['name'],$destination);
    }

}
?>