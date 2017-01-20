<?php $this->layout('layout', ['title' => 'Utilisateur']) ?>

<?php $this->start('main_content') ?>
<h2>Login</h2>
<p>Login</p>
<form class="addArticle" action="<?= $this->url('user_loginSubmit') ?>" method="post">
    <input type="email" name="email" value="" placeholder="Email">
    <input type="text" name="pwd" value="" placeholder="Mot de passe">
    <input type="submit" class="AddButton" name="subLogin" value="Connection">
</form>
<?php $this->stop('main_content') ?>
