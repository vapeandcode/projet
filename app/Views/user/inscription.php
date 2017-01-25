<?php $this->layout('layout', ['title' => 'Utilisateur']) ?>

<?php $this->start('main_content') ?>
<h2>Inscription</h2>
<p>Inscription</p>
<?php
    if (isset($msg))
    {
        echo "<p>" . $msg ."</p>";
    }
?>
<form id="updateUser" action="<?= $this->url('user_create_user') ?>" method="post">
    <input type="text" name="username" value="" placeholder="Pseudo" required>
    <input type="email" name="email" value="" placeholder="votre_email@mail.com" required>
    <input type="password" name="password"  value="" placeholder="Mot de passe" required>
    <input type="submit" name="submit" value="Envoyer" required>
</form>
<?php $this->stop('main_content') ?>
