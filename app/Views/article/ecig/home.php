<?php $this->layout('layout', ['title' => 'Ecig Debutant']);
$this->start('main_content');
?>
    <h2>BIEN CHOISIR</h2>

    <p>Bien choisir son kit ecig est essentiel !!<p/>

    <div class="grid">
        <figure class="effect-honey">
            <figcaption>
                <h2><span>Débutants</span></h2>
                <a href="<?= $this->url("ecig_debutant"); ?>"><img src="<?= $this->assetUrl('img\img_article\boxegoaio.jpg') ?>" alt="boxegoaio"/> </a>
            </figcaption>
        </figure>
    </div>

    <div class="grid">
        <figure class="effect-honey">
            <figcaption>
            <h2><span>Connaisseurs</span></h2>
                <a href="<?= $this->url("ecig_intermediaire"); ?>"><img src="<?= $this->assetUrl('img\img_article\istickpowernano.jpg') ?>" alt="istickpowernano"/> </a>
            </figcaption>
        </figure>
    </div>

    <div class="grid">
        <figure class="effect-honey">
            <figcaption>
                <h2><span>Experts</span></h2>
                <a href="<?= $this->url("ecig_expert"); ?>"><img src="<?= $this->assetUrl('img\img_article\kitboxalien.png') ?>" alt="kitboxalien"/></a>
            </figcaption>
        </figure>
    </div>


<?php $this->stop('main_content') ?>