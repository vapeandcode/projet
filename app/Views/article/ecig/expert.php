<?php $this->layout('layout', ['title' => 'ecig expert']);
$this->start('main_content');
?>
    <h2>E-CIG EXPERTS</h2>
    <p>
        Cette catégorie est destinée aux connaisseurs du monde de la vape.Les drippers et les atomiseurs sont reconstructibles et offrent des tas de réglages avancés.
    </p>

<?php for ($i=0; $i<count($listeArticle); $i++) { ?>
    <div class="expert">
        <p><?php echo $listeArticle[$i]['title']?></p>
        <p><?php echo $listeArticle[$i]['picture']?></p>
        <p><?php echo $listeArticle[$i]['schema']?></p>
        <p><?php echo $listeArticle[$i]['description']?></p>
        <p><?php echo $listeArticle[$i]['link']?></p>
    </div>
<?php } ?>

<?php $this->stop('main_content') ?>