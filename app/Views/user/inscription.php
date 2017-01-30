<?php $this->layout('layout', ['title' => 'Utilisateur']) ?>

<?php $this->start('main_content') ?>
<?php
    if (isset($msg))
    {
        echo "<p>" . $msg ."</p>";
    }
?>
<!--<form id="updateUser" action="<?/*= $this->url('user_create_user') */?>" method="post">
    <input type="text" name="username" value="" placeholder="Pseudo">
    <input type="email" name="email" value="" placeholder="votre_email@mail.com">
    <input type="password" name="password"  value="" placeholder="Mot de passe">
    <input type="submit" name="submit" value="Envoyer">
</form>-->

<div class="container">
    <div class="row main">
        <div class="panel-heading">
            <div class="panel-title text-center">
                <h2 class="title">INSCRIPTION</h2>
                <hr />
            </div>
        </div>
        <div class="main-login main-center">
            <form id="updateUser" class="form-horizontal" method="post" action="<?= $this->url('user_create_user') ?>">

                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Votre Pseudo</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="username" id="name"  placeholder="Entrez votre pseudo" required/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Votre Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="email" class="form-control" name="email" id="email"  placeholder="Entrez votre email" required/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Votre Mot de passe</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="password" id="password"  placeholder="Entrez votre mot de passe" required/>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button">Inscription</button>
                </div>
        </div>
    </div>
</div>

<?php $this->stop('main_content') ?>
