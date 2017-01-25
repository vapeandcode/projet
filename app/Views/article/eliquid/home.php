<?php $this->layout('layout', ['title' => 'Eliquids']);
$this->start('main_content');
?>
    <h2>ELIQUIDS</h2>
    <p>
        Décrouvrez les eliquids que nous avons sélectionné pour vous en fonction de vos goûts.
    </p>

    <p><a href="<?= $this->url("eliquid_menthol"); ?>">Menthol</a></p>
    <p><a href="<?= $this->url("eliquid_tabac"); ?>">Tabac</a></p>
    <p><a href="<?= $this->url("eliquid_gourmand"); ?>">Gourmand</a></p>
    <p><a href="<?= $this->url("eliquid_fruite"); ?>">Fruité</a></p>

<?php $this->stop('main_content') ?>