<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include("meta/librerias.php"); ?>
    <script src="scripts/index.js"></script>
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Acitivdad 21 PW</title>
</head>
<body>
    <section class="hero bg">
        <div class="hero-body py-1">
            <div class="columns is-centered">
                <div class="column is-one-third">

                    <div class="is-flex is-horizontal-centered ">
                        <figure class="image is-128x128">
                            <img class="is-rounded" src="media/perfil.jpg" alt="fotoPerfil">
                        </figure>
                    </div>

                    <div class="card pt-3">
                        <div class="card-content">
                            <div class="media pb-1">
                                <div class="media-content">
                                    <p class="title is-4 has-text-centered">Iniciar sesion</p>
                                    
                                    <?php
                                        if(isset($_GET["noValido"]) && !(isset($_SESSION["usuario"]))){
                                            include("vistas/errorLogin.php");
                                        }      
                                    ?>

                                    <form action="acciones/validar.php" method="post">

                                        <div class="field">
                                            <label class="label">Usuario o correo electronico</label>
                                            <div class="control has-icons-left">
                                                <input class="input" type="text" name="usuario" placeholder="Usuario" required>
                                                <span class="icon is-small is-left">
                                                    <i class="fas fa-user" style="color: #51cf66;"></i>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="field pb-4">
                                            <label class="label">Contraseña</label>
                                            <div class="control has-icons-left">
                                                <input class="input" type="password" name="pass" placeholder="Contraseña" required>
                                                <span class="icon is-small is-left">
                                                    <i class="fas fa-key" style="color: #ff922b;"></i>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="field">
                                            <div class="control has-text-centered btn-center">
                                                <button class="button is-danger is-outlined is-rounded px-6">&nbsp;&nbsp;Ingresar&nbsp;&nbsp;</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </section>
    
    <?php include("vistas/footer.php"); ?>
    
</body>
</html>