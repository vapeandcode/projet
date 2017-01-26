<?php $this->layout('layout', ['title' => 'Administration']);
$this->start('main_content');

/**
 * Created by PhpStorm.
 * User: PEP
 */


?>
<h2>Administration</h2>
<p>
    Dans cette partie vous pouvez gerer les utilisateurs et les articles.
</p>
<hr>
<h2>Gestion utilisateurs</h2>

<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Pseudo</th>
        <th>Mot de passe</th>
        <th>Email</th>
        <th>Role</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php for ($i=0; $i<count($listeUser); $i++) { ?>
        <tr>
            <td><?php echo $listeUser[$i]['id']?></td>
            <td><?php echo $listeUser[$i]['username']?></td>
            <td><?php echo $listeUser[$i]['password']?></td>
            <td><?php echo $listeUser[$i]['email']?></td>
            <td><?php echo $listeUser[$i]['role']?></td>
            <td>
                <form class="FormBtn" action="<?= $this->url('update_user_find') ?>" method="post">
                    <input type="hidden" name="userId" value="<?php echo $listeUser[$i]['id'] ?>">
                    <button type="submit" name="userUpdate" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                </form>
                <form class="FormBtn" action="<?= $this->url('delete_user') ?>" method="post">
                    <input type="hidden" name="userId" value="<?php echo $listeUser[$i]['id'] ?>">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                </form>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<hr>
<h2>Gestions articles</h2>
<h2>Ajouter un article</h2>
<!-- FORMULAIRE QUI RENVOIE VERS LA PAGE ADDARTICLE -->
<form id="addArticle" action="<?= $this->url('add_article') ?>" method="post">
    <p>Titre de l'article : <input type="text" name="title" value=""></p>
    <p>Image(nom.extension) de l'article : <input type="text" name="description" value=""></p>
    <p>Image schema (nom.extension)(eCiq seulement) de l'article : <input type="file" name="picture" value=""></p>
    <p>Image schema (nom.extension)(eCiq seulement) de l'article : <input type="text" name="schema" value=""></p>
    <p>Lien source/video/... : <input type="text" name="link" value=""></p>
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
    <p><input type="submit" name="submit" value="Envoyer"></p>
</form>
<?php $this->stop('main_content') ?>

<?php $this->start('js') ?>
<script src = "<?= $this->assetUrl('js/master.js') ?>"></script>
<?php $this->stop('js') ?>
