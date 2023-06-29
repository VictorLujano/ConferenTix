<header class="header">
    <div class="header__contenedor">
        <nav class="header__navegacion">

            <?php if(is_auth()) { ?>
                <a href="<?php echo is_admin() ? '/admin/dashboard' : '/finalizar-registro';?>" class="header__enlace">Administrar</a>
                <form method="POST" action="/logout" class="header__form">
                    <input type="submit" value="Cerrar sesion" class="header__submit">
                </form>
            <?php } else { ?>
                <a href="/login" class="header__enlace">Iniciar Sesion</a>
                <a href="/registro" class="header__enlace">Registro</a>
            <?php }?>
        </nav>

        <div class="header__contenido">
            <a href="/">
                <h1 class="header__logo">
                    &#60;ConferenTix />
                </h1>
            </a>

            <p class="header__texto">Agosto 9 & 10 - 2023</p>
            <p class="header__texto header__texto--modalidad">En linea y presencial</p>

            <a href="/registro" class="header__boton">Comprar boleto</a>
        </div>
    </div>


</header>

<div class="barra">
    <div class="barra__contenido">
        <a href="/">
            <h1 class="barra__logo">
                &#60;ConferenTix />
            </h1>
        </a>


        <nav class="navegacion">
            <a href="/conferentix" class="navegacion__enlace <?php echo pagina_actual('/conferentix') ? 'navegacion__enlace--actual' : ''; ?>">Evento</a>
            <a href="/paquetes" class="navegacion__enlace <?php echo pagina_actual('/paquetes') ? 'navegacion__enlace--actual' : ''; ?>">Paquetes</a>
            <a href="/talleres-conferencias" class="navegacion__enlace <?php echo pagina_actual('/talleres-conferencias') ? 'navegacion__enlace--actual' : ''; ?>">Talleres / Conferencias</a>
            <a href="/registro" class="navegacion__enlace <?php echo pagina_actual('/registro') ? 'navegacion__enlace--actual' : ''; ?>">Comprar Pase</a>
        </nav>
    </div>
</div>