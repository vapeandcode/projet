<?php $this->layout('layout', ['title' => 'Eliquid Menthol']);
$this->start('main_content');
?>

<!--RECUPERATION DE L'ID DE L'ARTICLE QUAND ON CLIQUE SUR LE BOUTON DU MODAL-->
<script>
    $(document).ready(function(){
        $('.btn').click(function(){
            $("#myModal").modal();
            var id = $(this).attr('id');
            $("#to").val(id);
            return false;
        });
    });
</script>

<div class="center">
    <h2>E-LIQUIDES MENTHOLS</h2>
    <p>
        Découvrez les e-liquides goût menthol que nous avons sélectionné pour vous.
    </p>
</div>

<!--BOUCLE POUR AFFICHER LES ELEMENTS ET LE BOUTON MODAL POUR LES COMMENTAIRES SUR CHAQUE ARTICLE-->
<?php for ($i=0; $i<count($listeArticle); $i++) { ?>

    <div class="fruite">
        <p><?php echo $listeArticle[$i]['title']?></p>
        <p><img src="<?= $this->assetUrl('img/img_article/' . $listeArticle[$i]['picture'] . '') ?>" alt="img liquide"/></p><?php /*echo $listeArticle[$i]['picture']*/?>
        <p><?php echo $listeArticle[$i]['description']?></p>

        <!--SI L'UTILISATEUR EST BIEN CONNECTE AFFICHAGE DU BOUTON MODAL POUR LES COMMENTAIRES-->
        <?php if (isset($_SESSION['user']['username'])) { ?>
            <!-- Button trigger modal -->
            <p><button id="<?= $listeArticle[$i]['id'] ?>" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Votre avis nous intéresse
                </button></p>

            <!--FENETRE MODALE POUR AFFICHAGE DU TINYMCE POUR ECRIRE ET DU FORMULAIRE POUR EDITER LE COMMENTAIRE-->
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
                                <!--probleme avec article_id, toujours meme numero en bdd--><!--PROBLEME RESOLU-->
                                <p><input type="hidden" name="article_id" id="to"></p>
                                <p><input type="hidden" name="users_id" value=""></p>
                                <p><input type="submit" name="submit" value="Envoyer"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>

<?php $this->stop('main_content') ?>




