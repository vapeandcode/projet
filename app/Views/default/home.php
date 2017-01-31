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
      <img src="https://resize.over-blog.com/400x400-ct.jpg?http://img.over-blog-kiwi.com/0/91/03/66/20160808/ob_b1213d_idees-recues.jpg" alt="image carousel stop aux idées reçues">
    </div>

    <div class="item">
      <img src="https://lh3.googleusercontent.com/proxy/K4LWoH8Zquu3uu-V9AmKa8HdDRJrpvbt0rZBZvpVg6ygSCSWtePSuC65vnhGv5zERG7wg7CF82p875CjMGKLe1pqEshFrjnXp_UIsst9AiSZPKjmwQvvqHlAvf4=s426" alt="image carousel arretez de fumer">
    </div>

    <div class="item">
      <img src="https://s-media-cache-ak0.pinimg.com/736x/fb/c6/fc/fbc6fc8a333fe36b9dbaf18e049e086d.jpg" alt="image carousel santé Vape">
    </div>

    <div class="item">
      <img src="https://pbs.twimg.com/profile_images/527430043178655744/1TBAzFxB.jpeg" alt="image carousel stop fumer , commencez a vaper">
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
