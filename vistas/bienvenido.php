<?php
    session_start();
    $varSesion = $_SESSION["usuario"];

    if($varSesion == null || $varSesion == ''){
        include("noValido.php");
        die();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bievenido</title>
</head>
<body>
    <h1>Has iniciado sesion correctamente <?php echo $_SESSION["usuario"] ?></h1>
    <a href="cerrarSesion.php">Cerrar sesion</a>
</body>
</html>