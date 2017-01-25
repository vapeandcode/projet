<?php $this->layout('layout', ['title' => 'Utilisateur']) ?>

<?php $this->start('main_content') ?>
    <h2>Well done <?php echo $_SESSION['user']['username'] ?> have connected !</h2>
<?php var_dump($_SESSION) ?>
<?php $this->stop('main_content') ?>