<?php $this->layout('layout', ['title' => 'Administration']);
$this->start('main_content');

/**
 * Created by PhpStorm.
 * User: PEP
 */
?>
<h2>Gestion de mises a jour de <?php echo  $listeUser['username'] ?></h2>


<div class="container addarticleadmin">
    <div class="row">
        <div class="col-md-offset-3 col-md-5">
            <form id="addarticleadmin" class="form-login" action="<?= $this->url('update_user') ?>" method="post">
                <h4>Information</h4>

                <p>
                    Pseudo :
                    <input type="text" name="username" form="addarticleadmin" value="<?php echo $listeUser['username']?>">
                </p>
                <p>Email :
                    <input type="email" name="email" form="addarticleadmin" value="<?php echo $listeUser['email']?>">
                </p>
                <p>Mot de passe :
                    <input type="text" name="password" form="addarticleadmin" value="" disabled>
                </p>
                <p>
                    <?php echo "Role actuel : " . $listeUser['role']?>
                    <select name="role" form="addarticleadmin">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </p>
                <input type="hidden" form="addarticleadmin" name="userId" value="<?php echo $listeUser['id'] ?>">
                <div class="wrapper">
                    <span class="group-btn">
                        <button class="btn btn-primary btn-md" type="submit" name="userUpdate">Modifier <i class="fa fa-edit"></i></button>
                        <!--<a href="<?/*= $this->url('user_loginSubmit') */?>" name="subLogin" class="btn btn-primary btn-md">Valider<i class="fa fa-sign-in"></i></a>-->
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->stop('main_content') ?>
