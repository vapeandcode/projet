<?php

namespace Controller;

use Model\ArticleModel;
use \W\Controller\Controller;

class ArticleController extends Controller
{

    public function home()
    {
        $this->show('default/home');
    }

    public function ecigHome()
    {
        $this->show('article/ecig/home');
    }

    public function eliquidHome()
    {
        $this ->show('article/eliquid/home');
    }

    public function articlesDebutant()
    {
        $debutant = new ArticleModel();
        $result = $debutant ->findType(1);
        $comment = $debutant ->viewComment();
        // On envoi le $result dans la vue afin de pouvoir l'afficher.
        $this->show('article/ecig/debutant', ['listeArticle' => $result, 'listeComment' => $comment]);
    }

    public function articlesIntermediaire()
    {
        $intermediaire = new ArticleModel();
        $result = $intermediaire ->findType(2);
        $comment = $intermediaire ->viewComment();
        // On envoi le $result dans la vue afin de pouvoir l'afficher.
        $this->show('article/ecig/intermediaire', ['listeArticle' => $result, 'listeComment' => $comment]);
    }

    public function articlesExpert()
    {
        $expert = new ArticleModel();
        $result = $expert ->findType(3);
        $comment = $expert ->viewComment();
        // On envoi le $result dans la vue afin de pouvoir l'afficher.
        $this->show('article/ecig/expert', ['listeArticle' => $result, 'listeComment' => $comment]);
    }

    public function articlesMenthol()
    {
        $menthol = new ArticleModel();
        $result = $menthol ->findType(4);
        $comment = $menthol ->viewComment();
        // On envoi le $result dans la vue afin de pouvoir l'afficher.
        $this->show('article/eliquid/menthol', ['listeArticle' => $result, 'listeComment' => $comment]);
    }

    public function articlesTabac()
    {
        $tabac = new ArticleModel();
        $result = $tabac ->findType(5);
        $comment = $tabac ->viewComment();
        // On envoi le $result dans la vue afin de pouvoir l'afficher.
        $this->show('article/eliquid/tabac', ['listeArticle' => $result, 'listeComment' => $comment]);
    }

    public function articlesGourmand()
    {
        $gourmand = new ArticleModel();
        $result = $gourmand ->findType(6);
        $comment = $gourmand ->viewComment();
        // On envoi le $result dans la vue afin de pouvoir l'afficher.
        $this->show('article/eliquid/gourmand', ['listeArticle' => $result, 'listeComment' => $comment]);
    }

    public function articlesFruite()
    {
        $fruite = new ArticleModel();
        $result = $fruite ->findType(7);
        $comment = $fruite ->viewComment();
        // On envoi le $result dans la vue afin de pouvoir l'afficher.
        $this->show('article/eliquid/fruite', ['listeArticle' => $result, 'listeComment' => $comment]);
    }
}