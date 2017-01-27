<?php $this->layout('layout', ['title' => 'ecig intermediaire']);
$this->start('main_content');
?>
    <div class="center">
    <h2>E-CIG CONNAISSEURS</h2>
    <p>
        Un peu plus évolués ces kits vous permettrons de vapoter plus longtemps.De plus vous pourrez contrôler la température,changer la résistance et effectuer tous les réglages nécessaires.
    </p>
    </div>
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

        <p><?php echo $listeArticle[$i]['description']?></p>
        <p><?php echo $listeArticle[$i]['link']?></p>
    </div>

<?php } ?>

<?php $this->stop('main_content') ?>