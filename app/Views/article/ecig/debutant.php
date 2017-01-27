<?php $this->layout('layout', ['title' => 'ecig debutant']);
$this->start('main_content');
?>
    <div class="center">
    <h2>E-CIG DEBUTANTS</h2>
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
    </div>
<?php } ?>

<?php $this->stop('main_content') ?>