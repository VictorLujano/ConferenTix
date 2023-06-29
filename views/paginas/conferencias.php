<main class="agenda">
    <h2 class="agenda__heading">Talleres y Conferecnias</h2>
    <p class="agenda__descripcion">Talleres y Conferencias impartidos por expertos en el area</p>

    <div class="eventos">
        <h3 class="eventos__heading">&lt;Conferencias /></h3>
        <p class="eventos__fecha">Viernes 9 de Agosto</p>

        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
            <?php foreach($eventos['conferencias_v'] as $evento) { ?>
                <?php include __DIR__ . '../../templates/evento.php'; ?>
            <?php }?>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>


        <p class="eventos__fecha">Sabado 10 de Agosto</p>
        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
            <?php foreach($eventos['conferencias_s'] as $evento) { ?>
                <?php include __DIR__ . '../../templates/evento.php'; ?>
            <?php }?>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </div>

    <div class="eventos eventos--talleres">
        <h3 class="eventos__heading">&lt;Talleres /></h3>
        <p class="eventos__fecha">Viernes 9 de Agosto</p>

        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
            <?php foreach($eventos['talleres_v'] as $evento) { ?>
                <?php include __DIR__ . '../../templates/evento.php'; ?>
            <?php }?>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>


        <p class="eventos__fecha">Sabado 10 de Agosto</p>
        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
            <?php foreach($eventos['talleres_s'] as $evento) { ?>
                <?php include __DIR__ . '../../templates/evento.php'; ?>
            <?php }?>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </div>
</main>