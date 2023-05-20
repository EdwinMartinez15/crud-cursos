<?php
    require_once('../Productos/crud_Producto.php');
    require_once('../Productos/Producto.php');


    $crud = new crudProducto();
    $producto = new Producto();

    if (isset($_POST['insertar'])) {
        $producto->setNombre($_POST['nombre']);
        $producto->setTipo($_POST['tipo']);
        $producto->setProveedor($_POST['proveedor']);
        $producto->setCosto_venta($_POST['costo_venta']);
        $producto->setCosto_compra($_POST['costo_compra']);
        $producto->setCantidad($_POST['cantidad']);

        $crud->insertar($producto);
        header('Location: /crud-cursos/Productos/mostrar_producto.php');
    }elseif (isset($_POST['actualizar'])) {
        require_once('../Productos/Producto.php');
        require_once('../Productos/crud_Producto.php');
        
        $producto = new Producto();
        $producto->setId($_POST['id']);
        $producto->setNombre($_POST['nombre']);
        $producto->setTipo($_POST['tipo']);
        $producto->setProveedor($_POST['proveedor']);
        $producto->setCosto_venta($_POST['costo_venta']);
        $producto->setCosto_compra($_POST['costo_compra']);
        $producto->setCantidad($_POST['cantidad']);
    
        $crudG = new crudProducto();
        $crudG->actualizar($producto);
    
        header('Location: /crud-cursos/Productos/mostrar_producto.php');
        exit();
    }elseif ($_GET['accion']=='e') {
        $crud->eliminar($_GET['id']);
        header('Location: /crud-cursos/Gestores/mostrar_gestor.php');
    }elseif ($_GET['accion']=='a') {
        header('Location: /crud-cursos/Gestores/actualizar_gestor.php');
    }

?>