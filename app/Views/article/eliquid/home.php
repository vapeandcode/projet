<?php $this->layout('layout', ['title' => 'Eliquids']);
$this->start('main_content');
?>
    <div class="center">
        <h2>E-LIQUIDES</h2>
        <p>
            Découvrez les e-liquides que nous avons sélectionné pour vous en fonction de vos goûts.
        </p>

    </div>
            <div class="grid">
                <figure class="effect-honey">
                    <figcaption>
                        <h2>Menthols</h2>
                        <a href="<?= $this->url("eliquid_menthol"); ?>"><img src="<?= $this->assetUrl('img/img_article/kiss.jpeg') ?>" alt="e-liquide-menthol-kiss"/></a>
                    </figcaption>
                </figure>
            </div>

            <div class="grid">
                <figure class="effect-honey">
                    <figcaption>
                        <h2>Tabacs</h2>
                        <a href="<?= $this->url("eliquid_tabac"); ?>"><img src="<?= $this->assetUrl('img/img_article/gainsbar.jpg') ?>" alt="e-liquide-gout-tabac-gainsbar"/></a>
                    </figcaption>
                </figure>
            </div>

            <div class="grid">
                <figure class="effect-honey">
                    <figcaption>
                        <h2>Gourmands</h2>
                        <a href="<?= $this->url("eliquid_gourmand"); ?>"><img src="<?= $this->assetUrl('img/img_article/femme.jpg') ?>" alt="e-liquide-gourmand-femme-a-barbe"/></a>
                    </figcaption>
                </figure>
            </div>

            <div class="grid">
                <figure class="effect-honey">
                    <figcaption>
                        <h2>Fruités</h2>
                        <a href="<?= $this->url("eliquid_fruite"); ?>"><img src="<?= $this->assetUrl('img/img_article/elloco.jpg') ?>" alt="e-liquide-fruité-elloco"/></a>
                    </figcaption>
                </figure>
            </div>

<?php $this->stop('main_content') ?>