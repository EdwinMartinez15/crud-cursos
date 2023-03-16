<?php 
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/conexion.php');
    class CrudCurso{
        public function __construct(){}
        public function insertar($curso){
            $db=Db::conectar();
            $insert=$db->prepare('INSERT INTO cursos values(NULL,:nombre,:codigo)');
            $insert->bindValue('nombre',$curso->getNombre());
            $insert->bindValue('codigo',$curso->getCodigo());
            $insert->execute();
        }
        public function mostrar(){
            $db=Db::conectar();
            $listaCursoes=[];
            $select=$db->query('SELECT * FROM cursos');
            foreach($select->fetchAll() as $curso){
                $myCurso= new Curso();
                $myCurso->setId($curso['id']);
                $myCurso->setNombre($curso['nombre']);
                $myCurso->setCodigo($curso['codigo']);
                $listaCursoes[]=$myCurso;
            }
            return $listaCursoes;
        }
        public function eliminar($id){
            $db=Db::conectar();
            $eliminar= $db->prepare('DELETE FROM cursos WHERE ID=:id');
            $eliminar->bindValue('id',$id);
            $eliminar->execute();
        }
        public function obtenerCurso($id){
            $db=Db::conectar();
            $select=$db->prepare('SELECT * FROM cursos WHERE ID=:id');
            $select->bindValue('id',$id);
            $select->execute();
            $curso=$select->fetch();
            $myCurso= new Curso();
            $myCurso->setId($curso['id']);
            $myCurso->setNombre($curso['nombre']);
            $myCurso->setCodigo($curso['codigo']);
            return $myCurso;
        }
        public function actualizar($curso){
            $db=DB::conectar();
            $actualizar=$db->prepare('UPDATE cursos SET nombre=:nombre,codigo=:codigo WHERE id=:id');
            $actualizar->bindValue('id',$curso->getId());
            $actualizar->bindValue('nombre',$curso->getNombre());
            $actualizar->bindValue('codigo',$curso->getCodigo());
            $actualizar->execute();
        }
    }
?>