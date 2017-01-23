<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 23/01/2017
 * Time: 11:17
 */

namespace Model;


use W\Model\Model;

class AdminModel extends Model
{
    public function adminUsers()
    {
//        Definie la table w_users pour la method findAll().
        $this->setTable('w_users');
        $query = $this->findAll();
//        On recupere le result du findAll().
        return $query;
    }
}