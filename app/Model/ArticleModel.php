<?php

namespace Model;

use W\Model\Model;

class ArticleModel extends Model
{
    /*********************************************************************
     *                METHODE POUR AFFICHAGE ARTICLES
     *
     ********************************************************************/
    public function findType($type_id)
    {
        if (!is_numeric($type_id)){
            return false;
        }

        $sql = 'SELECT * FROM article WHERE type_id = ' . $type_id;

        $sth = $this->dbh->prepare($sql);
        $sth->bindValue('type_id', $type_id);
        $sth->execute();

        return $sth->fetchAll();
    }
}