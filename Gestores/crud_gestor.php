<?php 
    require_once('../conexion.php');
    class CrudGestor{
        public function __construct(){}
        public function insertar($gestor){
            $db=Db::conectar();
            $insert=$db->prepare('INSERT INTO gestores values(NULL,:nombres,:apellidos,:documento,:correo,:direccion,:tipo_usuario,:usuario,:clave,:sede)');
            $insert->bindValue('nombres',$gestor->getNombre());
            $insert->bindValue('apellidos',$gestor->getApellidos());
            $insert->bindValue('documento',$gestor->getDocumento());
            $insert->bindValue('correo',$gestor->getCorreo());
            $insert->bindValue('direccion',$gestor->getDireccion());
            $insert->bindValue('usuario',$gestor->getUsuario());
            $insert->bindValue('tipo_usuario',$gestor->getTipo_usuario());
            $insert->bindValue('clave',$gestor->getClave());
            $insert->bindValue('sede',$gestor->getSede());
            $insert->execute();
        }
        public function mostrar(){
            $db=Db::conectar();
            $listaGestores=[];
            $select=$db->query('SELECT * FROM gestores');
            foreach($select->fetchAll() as $gestor){
                $myGestor= new Gestor();
                $myGestor->setId($gestor['id']);
                $myGestor->setNombre($gestor['nombres']);
                $myGestor->setApellidos($gestor['apellidos']);
                $myGestor->setDocumento($gestor['documento']);
                $myGestor->setCorreo($gestor['correo']);
                $myGestor->setDireccion($gestor['direccion']);
                $myGestor->setTipo_usuario($gestor['tipo_usuario']);
                $myGestor->setUsuario($gestor['usuario']);
                $myGestor->setClave($gestor['clave']);
                $myGestor->setSede($gestor['sede']);
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
        public function obtenerGestor($id) {
            $db = Db::conectar();
            $select = $db->prepare('SELECT * FROM gestores WHERE ID=:id');
            $select->bindValue('id', $id);
            $select->execute();
            $gestor = $select->fetch();
            $myGestor = new Gestor();
            $myGestor->setId($gestor['id']);
            $myGestor->setNombre($gestor['nombres']);
            $myGestor->setApellidos($gestor['apellidos']);
            $myGestor->setDocumento($gestor['documento']);
            $myGestor->setCorreo($gestor['correo']);
            $myGestor->setDireccion($gestor['direccion']);
            $myGestor->setTipo_usuario($gestor['tipo_usuario']);
            $myGestor->setUsuario($gestor['usuario']);
            $myGestor->setClave($gestor['clave']);
            return $myGestor;
        }
        

        public function actualizar($gestor){
            $db = DB::conectar();
            $actualizar = $db->prepare('UPDATE gestores SET nombres=:nombres, apellidos=:apellidos, documento=:documento, correo=:correo, direccion=:direccion, tipo_usuario=:tipo_usuario, usuario=:usuario, clave=:clave WHERE id=:id');
            $actualizar->bindValue('id', $gestor->getId());
            $actualizar->bindValue('nombres', $gestor->getNombre());
            $actualizar->bindValue('apellidos', $gestor->getApellidos());
            $actualizar->bindValue('documento', $gestor->getDocumento());
            $actualizar->bindValue('correo', $gestor->getCorreo());
            $actualizar->bindValue('direccion', $gestor->getDireccion());
            $actualizar->bindValue('tipo_usuario', $gestor->getTipo_usuario());
            $actualizar->bindValue('usuario', $gestor->getUsuario());
            $actualizar->bindValue('clave', $gestor->getClave());
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