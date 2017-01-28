<?php $this->layout('layout', ['title' => 'ecig debutant']);
$this->start('main_content');
?>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            var icons = {
                header: "ui-icon-circle-arrow-e",
                activeHeader: "ui-icon-circle-arrow-s"
            };
            $( "#accordion" ).accordion({
                icons: icons
            });
            $( "#toggle" ).button().on( "click", function() {
                if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
                    $( "#accordion" ).accordion( "option", "icons", null );
                } else {
                    $( "#accordion" ).accordion( "option", "icons", icons );
                }
            });
        } );
    </script>

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
        <p><?php echo $listeArticle[$i]['link']?></p>

        <?php if (isset($_SESSION['user']['username'])) { ?>
        <div class="accordion">
            <p>Votre avis nous intéresse</p>
            <div>
                <p>Ajouter un commentaire</p>
                <!-- FORMULAIRE QUI RENVOIE VERS LA PAGE ADDCOMMENT -->
                <form id="addComment" action="<?= $this->url('add_article') ?>" method="post">
                    <p><input type="hidden" name="author" value="<?= $_SESSION['user']['username'] ?>"></p>
                    <p><textarea id="texte" name="text" rows="25" ></textarea></p>
                    <p><input type="hidden" name="article_id" value="<?= $listeArticle[$i]['id'] ?>"></p>
                    <p><input type="hidden" name="user_id" value="<?= $_SESSION['user']['id'] ?>"></p>
                    <p><input type="submit" name="submit" value="Envoyer"></p>
                </form>
            </div>
        </div>
        <?php } ?>
    </div>
<?php } ?>

<?php $this->stop('main_content') ?>