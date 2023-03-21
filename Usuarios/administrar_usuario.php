<?php
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Usuarios/crud_usuario.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Usuarios/usuario.php');


    $crud = new CrudUsuario();
    $usuario = new Usuario();

    if (isset($_POST['insertar'])) {
        $usuario->setNombres($_POST['nombres']);
        $usuario->setApellidos($_POST['apellidos']);
        $usuario->setCorreo($_POST['correo']);
        $usuario->setCelular($_POST['celular']);
        $usuario->setCurso_id($_POST['curso_id']);
        $crud->insertar($usuario);
        header('Location: /crud-cursos/index.php');
    }elseif (isset($_POST['actualizar'])) {
        $usuario->setId($_POST['id']);
        $usuario->setNombres($_POST['nombres']);
        $usuario->setApellidos($_POST['apellidos']);
        $usuario->setDocumento($_POST['documento']);
        $usuario->setCorreo($_POST['correo']);
        $usuario->setDireccion($_POST['direccion']);
        $usuario->setCelular($_POST['celular']);
        $usuario->setUltimo_estudio($_POST['ultimo_estudio']);
        $usuario->setContinua($_POST['continua']);
        $usuario->setObservacion($_POST['observacion']);
        $usuario->setCiudad($_POST['ciudad']);
        $usuario->setCurso_id($_POST['curso_id']);
        $usuario->setGestor_id($_POST['gestor_id']);
        $crud->actualizar($usuario);
        header('Location: /crud-cursos/Usuarios/mostrar_usuario.php');
    }elseif ($_GET['accion']=='e') {
        $crud->eliminar($_GET['id']);
        header('Location: /crud-cursos/Usuarios/mostrar_usuario.php');
    }elseif ($_GET['accion']=='a') {
        header('Location: /crud-cursos/Usuarios/actualizar_usuario.php');
    }

?>