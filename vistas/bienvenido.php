<?php
    session_start();
    $varSesion = $_SESSION["usuario"];

    if($varSesion == null || $varSesion == ''){
        session_destroy();
        header("Location: noValido.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("../meta/librerias.php"); ?>
    <link rel="stylesheet" href="../estilos/estilos.css">
    <title>Bievenido</title>
</head>
<body>

<section class="hero bg">
        <div class="hero-body">
            <div class="columns is-centered">
                <div class="column is-one-third">

                    <div class="card">
                        <div class="card-content">
                            <div class="media pb-1">
                                <div class="media-content">
                                    <h1 class="title is-4 has-text-centered">Bienvenido</h1>
                                    <p>Has iniciado sesion correctamente <?php echo $_SESSION["usuario"] ?></p>
                                    <a href="../acciones/cerrarSesion.php">Cerrar sesion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </section>
    
    <?php include("../vistas/footer.php"); ?>

    
</body>
</html>