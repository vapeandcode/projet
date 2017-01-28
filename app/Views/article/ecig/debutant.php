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
                            <form id="addComment" action="<?= $this->url('add_article') ?>" method="post">
                                <p><input type="hidden" name="author" value="<?= $_SESSION['user']['username'] ?>"></p>
                                <p><textarea id="texte" name="text" rows="25" ></textarea></p>
                                <p><input type="hidden" name="article_id" value="<?= $listeArticle[$i]['id'] ?>"></p>
                                <p><input type="hidden" name="user_id" value="<?= $_SESSION['user']['id'] ?>"></p>
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