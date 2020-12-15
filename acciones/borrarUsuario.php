<?php
    if(!(isset($_POST["eliminarId"])))
        header("Location: ../vistas/bienvenido.php");
    else{
        $id = $_POST["eliminarId"];

        //$conexion = mysqli_connect("localhost","root",'',"id15663218_actividad21pw");
        $conexion = mysqli_connect("localhost","id15663218_root",'YGX!Sp>$HM|N\l4)',"id15663218_actividad21pw");
        $borrarUsuario = "DELETE FROM `usuarios` WHERE `usuarios`.`id` = '$id'";
        $resultado = mysqli_query($conexion,$borrarUsuario);
        header("Location: ../vistas/bienvenido.php");
    }
?>
