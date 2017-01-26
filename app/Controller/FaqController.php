<?php

namespace Controller;

use Model\FaqModel;
use \W\Controller\Controller;

class ArticleController extends Controller
{
    public function faqHome()
    {
        $this->show('faq/home');
    }
}
