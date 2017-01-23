<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

	<h4>Qui sommes nous ?</h4>
      <p>
        Code N Vape est un projet destiné a vous accompagner dans le monde merveilleux de la vape.
        Nous sommes parti du constat que ce domaine pour un néophyte peut paraitre inaccesible avec ces termes barbares et la multitude de produits face a des sites reservés aux experts.
        Notre but est de vous apprendre les bases de cet univers , répondre a toutes vos questions , vous guider dans vos besoins.<br><br>
        A vous la tête dans les nuages !
      </p>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://lorempixel.com/400/200/" alt="Chania">
    </div>

    <div class="item">
      <img src="http://lorempixel.com/400/200/sports/" alt="Chania">
    </div>

    <div class="item">
      <img src="http://lorempixel.com/400/200/sports/1/Dummy-Text/" alt="Flower">
    </div>

    <div class="item">
      <img src="http://lorempixel.com/g/400/200/" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

	<h2>Let's code.</h2>
	<p>Vous avez atteint la page d'accueil. Bravo.</p>
	<p>Et maintenant, RTFM dans <strong><a href="../docs/tuto/" title="Documentation de W">docs/tuto</a></strong>.</p>
    <ul>
        <li><a href="<?= $this->url('user_loginForm') ?>">Ce connecter</a></li>
        <li><a href="<?= $this->url('admin_users') ?>">Ce connecter</a></li>
        <li></li>
    </ul>

<?php $this->stop('main_content') ?>
