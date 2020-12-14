<?php
   if(session_start()){
       if(isset($_SESSION["usuario"])){
           header("Location: bienvenido.php");
       }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include("../meta/librerias.php") ?>

    <link rel="stylesheet" href="../estilos/estilos.css">
    <title>Sesion no valida</title>
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
                                    <h1 class="title is-4 has-text-centered">Sesion no valida</h1>
                                    <p>Inicia sesion para poder ver el contenido</p>
                                    <a href="../index.php">Regresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </section>
    
</body>
</html>