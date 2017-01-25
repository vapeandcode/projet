<?php $this->layout('layout', ['title' => 'Eliquids']);
$this->start('main_content');
?>
    <h2>E-LIQUIDES</h2>
    <p>
        Découvrez les e-liquides que nous avons sélectionné pour vous en fonction de vos goûts.
    </p>
            <div class="grid">
                <figure class="effect-honey">
                    <figcaption>
                        <h2><span>Menthol</span></h2>
                        <a href="<?= $this->url("eliquid_menthol"); ?>"><img src="<?= $this->assetUrl('img/img_article/kiss.jpg') ?>" alt="kiss"/></a>
                    </figcaption>
                </figure>
            </div>

            <div class="grid">
                <figure class="effect-honey">
                    <figcaption>
                        <h2><span>Tabac</span></h2>
                        <a href="<?= $this->url("eliquid_tabac"); ?>"><img src="<?= $this->assetUrl('img/img_article/gainsbar.jpg') ?>" alt="gainsbar"/></a>
                    </figcaption>
                </figure>
            </div>

            <div class="grid">
                <figure class="effect-honey">
                    <figcaption>
                        <h2><span>Gourmand</span></h2>
                        <a href="<?= $this->url("eliquid_gourmand"); ?>"><img src="<?= $this->assetUrl('img/img_article/femme.jpg') ?>" alt="femme"/></a>
                    </figcaption>
                </figure>
            </div>

            <div class="grid">
                <figure class="effect-honey">
                    <figcaption>
                        <h2><span>Fruité</span></h2>
                        <a href="<?= $this->url("eliquid_fruite"); ?>"><img src="<?= $this->assetUrl('img/img_article/elloco.jpg') ?>" alt="elloco"/></a>
                    </figcaption>
                </figure>
            </div>

<?php $this->stop('main_content') ?>