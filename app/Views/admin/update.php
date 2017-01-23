<?php $this->layout('layout', ['title' => 'Administration']);
$this->start('main_content');

/**
 * Created by PhpStorm.
 * User: PEP
 */
var_dump($listeUser);
?>
<h2>Gestion de mis a jour de <?php echo  $listeUser['username'] ?></h2>

<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Pseudo</th>
        <th>Mot de passe</th>
        <th>Email</th>
        <th>Role</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <form id="updateUser" action="form.php" method="post">
            <td><?php echo $listeUser['id']?></td>
            <td><input type="text" name="username" form="updateUser" value="<?php echo $listeUser['username']?>"></td>
            <td><?php echo $listeUser['password']?></td>
            <td><input type="email" name="email" form="updateUser" value="<?php echo $listeUser['email']?>"></td>
            <td>
                <?php echo "Role actuel : " . $listeUser['role']?>
                <select name="role" form="updateUser">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </td>
            <td>
                <input type="hidden" form="updateUser" name="userId" value="<?php echo $listeUser['id'] ?>">
                <button type="submit" form="updateUser" name="userUpdate" class="btn btn-warning"><i class="fa fa-edit"></i></button>
            </td>
        </form>
    </tr>
</tbody>
</table>

<?php $this->stop('main_content') ?>
