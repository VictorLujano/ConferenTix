<main class="auth"> 
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Ingresa tu nueva contraseña</p>

    <?php 
        require_once __DIR__ . '/../templates/alertas.php';

    ?>
    <?php 
    if ($token_valido) { ?>
    <form  method="POST" class="formulario">
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Nueva contraseña:</label>
            <input
            type="password"
            class="formulario__input"
            placeholder="Tu nueva contraseña"
            id="password"
            name="password"
            
            >
        </div>

        <input type="submit" class="formulario__submit" value="Aceptar"> 
    </form>
    <?php }?>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">Ya tienes cuenta? inicia sesion</a>
        <a href="/registro" class="acciones__enlace">Crear una cuenta</a>
    </div>

</main>