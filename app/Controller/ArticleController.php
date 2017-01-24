<?php

namespace Controller;

use Model\ArticleModel;
use \W\Controller\Controller;

class ArticleController extends Controller
{
    public function home()
    {
        $this -> show('article/home');
    }

    public function articlesDebutants()
    {
        $debutants = new AdminModel();
        $result = $debutants ->findType(1);
        // On envoi le $result dans la vue afin de pouvoir l'afficher.
        $this->show('article/debutant', ['listeArticle' => $result]);
    }
}