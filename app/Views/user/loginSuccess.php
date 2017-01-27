<?php $this->layout('layout', ['title' => 'Utilisateur']) ?>

<?php $this->start('main_content') ?>
    <h2>Well done <?php echo $_SESSION['user']['username'] ?> have connected !</h2>
    <a href="<?= $this->url("article_home"); ?>">retour au menu principale</a>
<?php $this->stop('main_content') ?>