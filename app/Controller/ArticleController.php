<?php

namespace Controller;

use Model\ArticleModel;
use \W\Controller\Controller;

class ArticleController extends Controller
{
    public function eliquidHome()
    {
        $this -> show('article/eliquid/home');
    }

    public function articlesMenthol()
    {
        $menthols = new ArticleModel();
        $result = $menthols ->findType(4);
        // On envoi le $result dans la vue afin de pouvoir l'afficher.
        $this->show('article/eliquid/menthol', ['listeArticle' => $result]);
    }
}