<?php < !DOCTYPEhtml > < htmllang = "fr" > < head > < metacharset = "UTF-8" > < metaname = "viewport"content = "width=device-width, initial-scale=1.0" > < title > < ? = $this->e($title) ?></title>
                    <!-- LIB -->
    <!-- jQuery -->
    <script src="<?php echo $this->assetUrl('libs/jquery.js') ?>" charset="utf-8"></script>

    <!-- BootStrap -->
    <script src="<?php echo $this->assetUrl('libs/bootstrap/js/bootstrap.js') ?>" charset="utf-8"></script>
    <link rel="stylesheet" href="<?php echo $this->assetUrl('libs/bootstrap/css/bootstrap.css') ?>">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?php echo $this->assetUrl('libs/font-awesome/css/font-awesome.css') ?>">


	<link rel="stylesheet" href="<?php echo $this->assetUrl('css/style.css') ?>">

</head>
<body>
	<div class="container">

<!--        <header class="searchNav">-->
<!--            <form role="search">-->
<!--                <div class="form-group">-->
<!--                    <input type="text"  placeholder="Search">-->
<!--                    <button type="submit" ><i class="fa fa-search" aria-hidden="true"></i></button>-->
<!--                </div>-->
<!--            </form>-->

<!--            <div class="dropdown">-->
<!--                <a class="btn btn-secondary dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                    <i class="fa fa-bars fa-2" aria-hidden="true"></i>-->
<!--                </a>-->
<!--                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">-->
<!---->
<!--                    <a class="dropdown-item" href="#">Connectez vous</a>-->
<!--                    <hr>-->
<!--                    <a class="dropdown-item" href="#">Inscrivez vous</a>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </header>-->
        <!-- MENU FADE IN/OUT -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">VapnCode</a>
            </div>
            <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="pages/ecig.php">Connectez vous</a></li>
            <li><a href="#">s'incrire</a></li>
            </ul>
            </div>
        </nav>
                       
                   
        <!-- HEADER LOGO -->
        <header class="headPage">
            <div class="headerKeyLeft">
                <span>Reviews</span>
                <span>Conseils</span>
            </div>
            <img src="<?php echo $this->assetUrl('img/logo.png') ?>" alt="image Logo Vap n Code">
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
                            <a href="pages/ecig.php">Ecig</a>
                        </li>
                        <li>
                            <a href="#">Liquide</a>
                        </li>
                        <li>
                            <a href="#">FAQ</a>
                        </li>
                        <li>
                            <a href="#">¿ Bien choisir votre matériel ?</a>
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
			<?php echo $this->section('main_content') ?>
		</section>

        <footer>
            <h2>Nos réseaux sociaux</h2>
            <a href="https://twitter.com/?lang=fr">
                <img class="social" src="<?php echo $this->assetUrl('img/twitter.png') ?>" alt="Logo Twitter">
            </a>
            <a href="https://www.facebook.com/">
                <img class="social" src="<?php echo $this->assetUrl('img/facebook.png') ?>" alt="Logo Facebook">
            </a>
            <br />
            <!-- <h3>Suivez / Aimez</h3> -->
            <a href="https://www.youtube.com/?gl=FR&hl=fr">
                <img class="social" src="<?php echo $this->assetUrl('img/youtube.png') ?>" alt="Logo Youtube">
                <a href="https://www.instagram.com/">
                    <img class="social" src="<?php echo $this->assetUrl('img/instagram.png') ?>" alt="Logo Instagram">
                </a>
            </a>
            <!-- <h3>Regardez / Admirez</h3> -->
            <p>2016 - 2017 Tout droits réservés ©</p>

        </footer>
	</div>
</body>
</html>