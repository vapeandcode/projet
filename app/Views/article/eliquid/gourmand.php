<?php $this->layout('layout', ['title' => 'Eliquid Gourmand']);
$this->start('main_content');
?>
    <div class="center">
    <h2>E-LIQUIDES GOURMANDS</h2>
    <p>
        Découvrez les e-liquides goût gourmand que nous avons sélectionné pour vous.
    </p>
    </div>
    <?php for ($i=0; $i<count($listeArticle); $i++) { ?>

        <div class="gourmand">
            <p><?php echo $listeArticle[$i]['title']?></p>
            <p><img src="<?= $this->assetUrl('img/img_article/' . $listeArticle[$i]['picture'] . '') ?>" alt="img liquide"/></p><?php /*echo $listeArticle[$i]['picture']*/?>
            <p><?php echo $listeArticle[$i]['description']?></p>
        </div>

    <?php } ?>

<?php $this->stop('main_content') ?>