<?php $this->layout('layout', ['title' => 'ecig expert']);
$this->start('main_content');
?>
    <div class="center">
    <h2>E-CIG EXPERTS</h2>
    <p>
        Cette catégorie est destinée aux connaisseurs du monde de la vape.Les drippers et les matériaux sont reconstructibles et offrent des tas de réglages avancés.
    </p>
    </div>
<?php for ($i=0; $i<count($listeArticle); $i++) { ?>

    <div class="expert article">
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