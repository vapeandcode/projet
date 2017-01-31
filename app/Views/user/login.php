<?php $this->layout('layout', ['title' => 'Utilisateur']) ?>

<?php $this->start('main_content');
if (isset($msg))
{
//        MESSAGE ALERT USER ERREUR CONNECTION
    ?>
    <div class="alert alert-danger">
        <strong>Erreur !</strong> <?php echo $msg ?>.
    </div>
    <?php
}
?>


<div id="containerLog" class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-5">
            <form class="form-login" action="<?= $this->url('user_loginSubmit') ?>" method="post">
                <h4>Login</h4>
                <input type="text" id="userName" name="username" class="form-control input-sm chat-input" placeholder="Pseudo" required="required" />
                </br>
                <input type="password" id="userPassword" name="password" class="form-control input-sm chat-input" placeholder="Mot de passe" required="required" />
                </br>
                <div class="wrapper">
                    <span class="group-btn">
                        <button class="btn btn-primary btn-md" type="submit" name="subLogin">Connection <i class="fa fa-sign-in"></i></button>
                        <!--<a href="<?/*= $this->url('user_loginSubmit') */?>" name="subLogin" class="btn btn-primary btn-md">Valider<i class="fa fa-sign-in"></i></a>-->
                    </span>
                </div>
            </form>

        </div>
    </div>
</div>
<?php $this->stop('main_content') ?>
