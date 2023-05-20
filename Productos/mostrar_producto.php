<?php
    session_start();
    
    $tipo = $_SESSION['Tipo'];

    if ($tipo != 'administrador' && $tipo != 'cajero') {
        echo 'No tiene permiso';
        die();
    }
    
    require_once('../Productos/crud_Producto.php');
    require_once('../Productos/Producto.php');
    $crud=new crudProducto();
    $producto=new Producto();
    $listaProducto=$crud->mostrar();
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
<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tabla Producto
                </div>
                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Proveedor</th>
                                <th>Costo Venta</th>
                                <th>Costo Compra</th>
                                <th>Cantidad</th>
                                <th>Actualizar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listaProducto as $producto) {?>
                            <tr>
                                <td><?php echo $producto->getId() ?></td>
                                <td><?php echo $producto->getNombre() ?></td>
                                <td><?php echo $producto->getTipo() ?></td>
                                <td><?php echo $producto->getProveedor() ?></td>
                                <td><?php echo $producto->getCosto_venta() ?></td>
                                <td><?php echo $producto->getCosto_compra() ?></td>
                                <td><?php echo $producto->getCantidad() ?></td>
                                <td><a href="/crud-cursos/Productos/actualizar_producto.php?id=<?php echo $producto->getId()?>&accion=a" class="btn btn-primary">Actualizar</a></td>
<td><a href="/crud-cursos/Productos/administrar_producto.php?id=<?php echo $producto->getId()?>&accion=e" class="btn btn-danger">Eliminar</a></td>
</tr>
<?php }?>
</tbody>
</table>
</div>
<div class="card-footer">
<a href="/crud-cursos/Productos/ingresar_producto.php" class="btn btn-primary">Ingresar</a>
</div>
</div>
</div>
</div>

</div>
    <?php

    ?>