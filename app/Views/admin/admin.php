<?php $this->layout('layout', ['title' => 'Administration']);
$this->start('main_content');

/**
 * Created by PhpStorm.
 * User: PEP
 */
if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['role'] == 'admin') {
        if (isset($msg))
        {
//        MESSAGE ALERT USER ERREUR CONNECTION
            ?>
            <div class="alert alert-danger">
                <strong>Erreur !</strong> <?php echo $msg ?>.
            </div>
            <?php
        }
        if (isset($success))
        {
//        MESSAGE ALERT USER ERREUR CONNECTION
            ?>
            <div class="alert alert-success">
                <strong>Success !</strong> <?php echo $success ?>.
            </div>
            <?php
        }
        ?>
        <h2>Administration</h2>
        <p>
            Dans cette partie vous pouvez gerer les utilisateurs et les articles.
        </p>
        <hr>
        <h2>Gestion utilisateurs</h2>
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Pseudo</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php for ($i = 0; $i < count($listeUser); $i++) { ?>
                        <tr>
                            <td><?php echo $listeUser[$i]['id'] ?></td>
                            <td><?php echo $listeUser[$i]['username'] ?></td>
                            <td><?php echo $listeUser[$i]['role'] ?></td>
                            <td>
                                <form class="FormBtn" action="<?= $this->url('update_user_find') ?>" method="post">
                                    <input type="hidden" name="userId" value="<?php echo $listeUser[$i]['id'] ?>">
                                    <button type="submit" name="userUpdate" class="btn btn-warning buttonAdminDiv"><i class="fa fa-edit"></i></button>
                                </form>
                                <form class="FormBtn" action="<?= $this->url('delete_user') ?>" method="post">
                                    <input type="hidden" name="userId" value="<?php echo $listeUser[$i]['id'] ?>">
                                    <button type="submit" class="btn btn-danger buttonAdminDiv"><i class="fa fa-trash-o"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <hr>
            </div>
        </div>

        <div class="container addarticleadmin">
            <div class="row">
                <div class="col-md-offset-3 col-md-5">
                    <form id="addarticleadmin" class="form-login" action="<?= $this->url('add_article') ?>" method="post">
                        <h4>Ajouter un article</h4>
                        <p>Titre de l'article : <input id="blacktext" type="text" name="title" value=""></p>
                        </br>
                        <p>Description : <input id="blacktext" type="text" name="description" value=""></p>
                        </br>
                        <p>Image de l'article (depuis dossier img_article du site) : <input type="file" name="picture" value=""></p>
                        </br>
                        <p>Image schema (eCig seulement) de l'article (depuis dossier img_article du site) : <input type="file" name="schema" value=""></p>
                        </br>
                        <p>Lien source/video/... : <input id="blacktext" type="text" name="link" value=""></p>
                        </br>
                        <p>
                            Categorie de l'article :
                            <select name="type_id" form="addarticleadmin">
                                <option value="1">eCig - Debutant</option>
                                <option value="2">eCig - Intermediaire</option>
                                <option value="3">eCig - Expert</option>
                                <option value="4">eLiquid - Menthol</option>
                                <option value="5">eLiquid - Tabac</option>
                                <option value="6">eLiquid - Gourmand</option>
                                <option value="7">eLiquid - Fruit</option>
                            </select>
                        </p>
                        <div class="wrapper">
                    <span class="group-btn">
                        <button class="btn btn-primary btn-md" type="submit" name="subLogin">Ajouter</button>
                        <!--<a href="<?/*= $this->url('user_loginSubmit') */?>" name="subLogin" class="btn btn-primary btn-md">Valider<i class="fa fa-sign-in"></i></a>-->
                    </span>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <?php $this->stop('main_content') ?>

        <?php $this->start('js') ?>
        <script src="<?= $this->assetUrl('js/master.js') ?>"></script>
        <?php $this->stop('js');
    } else {
        echo 'Erreur 404.';
        die;
    } echo 'Erreur 404.';
}
echo 'Erreur 404.'; ?>
