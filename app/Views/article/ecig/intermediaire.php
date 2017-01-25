<?php

<?php $this->layout('layout', ['title' => 'ecig intermediaire']);
$this->start('main_content');
?>
    <h2>E-CIG INTERMEDIAIRES</h2>
    <p>
        Un peu plus évolués ces kits vous permettrons de vapoter plus longtemps.De plus vous pourrez contrôler la température,changer la résistance et effectuer tous les réglages nécessaires.
    </p>

<?php for ($i=0; $i<count($listeArticle); $i++) { ?>
    <div class="intermediaire">
        <p><?php echo $listeArticle[$i]['title']?></p>
        <p><?php echo $listeArticle[$i]['picture']?></p>
        <p><?php echo $listeArticle[$i]['schema']?></p>
        <p><?php echo $listeArticle[$i]['description']?></p>
        <p><?php echo $listeArticle[$i]['link']?></p>
    </div>
<?php } ?>

<?php $this->stop('main_content') ?>