<main class="auth"> 
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Recupera el acceso a ConferenTix</p>

    <?php 
        require_once __DIR__ . '/../templates/alertas.php';

    ?>

    <form  method="POST" action="/olvide" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Correo:</label>
            <input
            type="email"
            class="formulario__input"
            placeholder="Tu correo"
            id="email"
            name="email"
            
            >
        </div>

        <input type="submit" class="formulario__submit" value="Enviar instrucciones"> 
    </form>

    <div class="acciones">
        
        <a href="/login" class="acciones__enlace">Ya tienes cuenta? inicia sesion</a>
        <a href="/registro" class="acciones__enlace">Crear una cuenta</a>
    </div>

</main>