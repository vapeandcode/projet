<?php $this->layout('layout', ['title' => 'Eliquid Fruite']);
$this->start('main_content');
?>
    <h2>E-LIQUIDES FRUITES</h2>
    <p>
        Découvrez les e-liquides goût fruité que nous avons sélectionné pour vous.
    </p>

<?php for ($i=0; $i<count($listeArticle); $i++) { ?>
    <div class="fruite">
        <p><?php echo $listeArticle[$i]['title']?></p>
        <p><?php echo $listeArticle[$i]['picture']?></p>
        <p><?php echo $listeArticle[$i]['description']?></p>
    </div>
<?php } ?>

<?php $this->stop('main_content') ?>