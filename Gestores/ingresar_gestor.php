<?php
    session_start();
    $tipo=$_SESSION['Tipo'];
    if($tipo!='administrador'){
        echo 'No tiene permiso';
        die();
    }
    require_once('../Gestores/crud_gestor.php');
    require_once('../Gestores/gestor.php');
    $crudG=new CrudGestor();
    $gestor=new Gestor();
    $listaGestores=$crudG->mostrar();
    include('../Templates/Cabezas/cabeza_administrador.php');
    include('../Templates/Cabezas/cabeza_cajero.php');
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
<div class="container position-fixed top-50 start-50 translate-middle w-50 p-3">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Ingrese los datos del empleado
                </div>
                <div class="card-body">
                    <form action="/crud-cursos/Gestores/administrar_gestor.php" method="post">
                    <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                                <input  type="text"class="form-control" name="nombres" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Apellidos</label>
                                <input  type="text"class="form-control" name="apellidos" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Documento</label>
                                <input  type="text"class="form-control" name="documento" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Correo</label>
                                <input  type="text"class="form-control" name="correo" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Direccion</label>
                                <input  type="text"class="form-control" name="direccion" >
                        </div>
                        <div>
                            <label for="" class="form-label">Tipo Usuario</label>
                            <select name="tipo_usuario" class="form-select">
                                <option disabled selected>seleccione una opción</option>
                                <option value="administrador">administrador</option>
                                <option value="cajero">cajero</option>
                                <option value="mesero">mesero</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Usuario</label>
                                <input type="text"class="form-control" name="usuario">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Clave</label>
                                <input type="text"class="form-control" name="clave">
                        </div>
                        <label for="" class="form-label">numero</label>
                            <select name="sede" class="form-select">
                                <option disabled selected>seleccione una opción</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        <input type="hidden" name="insertar" value="insertar">
                        <input type="submit" value="Guardar" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php

    ?>