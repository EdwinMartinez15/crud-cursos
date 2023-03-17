<?php
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Gestores/crud_gestor.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Gestores/gestor.php');
    if ($_GET['accion']=='e') {
        $crud->eliminar($_GET['id']);
        header('Location: /crud-cursos/Gestores/mostrar_gestor.php');
    }elseif ($_GET['accion']=='a') {
        header('Location: /crud-cursos/Gestores/actualizar_gestor.php');
    }



?>