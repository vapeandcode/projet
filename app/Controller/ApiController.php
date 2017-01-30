<?php

namespace Controller;


use \W\Controller\Controller;

class ApiController extends Controller
{
    public function apiHome()
    {
        $this->show('article/api/googlemap');
    }
}
