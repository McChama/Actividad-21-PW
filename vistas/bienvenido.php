<?php
    session_start();
    $varSesion = $_SESSION["usuario"];
    $nombreUsuario = $_SESSION["nombreUsuario"];

    if($varSesion == null || $varSesion == ''){
        session_destroy();
        header("Location: noValido.php");
    }

    $conexion = mysqli_connect("localhost","id15663218_root",'YGX!Sp>$HM|N\l4)',"id15663218_actividad21pw");
    //$conexion = mysqli_connect("localhost","root",'',"id15663218_actividad21pw");
    $consultaTabla = "SELECT id, nombre, usuario, correo FROM usuarios";
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include("../meta/librerias.php"); ?>

    <script src="../scripts/panel.js"></script>
    <link rel="stylesheet" href="../estilos/estilos-panel.css">
    <title>Panel de control</title>
</head>
<body class="bg-body">
    <?php include("agregarUsuario.php") ?>
    <?php include("modificarUsuario.php") ?>
    <?php include("borrarUsuario.php") ?>
    <section class="hero bg-hero mb-5">
        <div class="hero-body">
            <div class="container">
                <h1 class="title has-text-black">Universisdad de Colima</h1>
                <h2 class="subtitle has-text-black">Facultad de Telemática</h2>
                <p>Un gusto volver a verte <strong><?php echo $nombreUsuario ?></strong></p>
                <a href="../acciones/cerrarSesion.php">Cerrar sesion</a> 
            </div>
        </div>
    </section>

    <div class="container">
        <div class="columns is-centered">
            <div class="column is-full">
                <div class="card">
                    <div class="card-content">

                        <h1 class="title is-4 has-text-centered">Control de usuarios</h1>
                        <table class='table is-fullwidth'>
                            <thead>
                                <th class="has-text-centered"><strong><abbr title='Id'>#</abbr></strong></th>
                                <th class="has-text-centered"><strong>Nombre</strong></th>
                                <th class="has-text-centered"><strong>Usuario</strong></th>
                                <th class="has-text-centered"><strong>Correo</strong></th>
                                <th class="has-text-centered"><strong>Acciones</strong></th>
                                <button class='agregarUsuario button is-success is-outlined is-pulled-right'>Agregar usuario</button> 
                            </thead>
                            <tboby>
                                <?php
                                    $indice = 1;
                                    $resultadoTabla = mysqli_query($conexion,$consultaTabla);
                                    while($Fila = mysqli_fetch_assoc($resultadoTabla)){
                                        echo "
                                            <tr>
                                                <th id='i".$Fila['id']."'>".$indice++."</th>
                                                <td id='n".$Fila['id']."'> ".$Fila['nombre']."</td>
                                                <td id='u".$Fila['id']."'>".$Fila['usuario']."</td>
                                                <td id='c".$Fila['id']."'>".$Fila['correo']."</td>
                                                <td class='has-text-centered'>
                                                    <button id='m".$Fila['id']."' class='modificarUsuario button is-info is-outlined mx-1'>Editar</button>
                                                    <button id='e".$Fila['id']."' class='eliminarUsuario button is-danger is-outlined mx-1'>Borrar</button>
                                                </td>
                                            </tr>
                                        ";
                                    }
                                ?>
                            </tbody>
                        </table>
                                
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <?php include("../vistas/footer.php"); ?>
</body>
</html>