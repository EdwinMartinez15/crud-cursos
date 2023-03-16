<?php
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Login/login.php');

    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Gestores/crud_gestor.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Gestores/gestor.php');

    $crudG = new CrudGestor();
    $gestor = new Gestor();
    $gestor=$crudG->seleccionGC($_POST['usuario']);

    if (isset($_POST['iniciar'])) {
        if ($gestor['clave']==$_POST['clave']) {
            header('Location: /crud-cursos/index.php');
        }
        else {
            header('Location: /crud-cursos/Cursos/mostrar_curso.php');
        }
    }
    else {
        header('Location: /crud-cursos/Gestores/mostrar_gestor.php');
    }


?>