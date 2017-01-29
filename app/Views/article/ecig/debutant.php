<?php $this->layout('layout', ['title' => 'ecig debutant']);
$this->start('main_content');
?>
    <div class="center">
    <h2>E-CIG DÉBUTANTS</h2>
    <p>
        Des kits complets prêts a l'emploi,c'est très simple,on ajoute le liquide et on vape!!
    </p>
    </div>
<?php for ($i=0; $i<count($listeArticle); $i++) { ?>
    <div class="debutant article">
        <p><h2><?php echo $listeArticle[$i]['title']?></h2></p>

        <p>
            <img class="imgArticle" src="<?php echo $this->assetUrl('img/img_article/'); echo $listeArticle[$i]['picture']?>" alt="image eCig">
            <!--SI ON A UNE IMAGE SCHEMA ON L AFFICHE-->
            <?php if (isset($listeArticle[$i]['schema'])) { ?>
                <img class="imgArticle" src="<?php echo $this->assetUrl('img/img_article/'); echo $listeArticle[$i]['schema']?>" alt="image schema eCig">
            <?php } ?>
            <hr>
        </p>

        <p><?php echo $listeArticle[$i]['description']?></p>
        <p><a href="<?php echo $listeArticle[$i]['link']?>">Lien youtube</a></p>

        <?php if (isset($_SESSION['user']['username'])) { ?>
            <!-- Button trigger modal -->
            <p><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                Votre avis nous intéresse
                </button></p>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <!-- FORMULAIRE QUI RENVOIE VERS LA PAGE ADDCOMMENT -->
                            <form id="addComment" action="<?= $this->url('add_comment') ?>" method="post">
                                <p><input type="hidden" name="author" value=""></p>
                                <p><textarea id="texte" name="content" rows="25" ></textarea></p>
                                <!--probleme avec article_id, toujours meme numero en bdd-->
                                <p><input type="hidden" name="article_id" value="<?= $listeArticle[$i]['id'] ?>"></p>
                                <p><input type="hidden" name="users_id" value=""></p>
                                <p><input type="submit" name="submit" value="Envoyer"></p>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>

<?php $this->stop('main_content') ?>