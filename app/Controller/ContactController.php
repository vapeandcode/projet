<?php

namespace Controller;

use Model\ContactModel;
use \W\Controller\Controller;

class ContactController extends Controller
{
    public function contactHome()
    {
        $this->show('contact/contact');
    }
}
