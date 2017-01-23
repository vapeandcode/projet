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

    public function adminDelete($id)
    {
//        Definie la table w_users pour la method findAll().
        $this->setTable('w_users');
        $query = $this->delete($id);
        if ($query = false) {
            echo "Une erreur est survenur lors de la suppression.";
            return false;
        } elseif ($this->delete($id)) {
            return true;
        }
    }

    public function adminFindUpdate($id)
    {
        $this->setTable('w_users');
        $query = $this->find($id);
        return $query;
    }

    public function adminUpdate($id)
    {
//        A FINIRRRR
        $this->setTable('w_users');
        $query = $this->update($id);
        return $query;
    }
}