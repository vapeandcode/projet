<?php $this->layout('layout', ['title' => 'Utilisateur']) ?>

<?php $this->start('main_content') ?>
<h2>Login</h2>
<p>Login</p>
<form class="addArticle" action="<?= $this->url('user_loginSubmit') ?>" method="post">
    <input type="text" name="username" placeholder="Pseudo"></br>
    <input type="password" name="password" placeholder="Mot de passe"></br>
    <input type="submit" class="AddButton" name="subLogin" value="Connection">

</form>
<?php $this->stop('main_content') ?>
