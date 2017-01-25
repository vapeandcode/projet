<?php $this->layout('layout', ['title' => 'Eliquid Tabac']);
$this->start('main_content');
?>
    <h2>ELIQUIDS TABAC</h2>
    <p>
        Découvrez les eliquids goût menthol que nous avons sélectionné pour vous.
    </p>

<?php for ($i=0; $i<count($listeArticle); $i++) { ?>
    <div class="tabac">
        <p><?php echo $listeArticle[$i]['picture']?></p>
        <p><?php echo $listeArticle[$i]['description']?></p>
        <p><?php echo $listeArticle[$i]['link']?></p>
    </div>
<?php } ?>

<?php $this->stop('main_content') ?>