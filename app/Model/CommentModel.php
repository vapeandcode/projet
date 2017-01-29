<?php

namespace Model;


use W\Model\Model;

class CommentModel extends Model
{
    /*********************************************************************
     *                METHOD POUR AJOUT COMMENTAIRE
     *
     ********************************************************************/

    // Method qui permet d'ajouter un commentaire
    public function addComment($data)
    {
        $this->setTable('comment');
        $query = $this -> insert($data, $stripTags = true);
        if ($query == false)
        {
            echo "Une erreur est survenue lors de l'édition de votre commentaire.";
        } else
        {
            return $query;
        }
    }
}