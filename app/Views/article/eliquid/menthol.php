<?php $this->layout('layout', ['title' => 'Eliquid Menthol']);
$this->start('main_content');
?>
    <h2>ELIQUIDS MENTHOLS</h2>
    <p>
        Découvrez les eliquids goût menthol que nous avons sélectionné pour vous.
    </p>

    <?php for ($i=0; $i<count($listeArticle); $i++) { ?>
    <div class="menthol">
        <p><?php echo $listeArticle[$i]['title']?></p>
        <p><?php echo $listeArticle[$i]['picture']?></p>
        <p><?php echo $listeArticle[$i]['description']?></p>
    </div>
    <?php } ?>

<?php $this->stop('main_content') ?>