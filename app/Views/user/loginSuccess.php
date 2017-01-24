<?php $this->layout('layout', ['title' => 'Utilisateur']) ?>

<?php $this->start('main_content') ?>
    <h2>Well done <?php echo $_SESSION['pseudo'] ?> have connected !</h2>
<?php $this->stop('main_content') ?>