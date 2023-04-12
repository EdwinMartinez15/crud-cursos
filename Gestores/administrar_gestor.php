<?php
    require_once('../Gestores/crud_gestor.php');
    require_once('../Gestores/gestor.php');


    $crud = new CrudGestor();
    $gestor = new Gestor();

    if (isset($_POST['insertar'])) {
        $gestor->setNombre($_POST['nombre']);
        $gestor->setTipo_usuario($_POST['tipo_usuario']);
        $gestor->setUsuario($_POST['usuario']);
        $gestor->setClave($_POST['clave']);
        $crud->insertar($gestor);
        header('Location: /crud-cursos/Gestores/mostrar_gestor.php');
    }elseif (isset($_POST['actualizar'])) {
        $gestor->setId($_POST['id']);
        $gestor->setNombre($_POST['nombre']);
        $gestor->setTipo_usuario($_POST['tipo_usuario']);
        $gestor->setUsuario($_POST['usuario']);
        $gestor->setClave($_POST['clave']);
        $crud->actualizar($gestor);
        header('Location: /crud-cursos/Gestores/mostrar_gestor.php');
    }elseif ($_GET['accion']=='e') {
        $crud->eliminar($_GET['id']);
        header('Location: /crud-cursos/Gestores/mostrar_gestor.php');
    }elseif ($_GET['accion']=='a') {
        header('Location: /crud-cursos/Gestores/actualizar_gestor.php');
    }

?>