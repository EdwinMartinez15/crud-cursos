<?php
    session_start();
    $tipo=$_SESSION['Tipo'];
    if ($tipo != 'administrador' && $tipo != 'cajero') {
        echo 'No tiene permiso';
        die();
    }
    require_once('../Productos/crud_Producto.php');
    require_once('../Productos/Producto.php');
    $crudG=new crudProducto();
    $producto=new Producto();
    $listaProducto=$crudG->mostrar();
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
                    <form action="/crud-cursos/Productos/administrar_producto.php" method="post">
                    <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                                <input  type="text"class="form-control" name="nombre" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tipo</label>
                                <input  type="text"class="form-control" name="tipo" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Proveedor</label>
                                <input  type="text"class="form-control" name="proveedor" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Costo venta </label>
                                <input  type="text"class="form-control" name="costo_venta" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Costo Compra</label>
                                <input  type="text"class="form-control" name="costo_compra" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Cantidad</label>
                                <input  type="text"class="form-control" name="cantidad" >
                        </div>

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