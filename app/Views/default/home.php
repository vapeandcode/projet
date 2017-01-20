<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
	<h2>Let's code.</h2>
	<p>Vous avez atteint la page d'accueil. Bravo.</p>
	<p>Et maintenant, RTFM dans <strong><a href="../docs/tuto/" title="Documentation de W">docs/tuto</a></strong>.</p>
    <ul>
        <li><a href="<?= $this->url('user_loginForm') ?>">Ce connecter</a></li>
        <li></li>
    </ul>
<?php $this->stop('main_content') ?>
