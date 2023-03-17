<?php
    session_start();
    $tipo=$_SESSION['Tipo'];
    $id=$_SESSION['Id'];
    $nombre=$_SESSION['Nombre'];
?>
<html>
    <head>
        <title>Usuarios</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
            <header>
                <div class="btn-toolbar justify-content-between">
                    <table>
                        <tr>
                            <td>
                                <a href="/crud-cursos/Usuarios/mostrar_usuario.php" class="btn btn-primary">Usuarios</a>
                            </td>
                            <?php if($tipo=='administrador'){?>
                                <td>
                                    <a href="/crud-cursos/Gestores/mostrar_gestor.php" class="btn btn-primary">Gestores</a>
                                </td>
                                <td>
                                    <a href="/crud-cursos/Cursos/mostrar_curso.php" class="btn btn-primary">Cursos</a>
                                </td>
                            <?php ;}?>
                        </tr>
                    </table>
                </div>
                <div class="text-center fs-1">
                    Bienvenid@ <?php echo $nombre?>
                </div>
                <div class="position-absolute top-0 end-0">
                    <table>
                        <td>
                            <?php if ($tipo=='gestor') {?>
                                <a href="/crud-cursos/Templates/PantallaGestor.php" class="btn btn-info">Volver al inicio</a>
                            <?php }?>
                            <?php if ($tipo=='administrador') {?>
                                <a href="/crud-cursos/Templates/PantallaAdministrador.php" class="btn btn-info">Volver al inicio</a>
                            <?php }?>
                        </td>
                        <td>
                            <a href="/crud-cursos/Login/cerrarSesion.php" class="btn btn-danger">Cerrar sesión</a>
                        </td>
                    </table>
                </div>
            </header>
        <main>