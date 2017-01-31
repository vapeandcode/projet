<?php $this->layout('layout', ['title' => 'Administration']);
$this->start('main_content');

/**
 * Created by PhpStorm.
 * User: PEP
 */
var_dump($listeArticle);
?>
<h2>Gestion de mises a jour des articles</h2>

            <!--<form id="updateArticle" action="<?/*= $this->url('update_article') */?>" method="post">
                <p>Titre de l'article : <input type="text" name="title" value="<?php /*echo $listeArticle['title'] */?>"></p>
                <p>Description : <input type="text" name="description" value="<?php /*echo $listeArticle['description'] */?>"></p>
                <p>Nom de l'image de l'article (nom.extension) : <input type="file" name="picture" ></p>
                <p>Nom de l'image schema (nom.extension)(eCiq seulement) de l'article : <input type="file" name="schema" ></p>
                <p>Lien source/video/... : <input type="text" name="link" value="<?php /*echo $listeArticle['link'] */?>"></p>
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
                <input type="hidden" name="articleId" value="<?php /*echo $listeArticle['id'] */?>" >
                <p><input type="submit" name="submit" value="Envoyer"></p>
            </form>-->

    <div class="container addarticleadmin">
        <div class="row">
            <div class="col-md-offset-3 col-md-5">
                <form id="addarticleadmin" class="form-login" action="<?= $this->url('update_article') ?>" method="post">
                    <h4>Ajouter un article</h4>
                    <p>Titre de l'article : <input id="blacktext" type="text" name="title" value="<?php echo $listeArticle['title'] ?>"></p>
                    </br>
                    <p>Description : <input id="blacktext" type="text" name="description" value="<?php echo $listeArticle['description'] ?>"></p>
                    </br>
                    <p>Image de l'article (depuis dossier img_article du site) : <input type="file" name="picture" value=""></p>
                    </br>
                    <p>Image schema (eCig seulement) de l'article (depuis dossier img_article du site) : <input type="file" name="picture" value=""></p>
                    </br>
                    <p>Lien source/video/... : <input id="blacktext" type="text" name="link" value="<?php echo $listeArticle['link'] ?>"></p>
                    </br>
                    <p>
                        Categorie de l'article :
                        <select name="type_id" form="addArticle">
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
                    <div class="wrapper">
                    <span class="group-btn">
                        <button class="btn btn-primary btn-md" type="submit" name="subLogin">Envoyer</button>
                        <!--<a href="<?/*= $this->url('user_loginSubmit') */?>" name="subLogin" class="btn btn-primary btn-md">Valider<i class="fa fa-sign-in"></i></a>-->
                    </span>
                    </div>
                </form>

            </div>
        </div>
    </div>
       

<?php $this->stop('main_content') ?>