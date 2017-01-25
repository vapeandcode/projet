<?php
/**
 * Created by PhpStorm.
 * User: oOo
 * Date: 25/01/2017
 * Time: 00:50
 */

namespace Model;


use W\Model\Model;

class SignupModel extends Model
{
    /*********************************************************************
     *                METHOD POUR CREATION UTILISATEURS
     *
     ********************************************************************/

    public function createUserQuery($data)
    {
        $this->setTable('users');
        $query = $this -> insert($data, $stripTags = true);
        return $query;
    }
}