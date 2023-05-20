<?php
    session_start();
    
    $tipo=$_SESSION['Tipo'];
    if($tipo!='administrador'){
        echo 'No tiene permiso';
        die();
    }
    require_once('../Gestores/crud_gestor.php');
    require_once('../Gestores/gestor.php');
    $crud=new CrudGestor();
    $gestor=new Gestor();
    $listaGestores=$crud->mostrar();
    include('../Templates/Cabezas/cabeza_administrador.php');

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
    .card {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .card-header {
        text-align: center;
        background-color: #333;
        color: #fff;
        padding: 10px;
        border-radius: 5px 5px 0 0;
    }
    .card-body {
        padding: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
    }
    .btn {
        display: inline-block;
        padding: 8px 12px;
        margin: 5px;
        background-color: #333;
        color: #fff;
        border: none;
        border-radius: 4px;
        text-decoration: none;
        cursor: pointer;
    }
    .btn-primary {
        background-color: #007bff;
    }
    .btn-danger {
        background-color: #dc3545;
    }
    .card-footer {
        padding: 10px;
        text-align: end;
    }
        </style>
<div class="container position-fixed top-50 start-50 translate-middle w-auto p-3">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    Tabla Gestores
                
                </div>
                <div class="card-body ">
                    <table class="table text-center">
                        <thead>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Documento</th>
                            <th>Correo</th>
                            <th>Direccion</th>
                            <th>Tipo Usuario</th>
                            <th>Usuario</th>
                            <th>Clave</th>
                            <th>sede</th>
                      
                            <th>Actualizar</th>
                            <th>Eliminar</th>
                        </thead>
                        <body>
                            <?php foreach ($listaGestores as $gestor) {?>
                            <tr>
                                <td><?php echo $gestor->getId() ?></td>
                                <td><?php echo $gestor->getNombre() ?></td>
                                <td><?php echo $gestor->getApellidos() ?></td>
                                <td><?php echo $gestor->getDocumento() ?></td>
                                <td><?php echo $gestor->getCorreo() ?></td>
                                <td><?php echo $gestor->getDireccion() ?></td>
                                <td><?php echo $gestor->getTipo_Usuario() ?></td>
                                <td><?php echo $gestor->getUsuario() ?></td>
                                <td><?php echo $gestor->getClave() ?></td>
                                <td><?php echo $gestor->getSede() ?></td>
   

                                
                                <td><a href="/crud-cursos/Gestores/actualizar_gestor.php?id=<?php echo $gestor->getId()?>&accion=a" class="btn btn-primary">Actualizar</a></td>
                                <td><a href="/crud-cursos/Gestores/administrar_gestor.php?id=<?php echo $gestor->getId()?>&accion=e" class="btn btn-danger">Eliminar</a></td>
                            </tr>
                            <?php }?>
                        </body>
                    </table>
                </div>
                <div class="card-footer text-end">
                    <a href="/crud-cursos/Gestores/ingresar_gestor.php" class="btn btn-primary ">Ingresar</a>
                </div>
            </div>
        </div>
    </div>
</div>


    </body>
    <?php

    ?>