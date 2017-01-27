<?php

namespace Controller;

use Model\FaqModel;
use \W\Controller\Controller;

class FaqController extends Controller
{
    public function faqHome()
    {
        $this->show('article/faq/faq');
    }
}
