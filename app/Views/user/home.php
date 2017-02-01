<?php $this->layout('layout', ['title' => 'Utilisateur']);
if (isset($_SESSION['user'])) {

    /**
     * Created by PhpStorm.
     * User: PEP
     */?>

    <?php $this->start('main_content')?>
    <h2>Mon Compte</h2>
    <p>Bonjour <?php echo $_SESSION['user']['username'] ?>, vous pouvez modifer vos données içi</p>

    <div class="container addarticleadmin">
        <div class="row">
            <div class="col-md-offset-3 col-md-5">
                <form id="addarticleadmin" class="form-login" action="<?= $this->url('update_user') ?>" method="post">
                    <h4>Vos information</h4>

                    <p>Votre email :
                    <input type="email" name="myEmail" form="addarticleadmin" value="<?php echo $listeUser['email']?>" disabled>
                    </p>
                    <p>Nouveau email :
                        <input type="email" name="email" form="addarticleadmin" value="">
                    </p>
                    <p>Nouveau mot de passe :
                        <input type="text" name="password" form="addarticleadmin" value="">
                    </p>

                    <input type="hidden" form="addarticleadmin" name="userId" value="<?php echo $listeUser['id'] ?>">
                    <div class="wrapper">
                    <span class="group-btn">
                        <button class="btn btn-primary btn-md" type="submit" name="myUserUpdate">Modifier <i class="fa fa-edit"></i></button>
                        <!--<a href="<?/*= $this->url('user_loginSubmit') */?>" name="subLogin" class="btn btn-primary btn-md">Valider<i class="fa fa-sign-in"></i></a>-->
                    </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php $this->stop('main_content');
} else {
    echo "Erreur 404.";
}
?>
