<?php $this->layout('layout', ['title' => 'Ecig Debutant']);
$this->start('main_content');
?>
    <div class="center">
    <h2>BIEN CHOISIR</h2>

    <p>Bien choisir son kit ecig est essentiel !!<p/>
    </div>
    <div class="grid">
        <div class="row">
            <div class="col-md-4">
                <figure class="effect-honey">
                    <figcaption>
                        <h2>Débutants</h2>
                        <a href="<?= $this->url("ecig_debutant"); ?>"><img src="<?= $this->assetUrl('img\img_article\boxegoaio.jpg') ?>" alt="e-cigarette-debutant-box-ego-aio"/> </a>
                    </figcaption>
                </figure>
            </div>

            <div class="col-md-4">
                <figure class="effect-honey">
                    <figcaption>
                        <h2>Connaisseurs</h2>
                        <a href="<?= $this->url("ecig_intermediaire"); ?>"><img src="<?= $this->assetUrl('img\img_article\istickpowernano.jpg') ?>" alt="e-cigarette-intermédiaire-i-stick-powernano"/> </a>
                    </figcaption>
                </figure>
            </div>

            <div class="col-md-4">
                <figure class="effect-honey">
                    <figcaption>
                        <h2>Experts</h2>
                        <a href="<?= $this->url("ecig_expert"); ?>"><img src="<?= $this->assetUrl('img\img_article\kitboxalien.png') ?>" alt="e-cigarette-expert-kit-box-alien"/></a>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>

<?php $this->stop('main_content') ?>