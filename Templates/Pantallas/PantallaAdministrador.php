<?php
    session_start();
    $tipo=$_SESSION['Tipo'];
    $id=$_SESSION['Id'];
    $nombre=$_SESSION['Nombre'];
    if($tipo!='administrador'){
        echo 'No tiene permiso';
        die();
    }
?>

<html>
    <head>
        <title>Administrar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <div class="position-absolute top-0 end-0">
                    <table>
                        <td>
                            <a href="/crud-cursos/Login/login.php" class="btn btn-danger">Cerrar sesión</a>
                        </td>
                    </table>
                </div>
    </head>
    <body>
        <div class="container position-fixed top-50 start-50 translate-middle fs-1">
            <div class="row justify-content-md-center">
                <div class="col col-lg-3 fs-1">
                    ADMINISTRACIÓN
                </div>
                <div class="row row-cols-2 justify-content-md-center">
                    <div class="btn-group">
                        <a href="/crud-cursos/Usuarios/mostrar_usuario.php" class="btn btn-primary">Ver usuarios inscritos</a>
                        <a href="/crud-cursos/Gestores/mostrar_gestor.php" class="btn btn-primary">Ver Gestores inscritos </a>
                        <a href="/crud-cursos/Cursos/mostrar_curso.php" class="btn btn-primary">Ver Cursos inscritos  </a>
                        <a href="/crud-cursos/Templates/Pantallas/PantallaReportes.php" class="btn btn-primary">Ver Reportes  </a>
                    </div>
                    
                </div>
            </div>  
        </div>
    <?php
    include('../Colas/cola.php')
    ?>