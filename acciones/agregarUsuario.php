<?php
    if(!(isset($_POST["agregarNombre"])))
        header("Location: ../vistas/bienvenido.php");
    else{
        $nombre = $_POST["agregarNombre"];
        $usuario = $_POST["agregarUsuario"];
        $correo = $_POST["agregarCorreo"];
        $pass = $_POST["agregarPassword"];

        //$conexion = mysqli_connect("localhost","root",'',"id15663218_actividad21pw");
        $conexion = mysqli_connect("localhost","id15663218_root",'YGX!Sp>$HM|N\l4)',"id15663218_actividad21pw");
        $agregarUsuario = "INSERT INTO usuarios (nombre, usuario, correo, usuarios.password) VALUES ('$nombre', '$usuario', '$correo', '$pass') ";
        $resultado = mysqli_query($conexion,$agregarUsuario);
        header("Location: ../vistas/bienvenido.php");
    }

    
?>