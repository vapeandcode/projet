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
        $sql = 'SELECT * FROM article WHERE type_id = ' . $type_id . ' ORDER BY id DESC';

        $sth = $this->dbh->prepare($sql);
        $sth->bindValue('type_id', $type_id);
        $sth->execute();

        return $sth->fetchAll();
    }

    public function viewComment()
    {

        $sql = 'SELECT comment.id, author, content, date, article_id, comment.users_id FROM comment INNER JOIN article ON comment.article_id = article.id WHERE article.id = comment.article_id ORDER BY date DESC';

        $sth = $this->dbh->prepare($sql);
        $sth->bindValue('article_id', 'article.id');
        $sth->execute();

        return $sth->fetchAll();
    }

}