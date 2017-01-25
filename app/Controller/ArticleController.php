<?php

namespace Controller;

use Model\ArticleModel;
use \W\Controller\Controller;

class ArticleController extends Controller
{
    public function ecigHome()
    {
        $this->show('article/ecig/home');
    }

    public function eliquidHome()
    {
        $this ->show('article/eliquid/home');
    }

    public function articlesMenthol()
    {
        $menthol = new ArticleModel();
        $result = $menthol ->findType(4);
        // On envoi le $result dans la vue afin de pouvoir l'afficher.
        $this->show('article/eliquid/menthol', ['listeArticle' => $result]);
    }

    public function articlesTabac()
    {
        $tabac = new ArticleModel();
        $result = $tabac ->findType(5);
        // On envoi le $result dans la vue afin de pouvoir l'afficher.
        $this->show('article/eliquid/tabac', ['listeArticle' => $result]);
    }

    public function articlesGourmand()
    {
        $gourmand = new ArticleModel();
        $result = $gourmand ->findType(6);
        // On envoi le $result dans la vue afin de pouvoir l'afficher.
        $this->show('article/eliquid/gourmand', ['listeArticle' => $result]);
    }

    public function articlesFruite()
    {
        $fruite = new ArticleModel();
        $result = $fruite ->findType(7);
        // On envoi le $result dans la vue afin de pouvoir l'afficher.
        $this->show('article/eliquid/fruite', ['listeArticle' => $result]);
    }
}