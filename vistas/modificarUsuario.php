<?php
    if(!($_SERVER["REQUEST_URI"] == "/actividad-21-PW/vistas/bienvenido.php"))
        header("Location: bienvenido.php");    
?>
<div id="modificarUsuario" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
                <p class="modal-card-title">Modificar usuario</p>
            <button class="delete" aria-label="close"></button>
        </header>

        <form action="../acciones/modificarUsuario.php" method="post">
            <section class="modal-card-body">
            <div class="field">
                    <label class="label">Nombre</label>
                    <div class="control">
                    <input id="mId" type="text" class="input" name="modificarId" style="display:none">
                        <input id="mNombre" type="text" class="input" name="modificarNombre" placeholder="Nombre" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Usuario</label>
                    <div class="control has-icons-left">
                        <input id="mUsuario" type="text" class="input" name="modificarUsuario" placeholder="Usuario" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Correo</label>
                    <div class="control has-icons-left">
                        <input id="mCorreo" type="email" class="input" name="modificarCorreo" placeholder="Correo" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Contraseña</label>
                    <div class="control has-icons-left">
                        <input id="mPassword" type="password" class="input" name="modificarPassword" placeholder="Contraseña" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </div>
                </div>
            </section>

            <footer class="modal-card-foot">
                <button class="guardarCambios button is-info">Modificar usuario</button>
            </footer>
        </form>
    </div>
</div>