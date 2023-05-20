<?php 
    require_once('../conexion.php');
    class crudProducto{
        public function __construct(){}
        public function insertar($producto){
            $db=Db::conectar();
            $insert=$db->prepare('INSERT INTO producto values(NULL,:nombre,:tipo,:proveedor,:costo_venta,:costo_compra,:cantidad)');
            $insert->bindValue('nombre',$producto->getNombre());
            $insert->bindValue('tipo',$producto->getTipo());
            $insert->bindValue('proveedor',$producto->getProveedor());
            $insert->bindValue('costo_venta',$producto->getCosto_venta());
            $insert->bindValue('costo_compra',$producto->getCosto_compra());
            $insert->bindValue('cantidad',$producto->getCantidad());
            $insert->execute();
        }
        public function mostrar(){
            $db=Db::conectar();
            $listaProducto=[];
            $select=$db->query('SELECT * FROM producto');
            foreach($select->fetchAll() as $producto){
                $myProducto= new Producto();
                $myProducto->setId($producto['id']);
                $myProducto->setNombre($producto['nombre']);
                $myProducto->setTipo($producto['tipo']);
                $myProducto->setProveedor($producto['proveedor']);
                $myProducto->setCosto_venta($producto['costo_venta']);
                $myProducto->setCosto_compra($producto['costo_compra']);
                $myProducto->setCantidad($producto['cantidad']);

                $listaProducto[]=$myProducto;
            }
            return $listaProducto;
        }
        public function eliminar($id){
            $db=Db::conectar();
            $eliminar= $db->prepare('DELETE FROM producto WHERE ID=:id');
            $eliminar->bindValue('id',$id);
            $eliminar->execute();
        }
        public function obtenerProducto($id){
            $db=Db::conectar();
            $select=$db->prepare('SELECT * FROM producto WHERE ID=:id');
            $select->bindValue('id',$id);
            $select->execute();
            $producto=$select->fetch();
            $myProducto= new Producto();
            $myProducto->setId($producto['id']);
            $myProducto->setNombre($producto['nombre']);
            $myProducto->setTipo($producto['tipo']);
            $myProducto->setProveedor($producto['proveedor']);
            $myProducto->setCosto_venta($producto['costo_venta']);
            $myProducto->setCosto_compra($producto['costo_compra']);
            $myProducto->setCantidad($producto['cantidad']);
            return $myProducto;
        }
        public function actualizar($producto) {
            $db = Db::conectar();
            $actualizar = $db->prepare('UPDATE producto SET nombre=:nombre, tipo=:tipo, proveedor=:proveedor, costo_venta=:costo_venta, costo_compra=:costo_compra, cantidad=:cantidad WHERE id=:id');
            $actualizar->bindValue(':id', $producto->getId());
            $actualizar->bindValue(':nombre', $producto->getNombre());
            $actualizar->bindValue(':tipo', $producto->getTipo());
            $actualizar->bindValue(':proveedor', $producto->getProveedor());
            $actualizar->bindValue(':costo_venta', $producto->getCosto_venta());
            $actualizar->bindValue(':costo_compra', $producto->getCosto_compra());
            $actualizar->bindValue(':cantidad', $producto->getCantidad());
            $actualizar->execute();
        }
        
        public function seleccionGC($usuario){
            $db=DB::conectar();
            $select=$db->prepare('SELECT * FROM gestores WHERE usuario=:usuario');
            $select->bindValue('usuario',$usuario);
            $select->execute();
            $producto=$select->fetch();
            return $producto;

        }
    }
?>