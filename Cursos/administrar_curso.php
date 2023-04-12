<?php
    require_once('../Cursos/crud_curso.php');
    require_once('../Cursos/curso.php');


    $crud = new CrudCurso();
    $curso = new Curso();

    if (isset($_POST['insertar'])) {
        $curso->setNombre($_POST['nombre']);
        $curso->setCodigo($_POST['codigo']);
        $crud->insertar($curso);
        header('Location: /crud-cursos/Cursos/mostrar_curso.php');
    }elseif (isset($_POST['actualizar'])) {
        $curso->setId($_POST['id']);
        $curso->setNombre($_POST['nombre']);
        $curso->setCodigo($_POST['codigo']);
        $crud->actualizar($curso);
        header('Location: /crud-cursos/Cursos/mostrar_curso.php');
    }elseif ($_GET['accion']=='e') {
        $crud->eliminar($_GET['id']);
        header('Location: /crud-cursos/Cursos/mostrar_curso.php');
    }elseif ($_GET['accion']=='a') {
        header('Location: /crud-cursos/Cursos/actualizar_curso.php');
    }

?>