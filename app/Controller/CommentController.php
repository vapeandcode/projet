<?php
/**
 * Created by PhpStorm.
 * User: Tristan
 * Date: 29/01/2017
 * Time: 00:55
 */

namespace Controller;


use W\Controller\Controller;
use \Model\CommentModel;

class CommentController extends Controller
{
    /*********************************************************************
     *                AJOUT COMMENTAIRE
     *
     ********************************************************************/

    public function addNewComment()
    {
        // ON RECUPERE LE $_POST DANS UN TABLEAU POUR LE SOUMETTRE A LA METHOD.
        $data = array(
            'author' => $_SESSION['user']['username'],
            'content' => $_POST['content'],
            'article_id' => $_POST['article_id'],
            'users_id' => $_SESSION['user']['id'],
        );
        $query = new CommentModel();
        $result = $query -> addComment($data);
        if ($result)
        {
            echo "Commentaire ajouté !";
        }
    }
}