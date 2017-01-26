<?php $this->layout('layout', ['title' => 'Utilisateur']) ?>

<?php $this->start('main_content') ?>
    <h2>Well done <?php echo $_SESSION['user']['username'] ?> have connected !</h2>
    <a href="<?= $this->url("default_home"); ?>">Retour a la page d'acceuil</a>
<?php $this->stop('main_content') ?>