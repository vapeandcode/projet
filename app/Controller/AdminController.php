<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 23/01/2017
 * Time: 11:14
 */

namespace Controller;

use \W\Controller\Controller;
use \Model\AdminModel;

class AdminController extends Controller
{
    public function admin()
    {
        $query = new AdminModel();
        $result = $query ->adminUsers();
        $this->show('admin/admin', ['listeUser' => $result]);
    }
}