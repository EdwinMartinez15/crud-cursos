<?php
    session_start();
    $tipo=$_SESSION['Tipo'];
    if($tipo!='mesero'){
        echo 'No tiene permiso';
        die();
    }
?>
        <style>
            body {
                background-image: url('https://img.freepik.com/foto-gratis/fondo-acuarela-pintada-mano-forma-cielo-nubes_24972-1095.jpg?w=996&t=st=1683950251~exp=1683950851~hmac=3e42a5c65d340866f7e5cc5b67929cf296a13948afc91fa57fb67fb820a8a041');
                background-size: cover;
            }
            .container {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            .row {
                justify-content: center;
            }
            .col-lg-9 {
                font-size: 1.4rem;
            }
            .col-lg-3 {
                font-size: 1.4rem;
            }
        </style>
<html>
    <head>
        <title>Administrar Libro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <div class="position-absolute top-0 end-0">
                    <table>
                        <td>
                            <a href="/crud-cursos/index.php" class="btn btn-danger">Cerrar sesión</a>
                        </td>
                    </table>
                </div>
    </head>
    <body>
        <div class="container position-fixed top-50 start-50 translate-middle fs-1">
            <div class="row justify-content-md-center">
                <div class="col col-lg-2 fs-1">
                    Mesero
                </div>
                <div class="row row-cols-2 justify-content-md-center">
                    <div class="btn-group">
                    <a href="/crud-cursos/Templates/Pantallas/Asignacion_mesas.php" class="btn btn-primary">Tomar pedido </a>
                        
                    </div>
                    
                </div>
            </div>  
        </div>
    <?php

    ?>