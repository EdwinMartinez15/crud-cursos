<?php
    session_start();
    $tipo=$_SESSION['Tipo'];
    if ($tipo != 'administrador' && $tipo != 'cajero') {
        echo 'No tiene permiso';
        die();
    }
    require_once('../Productos/crud_Producto.php');
    require_once('../Productos/Producto.php');
    $crudP=new crudProducto();
    $producto=new Producto();
    $producto=$crudP->obtenerProducto($_GET['id']);
    $listaProducto=$crudP->mostrar();
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
        </style>
<div class="container position-fixed top-50 start-50 translate-middle w-auto p-3">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Ingrese los datos del producto
                </div>
                <div class="card-body">
                    <form action="/crud-cursos/Productos/administrar_producto.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Id</label>
                            <input readonly type="text" class="form-control" name="id" value="<?php echo $producto->getId() ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" value="<?php echo $producto->getNombre() ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tipo</label>
                            <input type="text" class="form-control" name="tipo" value="<?php echo $producto->getTipo() ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Proveedor</label>
                            <input type="text" class="form-control" name="proveedor" value="<?php echo $producto->getProveedor() ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Costo venta</label>
                            <input type="text" class="form-control" name="costo_venta" value="<?php echo $producto->getCosto_venta() ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Costo compra</label>
                            <input type="text" class="form-control" name="costo_compra" value="<?php echo $producto->getCosto_compra() ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cantidad</label>
                            <input type="text" class="form-control" name="cantidad" value="<?php echo $producto->getCantidad() ?>">
                        </div>
                        <input type="hidden" name="actualizar" value="actualizar">
                        <input type="submit" value="Guardar" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
