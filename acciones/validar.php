<?php
    /* Iniciar sesion */
    session_start();
    
    $usuario = $_POST["usuario"];
    $pass = $_POST["pass"];

    /* Conectar a la base de datos */
    $conexion = mysqli_connect("localhost","id15663218_root",'YGX!Sp>$HM|N\l4)',"id15663218_actividad21pw");
    //$conexion = mysqli_connect("localhost","root",'',"id15663218_actividad21pw");
    $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND usuarios.password = '$pass' ";
    $resultado = mysqli_query($conexion,$consulta);
    $filas = mysqli_num_rows($resultado);

    if($filas > 0){
        /* Validar sesion */
        $nombreUsuario = mysqli_fetch_array($resultado);
        $_SESSION["nombreUsuario"] = $nombreUsuario["nombre"];
        $_SESSION["usuario"] = $usuario;
        header("Location:../vistas/bienvenido.php");
    }
    else{
        if(isset($_SESSION["usuario"])){
            header("Location: ../vistas/bienvenido.php");
        }else{
            if(isset($_POST["usuario"])){
                session_destroy();
                header("Location:../index.php?noValido=true");
            }
            else{
                session_destroy();
                header("Location:../index.php");
            }
            
        }
       
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>