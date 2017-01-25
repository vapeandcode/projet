<?php $this->layout('layout', ['title' => 'Eliquid Tabac']);
$this->start('main_content');
?>
    <h2>E-LIQUIDES TABAC</h2>
    <p>
        Découvrez les e-liquides goût tabac que nous avons sélectionné pour vous.
    </p>

<?php for ($i=0; $i<count($listeArticle); $i++) { ?>
    <div class="tabac">
        <p><?php echo $listeArticle[$i]['title']?></p>
        <p><img src="<?= $this->assetUrl('img/img_article/' . $listeArticle[$i]['picture'] . '') ?>" alt="gitan"/></p><?php /*echo $listeArticle[$i]['picture']*/?>
        <p><?php echo $listeArticle[$i]['description']?></p>
    </div>
<?php } ?>

<?php $this->stop('main_content') ?>