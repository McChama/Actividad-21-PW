<?php
    if(!($_SERVER["REQUEST_URI"] == "/actividad-21-PW/vistas/bienvenido.php"))
        header("Location: bienvenido.php");    
?>
<div id="agregarUsuario" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
                <p class="modal-card-title">Agregar usuario</p>
            <button class="delete" aria-label="close"></button>
        </header>
        <form action="../acciones/agregarUsuario.php" method="post">
            <section class="modal-card-body">
                <div class="field">
                    <label class="label">Nombre</label>
                    <div class="control">
                        <input type="text" class="input" name="agregarNombre" placeholder="Nombre" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Usuario</label>
                    <div class="control has-icons-left">
                        <input type="text" class="input" name="agregarUsuario" placeholder="Usuario" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Correo</label>
                    <div class="control has-icons-left">
                        <input type="email" class="input" name="agregarCorreo" placeholder="Correo" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Contraseña</label>
                    <div class="control has-icons-left">
                        <input type="password" class="input" name="agregarPassword" placeholder="Contraseña" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </div>
                </div>
 
            </section>

            <footer class="modal-card-foot">
                <button class="guardarCambios button is-info">Agregar usuario</button>
            </footer>
        </form>
    </div>
</div>