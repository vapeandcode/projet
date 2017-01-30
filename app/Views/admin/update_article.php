<?php $this->layout('layout', ['title' => 'Administration']);
$this->start('main_content');

/**
 * Created by PhpStorm.
 * User: PEP
 */
var_dump($listeArticle);
?>
    <h2>Gestion de mises a jour des articles</h2>

            <form id="updateArticle" action="<?= $this->url('update_article') ?>" method="post">
                <p>Titre de l'article : <input type="text" name="title" value="<?php echo $listeArticle['title'] ?>"></p>
                <p>Description : <input type="text" name="description" value="<?php echo $listeArticle['description'] ?>"></p>
                <p>Nom de l'image de l'article (nom.extension) : <input type="file" name="picture" ></p>
                <p>Nom de l'image schema (nom.extension)(eCiq seulement) de l'article : <input type="file" name="schema" ></p>
                <p>Lien source/video/... : <input type="text" name="link" value="<?php echo $listeArticle['link'] ?>"></p>
                <p>
                    Categorie de l'article :
                    <select name="type_id" form="updateArticle">
                        <option value="1">eCig - Debutant</option>
                        <option value="2">eCig - Intermediaire</option>
                        <option value="3">eCig - Expert</option>
                        <option value="4">eLiquid - Menthol</option>
                        <option value="5">eLiquid - Tabac</option>
                        <option value="6">eLiquid - Gourmand</option>
                        <option value="7">eLiquid - Fruit</option>
                    </select>
                </p>
                <input type="hidden" name="articleId" value="<?php echo $listeArticle['id'] ?>" >
                <p><input type="submit" name="submit" value="Envoyer"></p>
            </form>
       

<?php $this->stop('main_content') ?>