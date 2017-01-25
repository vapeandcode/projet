<?php

<?php $this->layout('layout', ['title' => 'ecig debutant']);
$this->start('main_content');
?>
    <h2>E-CIG DEBUTANTS</h2>
    <p>
        Des kits complets prêts a l'emploi,c'est très simple,on ajoute le liquide et on vape!!
    </p>

<?php for ($i=0; $i<count($listeArticle); $i++) { ?>
    <div class="debutant">
        <p><?php echo $listeArticle[$i]['title']?></p>
        <p><?php echo $listeArticle[$i]['picture']?></p>
        <p><?php echo $listeArticle[$i]['schema']?></p>
        <p><?php echo $listeArticle[$i]['description']?></p>
        <p><?php echo $listeArticle[$i]['link']?></p>
    </div>
<?php } ?>

<?php $this->stop('main_content') ?>