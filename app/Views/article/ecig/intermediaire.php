<?php $this->layout('layout', ['title' => 'ecig intermediaire']);
$this->start('main_content');
?>

<!--RECUPERATION DE L'ID DE L'ARTICLE QUAND ON CLIQUE SUR LE BOUTON DU MODAL-->
<script>
    $(document).ready(function(){
        $('.commentBtn').click(function(){
            $("#myModal").modal();
            var id = $(this).attr('id');
            $("#to").val(id);
            return false;
        });
    });
    /*********************************************************************
     *                SCRIPT LIGHTBOX POUR LES IMAGES ARTICLE
     *
     ********************************************************************/
    window.onload = function () {
        // document.getElementById('lightB').style.display='none';

        // BOUCLE QUI FAIT APPARAITTRE L OVERLAY //
        var imgGal = document.querySelectorAll('.imgArticle');
        for (var i = 0; i < imgGal.length; i++) {
            imgGal[i].onclick = function () {

                CreatDiv (); //APPEL FUNCTION CREATION DIV
                hide(); // APPEL FUNCTION SUPPRESSION DIV

                // DONNE L ATTRIBU SRC DE L IMG CLIQUER //
                document.getElementById('imgLight').setAttribute("src", this.getAttribute("src"));

                // FAIT APPARAITTRE LA DIV //
                document.getElementById('lightB').style.display='block';
            };
        }

        // CREE UN DIV AU CLIC SUR IMG //
        function CreatDiv () {
            var div = document.createElement('div');

            //DONNE L ID A LA DIV
            div.setAttribute('id', 'lightB');

            //DONNE LA CLASS A LA DIV
            div.classList.add('lightBox');

            // INSERT LA BALISE IMG DANS LA DIV
            div.innerHTML = '<img id="imgLight" src="">';
            document.body.appendChild(div);
        }


        // SUPPRIME LA DIV CREE AU CLIC SU L OVERLAY //
        function hide() {
            document.getElementById('lightB').onclick = function () {
                document.getElementById('lightB').remove();
            };
        }
    };
</script>

<div class="center">
    <h2>E-CIG CONNAISSEURS</h2>
    <p>
        Un peu plus évolués ces kits vous permettrons de vapoter plus longtemps.De plus vous pourrez contrôler la température,changer la résistance et effectuer tous les réglages nécessaires.
    </p>
</div>

<!--BOUCLE POUR AFFICHER LES ELEMENTS ET LE BOUTON MODAL POUR LES COMMENTAIRES SUR CHAQUE ARTICLE-->
<?php for ($i=0; $i<count($listeArticle); $i++) { ?>
    <div class="intermediaire article">
        <p><h2><?php echo $listeArticle[$i]['title']?></h2></p>

        <p>
            <img class="imgArticle" src="<?php echo $this->assetUrl('img/img_article/'); echo $listeArticle[$i]['picture']?>" alt="image eCig">
            <!--SI ON A UNE IMAGE SCHEMA ON L AFFICHE-->
            <?php if (isset($listeArticle[$i]['schema'])) { ?>
                <img class="imgArticle" src="<?php echo $this->assetUrl('img/img_article/'); echo $listeArticle[$i]['schema']?>" alt="image schema eCig">
            <?php } ?>
        <hr>
        </p>

        <p class="smalltext"><?php echo $listeArticle[$i]['description']?></p>
        <p><a href="<?php echo $listeArticle[$i]['link']?>">Lien youtube</a></p>

        <!--SI L'UTILISATEUR EST BIEN CONNECTE AFFICHAGE DU BOUTON MODAL POUR LES COMMENTAIRES-->
        <?php if (isset($_SESSION['user']['username'])) { ?>
            <!-- Button trigger modal -->
            <p><button id="<?= $listeArticle[$i]['id'] ?>" type="button" class="btn btn-primary btn-lg commentBtn" data-toggle="modal" data-target="#myModal">
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
                                <p><input id="buttontinymce" type="submit" name="submit" value="Envoyer"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <!--BOUCLE POUR AFFICHER TOUS LES COMMENTAIRES PAR ARTICLE DANS UN MODEL BOOTSTRAP POUR COMMENTAIRES-->
        <p><?php
            for ($q=0; $q<count($listeComment); $q++) {
                if (isset($listeComment[$q]['article_id'])) {
                    if ($listeArticle[$i]['id'] == $listeComment[$q]['article_id']) { ?>
                        <div class="container">
                             <div class="row">
                                <div class="col-sm-5">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <strong><?= $listeComment[$q]['author'] ?></strong> <span class="text-muted"><?= $listeComment[$q]['date'] ?></span>
                                        </div>
                                        <div class="panel-body">
                                            <span id="blacktext"><?= $listeComment[$q]['content'] ?></span>
                                        </div><!-- /panel-body -->
                                    </div><!-- /panel panel-default -->
                                </div><!-- /col-sm-5 -->
                            </div><!-- /row -->
                        </div><!-- /container -->
                    <?php echo "<br>"; }
                }
            } ?>
        </p>
    </div>
<?php } ?>

<?php $this->stop('main_content') ?>

