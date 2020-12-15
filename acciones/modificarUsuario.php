<?php
    if(!(isset($_POST["modificarNombre"])))
        header("Location: ../vistas/bienvenido.php");
    else{
        $id = $_POST["modificarId"];
        $nombre = $_POST["modificarNombre"];
        $usuario = $_POST["modificarUsuario"];
        $correo = $_POST["modificarCorreo"];
        $pass = $_POST["modificarPassword"];

        //$conexion = mysqli_connect("localhost","root",'',"id15663218_actividad21pw");
        $conexion = mysqli_connect("localhost","id15663218_root",'YGX!Sp>$HM|N\l4)',"id15663218_actividad21pw");
        $modificarUsuario = "UPDATE `usuarios` SET `nombre` = '$nombre', `usuario` = '$usuario', `correo` = '$correo', `password` = '$pass' WHERE `usuarios`.`id` = '$id'";
        $resultado = mysqli_query($conexion,$modificarUsuario);
        header("Location: ../vistas/bienvenido.php");
    }
?>
