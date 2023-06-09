<?php
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/conexion.php');
    class CrudUsuario{
        public function __construct(){}
        public function insertar($usuario){
            $db=Db::conectar();
            $insert=$db->prepare('INSERT INTO usuarios values(NULL,:nombres,:apellidos,:correo,:direccion,:celular,:ciudad,:curso_id,:gestor_id)');
            $insert->bindValue('nombres',$usuario->getNombres());
            $insert->bindValue('apellidos',$usuario->getApellidos());
            $insert->bindValue('correo',$usuario->getCorreo());
            $insert->bindValue('direccion',$usuario->getDireccion());
            $insert->bindValue('celular',$usuario->getCelular());
            $insert->bindValue('ciudad',$usuario->getCiudad());
            $insert->bindValue('curso_id',$usuario->getCurso_id());
            $insert->bindValue('gestor_id',$usuario->getGestor_id());
            $insert->execute();
        }
        public function mostrar(){
            $db=Db::conectar();
            $listaUsuarioes=[];
            $select=$db->query('SELECT * FROM usuarios');
            foreach($select->fetchAll() as $usuario){
                $myUsuario= new Usuario();
                $myUsuario->setId($usuario['id']);
                $myUsuario->setNombres($usuario['nombres']);
                $myUsuario->setApellidos($usuario['apellidos']);
                $myUsuario->setCorreo($usuario['correo']);
                $myUsuario->setDireccion($usuario['direccion']);
                $myUsuario->setCelular($usuario['celular']);
                $myUsuario->setCiudad($usuario['ciudad']);
                $myUsuario->setCurso_id($usuario['curso_id']);
                $myUsuario->setGestor_id($usuario['gestor_id']);
                $listaUsuarioes[]=$myUsuario;
            }
            return $listaUsuarioes;
        }
        public function eliminar($id){
            $db=Db::conectar();
            $eliminar= $db->prepare('DELETE FROM usuarios WHERE ID=:id');
            $eliminar->bindValue('id',$id);
            $eliminar->execute();
        }
        public function obtenerUsuario($id){
            $db=Db::conectar();
            $select=$db->prepare('SELECT * FROM usuarios WHERE ID=:id');
            $select->bindValue('id',$id);
            $select->execute();
            $usuario=$select->fetch();
            $myUsuario= new Usuario();
            $myUsuario->setId($usuario['id']);
            $myUsuario->setNombres($usuario['nombres']);
            $myUsuario->setApellidos($usuario['apellidos']);
            $myUsuario->setCorreo($usuario['correo']);
            $myUsuario->setDireccion($usuario['direccion']);
            $myUsuario->setCelular($usuario['celular']);
            $myUsuario->setCiudad($usuario['ciudad']);
            $myUsuario->setCurso_id($usuario['curso_id']);
            $myUsuario->setGestor_id($usuario['gestor_id']);
            return $myUsuario;
        }
        public function actualizar($usuario){
            $db=DB::conectar();
            $actualizar=$db->prepare('UPDATE usuarios SET nombres=:nombres,apellidos=:apellidos,correo=:correo,direccion=:direccion,celular=:celular,ciudad=:ciudad,curso_id=:curso_id,gestor_id=:gestor_id WHERE id=:id');
            $actualizar->bindValue('id',$usuario->getId());
            $actualizar->bindValue('nombres',$usuario->getNombres());
            $actualizar->bindValue('apellidos',$usuario->getApellidos());
            $actualizar->bindValue('correo',$usuario->getCorreo());
            $actualizar->bindValue('direccion',$usuario->getDireccion());
            $actualizar->bindValue('celular',$usuario->getCelular());
            $actualizar->bindValue('ciudad',$usuario->getCiudad());
            $actualizar->bindValue('curso_id',$usuario->getCurso_id());
            $actualizar->bindValue('gestor_id',$usuario->getGestor_id());
            $actualizar->execute();
        }
    }


?>