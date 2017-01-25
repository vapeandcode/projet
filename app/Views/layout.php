<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $this->e($title) ?></title>
                    <!-- LIB -->
    <!-- jQuery -->
    <script src="<?= $this->assetUrl('libs/jquery.js') ?>" charset="utf-8"></script>

    <!-- BootStrap -->
    <script src="<?= $this->assetUrl('libs/bootstrap/js/bootstrap.js') ?>" charset="utf-8"></script>
    <link rel="stylesheet" href="<?= $this->assetUrl('libs/bootstrap/css/bootstrap.css') ?>">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?= $this->assetUrl('libs/font-awesome/css/font-awesome.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">



</head>
<body>
	<div class="container">

        <!-- MENU FADE IN/OUT -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav navbar-right">
                    <!--  SI ON A PAS DE SESSION D OUVERTE, ON AFFICHE -->
                    <?php if (!isset($_SESSION['user']['username'])) { ?>
                        <li><a href="<?= $this->url("user_inscription"); ?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="<?= $this->url("user_loginForm"); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

                        <!--  SI ON A UNE SESSION D OUVERTE, ON AFFICHE -->
                    <?php } elseif (isset($_SESSION['user']['username'])) { ?>
                        <li><span class="glyphicon"><?php echo $_SESSION['user']['username'] ?></span></li>
                        <li><a href="<?= $this->url("user_logout"); ?>"><span class="glyphicon"></span> Login</a></li>
                    <?php }
                        if ($_SESSION['user']['role'] == "admin") { ?>

                        <!--  SI ON A UNE SESSION ADMIN D OUVERTE, ON AFFICHE -->
                        <li><a href="<?= $this->url("user_loginForm"); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <?php } ?>
                 </ul>
            </div>
        </nav>


        
                       
                   
        <!-- HEADER LOGO -->
        <header class="headPage">
            <div class="headerKeyLeft">
                <span>Reviews</span>
                <span>Conseils</span>
            </div>
            <img src="<?= $this->assetUrl('img/logo.png') ?>" alt="image Logo Vap n Code">
            <div class="headerKeyRight">
                <span>Infos</span>
                <span>Produits</span>
            </div>
        </header>
        <!-- MENU FADE IN/OUT -->
        <header class="navbar navbar-default bs-docs-nav">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <i class="fa fa-bars fa-2" aria-hidden="true"></i>
                    </button>
                    <span class="navbar-brand">Menu</span>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?= $this->url("eliquid_home"); ?>">Liquide</a>
                        </li>
                        <li>
                            <a href="#">FAQ</a>
                        </li>
                        <li>
                            <a href="<?= $this->url("ecig_home"); ?>">¿ Bien choisir votre matériel ?</a>
                        </li>
                        <li>
                            <a href="#">Acheter votre matériel</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">Contactez nous</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
		<section>
			<?= $this->section('main_content') ?>
		</section>

        <footer>
            <h2>Nos réseaux sociaux</h2>
            <a href="https://twitter.com/?lang=fr">
                <img class="social" src="<?= $this->assetUrl('img/twitter.png') ?>" alt="Logo Twitter">
            </a>
            <a href="https://www.facebook.com/">
                <img class="social" src="<?= $this->assetUrl('img/facebook.png') ?>" alt="Logo Facebook">
            </a>
            <br>
            <!-- <h3>Suivez / Aimez</h3> -->
            <a href="https://www.youtube.com/?gl=FR&hl=fr">
                <img class="social" src="<?= $this->assetUrl('img/youtube.png') ?>" alt="Logo Youtube">
                <a href="https://www.instagram.com/">
                    <img class="social" src="<?= $this->assetUrl('img/instagram.png') ?>" alt="Logo Instagram">
                </a>
            </a>
            <!-- <h3>Regardez / Admirez</h3> -->
            <p>2016 - 2017 Tout droits réservés ©</p>

        </footer>
	</div>
</body>
</html>