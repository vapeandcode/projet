<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
        <?php
    if (isset($msg))
    {
//        MESSAGE QUAND LE USER CE CONNECTE
        ?>
        <div id="success-alert alert" class="alert alert-success">
            <strong>Success!</strong> Bonjour, <?php echo $msg ?>.
        </div>
        <?php
    }
    if (isset($success))
    {
//        MESSAGE ALERT USER ERREUR CONNECTION
        ?>
        <div class="alert alert-success">
            <strong>Success !</strong> <?php echo $success ?>.
        </div>
        <?php
        }
    ?>
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

  <!-- Wrapper des slides du carousel -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://www.shishavibe.com/wp-content/uploads/2016/10/innokin-smartbox-vape-kit-600x600.jpg" alt="image carousel ecig 1">
    </div>

    <div class="item">
      <img src="http://www.churnmag.com/wp-content/uploads/2016/12/Smok-Alien-220watt-Vape-Kit-600x600.jpg" alt="image carousel ecig 2">
    </div>

    <div class="item">
      <img src="https://www.johnnystobacconist.co.uk/wp-content/uploads/2016/04/Home-run-high-VG-e-liquid-by-Vampire-Vape-600x600.jpg" alt="image eliquide">
    </div>

    <div class="item">
      <img src="http://makemyvape.co.uk/image/cache/blog/2016/07/summer-vape-600x600.jpg" alt="image carousel d'un homme qui vape'">
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

<?php $this->stop('main_content') ?>
