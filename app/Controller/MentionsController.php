<?php

namespace Controller;


use \W\Controller\Controller;

class MentionsController extends Controller
{
    public function mentions()
    {
        $this->show('article/mentions/mentions');
    }
}