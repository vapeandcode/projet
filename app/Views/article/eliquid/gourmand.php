<?php $this->layout('layout', ['title' => 'Eliquid Gourmand']);
$this->start('main_content');
?>
    <h2>E-LIQUIDES GOURMANDS</h2>
    <p>
        Décrouvrez les e-liquides goût gourmand que nous avons sélectionné pour vous.
    </p>

<?php for ($i=0; $i<count($listeArticle); $i++) { ?>
    <div class="gourmand">
        <p><?php echo $listeArticle[$i]['title']?></p>
        <p><?php echo $listeArticle[$i]['picture']?></p>
        <p><?php echo $listeArticle[$i]['description']?></p>
    </div>
<?php } ?>

<?php $this->stop('main_content') ?>