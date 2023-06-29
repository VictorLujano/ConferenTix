<main class="conferentix">
    <h2 class="conferentix__heading"><?php echo $titulo; ?></h2>
    <p class="conferentix__descripcion">Conoce la conferencia mas importante de todo el poderosisimo TESH</p>

    <div class="conferentix__grid">
        <div <?php aos_animacion(); ?> class="conferentix__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/sobre_devwebcamp.jpg" alt="Imgane Conferentix">
            </picture>
        </div>

        <div <?php aos_animacion(); ?> class="conferentix__contenido">
            <p class="conferentix__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Odit commodi laboriosam ad beatae optio molestiae saepe quidem quasi ea deserunt 
                accusantium, corporis vitae minus, a consequatur repellat, at soluta cumque.</p>
                
            <p class="conferentix__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Odit commodi laboriosam ad beatae optio molestiae saepe quidem quasi ea deserunt 
            accusantium, corporis vitae minus, a consequatur repellat, at soluta cumque.</p>
        </div>
    </div>
</main>
