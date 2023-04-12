<?php 
    require_once('../conexion.php');
    class CrudGestor{
        public function __construct(){}
        public function insertar($gestor){
            $db=Db::conectar();
            $insert=$db->prepare('INSERT INTO gestores values(NULL,:nombre,:tipo_usuario,:usuario,:clave)');
            $insert->bindValue('nombre',$gestor->getNombre());
            $insert->bindValue('usuario',$gestor->getUsuario());
            $insert->bindValue('tipo_usuario',$gestor->getTipo_usuario());
            $insert->bindValue('clave',$gestor->getClave());
            $insert->execute();
        }
        public function mostrar(){
            $db=Db::conectar();
            $listaGestores=[];
            $select=$db->query('SELECT * FROM gestores');
            foreach($select->fetchAll() as $gestor){
                $myGestor= new Gestor();
                $myGestor->setId($gestor['id']);
                $myGestor->setNombre($gestor['nombre']);
                $myGestor->setTipo_usuario($gestor['tipo_usuario']);
                $myGestor->setUsuario($gestor['usuario']);
                $myGestor->setClave($gestor['clave']);
                $listaGestores[]=$myGestor;
            }
            return $listaGestores;
        }
        public function eliminar($id){
            $db=Db::conectar();
            $eliminar= $db->prepare('DELETE FROM gestores WHERE ID=:id');
            $eliminar->bindValue('id',$id);
            $eliminar->execute();
        }
        public function obtenerGestor($id){
            $db=Db::conectar();
            $select=$db->prepare('SELECT * FROM gestores WHERE ID=:id');
            $select->bindValue('id',$id);
            $select->execute();
            $gestor=$select->fetch();
            $myGestor= new Gestor();
            $myGestor->setId($gestor['id']);
            $myGestor->setNombre($gestor['nombre']);
            $myGestor->setTipo_usuario($gestor['tipo_usuario']);
            $myGestor->setUsuario($gestor['usuario']);
            $myGestor->setClave($gestor['clave']);
            return $myGestor;
        }
        public function actualizar($gestor){
            $db=DB::conectar();
            $actualizar=$db->prepare('UPDATE gestores SET nombre=:nombre,tipo_usuario=:tipo_usuario,usuario=:usuario,clave=:clave WHERE id=:id');
            $actualizar->bindValue('id',$gestor->getId());
            $actualizar->bindValue('nombre',$gestor->getNombre());
            $actualizar->bindValue('tipo_usuario',$gestor->getTipo_usuario());
            $actualizar->bindValue('usuario',$gestor->getUsuario());
            $actualizar->bindValue('clave',$gestor->getClave());
            $actualizar->execute();
        }
        public function seleccionGC($usuario){
            $db=DB::conectar();
            $select=$db->prepare('SELECT * FROM gestores WHERE usuario=:usuario');
            $select->bindValue('usuario',$usuario);
            $select->execute();
            $gestor=$select->fetch();
            return $gestor;

        }
    }
?>