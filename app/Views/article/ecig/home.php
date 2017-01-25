<?php $this->layout('layout', ['title' => 'Ecig Debutant']);
$this->start('main_content');
?>
    <h2>BIEN CHOISIR</h2>

    <p>Bien choisir son kit ecig est essentiel !!<p/>

    <div class="grid">
        <figure class="effect-honey">
            <img src="public\assets\img\img_article\boxegoaio.jpg" alt="boxegoaio"/>
                <figcaption>
                    <h2><span>Débutants</span></h2>
                    <a href="<?= $this->url("ecig_debutant"); ?>">Débutants</a>
                </figcaption>
        </figure>
    </div>

    <div class="grid">
        <figure class="effect-honey">
            <img src="public\assets\img\img_article\istickpowernano.jpg" alt="istickpowernano"/>
            <figcaption>
                <h2><span>Connaisseurs</span></h2>
                <a href="<?= $this->url("ecig_intermediaire"); ?>">Connaisseurs</a>
            </figcaption>
        </figure>
    </div>

    <div class="grid">
        <figure class="effect-honey">
            <img src="public\assets\img\img_article\kitboxalien.jpg" alt="kitboxalien"/>
            <figcaption>
                <h2><span>Experts</span></h2>
                <a href="<?= $this->url("ecig_expert"); ?>">Experts</a>
            </figcaption>
        </figure>
    </div>


<?php $this->stop('main_content') ?>