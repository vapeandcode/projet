<?php $this->layout('layout', ['title' => 'Utilisateur']);
if (isset($_SESSION['user'])) {

    /**
     * Created by PhpStorm.
     * User: PEP
     */?>

    <?php $this->start('main_content')?>
    <h2>Mon Compte</h2>
    <p>Bonjour <?php echo $_SESSION['user']['username'] ?>, vous pouvez modifer vos données içi</p>

    <table class="table">
        <thead>
        <tr>
            <th>Pseudo</th>
            <th>Mot de passe</th>
            <th>Email</th>
            <th>Mise à jour</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <form id="updateUser" action="<?= $this->url('update_user') ?>" method="post">
                <td><?php echo $listeUser['username']?></td>
                <td><input type="text" name="password" form="updateUser" value=""></td>
                <td><input type="email" name="email" form="updateUser" value="<?php echo $listeUser['email']?>"></td>
                <td>
                    <input type="hidden" form="updateUser" name="userId" value="<?php echo $listeUser['id'] ?>">
                    <button type="submit" form="updateUser" name="myUserUpdate" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                </td>
            </form>
        </tr>
        </tbody>
    </table>
    <?php $this->stop('main_content');
} else {
    echo "Erreur 404.";
}
?>
