<?php $this->layout('layout', ['title' => 'Administration']);
$this->start('main_content');

?>
<h2>Administration</h2>
<p>
    Dans cette partie vous pouvez gerer les utilisateurs et les articles.
</p>
<hr>
<h2>Gestion utilisateurs</h2>

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
    <?php for ($i=0; $i<count($listeUser); $i++) { ?>
        <tr>
            <td><?php echo $listeUser[$i]['id']?></td>
            <td><?php echo $listeUser[$i]['username']?></td>
            <td><?php echo $listeUser[$i]['password']?></td>
            <td><?php echo $listeUser[$i]['email']?></td>
            <td><?php echo $listeUser[$i]['role']?></td>
            <td>
                <form class="FormBtn" action="form.php" method="post">
                    <input type="hidden" name="userId" value="<?php echo $listeUser[$i]['id'] ?>">
                    <button type="submit" name="userUpdate" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                </form>
                <form class="FormBtn" action="delete.php" method="post">
                    <input type="hidden" name="userId" value="<?php echo $listeUser[$i]['id'] ?>">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                </form>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<hr>
<h2>Gestions articles</h2>
<?php $this->stop('main_content') ?>
