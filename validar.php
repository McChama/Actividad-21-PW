<?php
    /* Iniciar sesion */
    session_start();

    $usuario = $_POST["usuario"];
    $pass = $_POST["pass"];

    /* Conectar a la base de datos */
    $conexion = mysqli_connect("localhost","id15663218_root",'YGX!Sp>$HM|N\l4)',"id15663218_actividad21pw");
    $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND usuarios.password = '$pass' ";
    $resultado = mysqli_query($conexion,$consulta);
    $filas = mysqli_num_rows($resultado);

    /* Validar sesion */
    $_SESSION["usuario"] = $usuario;

    if($filas > 0){
        header("Location:bienvenido.php");
    }
    else{
        header("Location:noValido.php");
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>