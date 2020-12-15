<?php
    if(!($_SERVER["REQUEST_URI"] == "/actividad-21-PW/vistas/bienvenido.php"))
        header("Location: bienvenido.php");    
?>
<div id="eliminarUsuario" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
                <p class="modal-card-title">Eliminar usuario</p>
            <button class="delete" aria-label="close"></button>
        </header>

        <form action="../acciones/borrarUsuario.php" method="post">
            <section class="modal-card-body">
            <div class="field">
                    <label class="label">Nombre</label>
                    <div class="control">
                        <input id="eId" type="text" class="input" name="eliminarId" style="display:none"readonly>
                        <input id="eNombre" type="text" class="input" name="eliminarNombre" placeholder="Nombre" readonly>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Usuario</label>
                    <div class="control has-icons-left">
                        <input id="eUsuario" type="text" class="input" name="eliminarUsuario" placeholder="Usuario" readonly>
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Correo</label>
                    <div class="control has-icons-left">
                        <input id="eCorreo" type="email" class="input" name="eliminarCorreo" placeholder="Correo" readonly>
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                </div>

            </section>

            <footer class="modal-card-foot">
                <button class="guardarCambios button is-danger">Eliminar usuario</button>
            </footer>
        </form>
    </div>
</div>