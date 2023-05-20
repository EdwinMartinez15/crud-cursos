<?php
   session_start();

   require_once('../Login/login.php');
   
   require_once('../Gestores/crud_gestor.php');
   require_once('../Gestores/gestor.php');
   
     if (isset($_POST['iniciar'])) {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $gestor = $crudG->seleccionGC($usuario);

    $_SESSION['Tipo'] = $gestor['tipo_usuario'];
    $_SESSION['Id'] = $gestor['id'];
    $_SESSION['Nombre'] = $gestor['nombre'];

    if ($gestor && $gestor['clave'] == $clave) {
    
        switch ($gestor['tipo_usuario']) {
            case 'administrador':
                header('Location: /crud-cursos/Templates/Pantallas/PantallaAdministrador.php');
                exit();
            case 'mesero':
                header('Location: /crud-cursos/Templates/Pantallas/PantallaMesero.php');
                exit();
            case 'cajero':
                header('Location: /crud-cursos/Templates/Pantallas/PantallaCajero.php');
                exit();
            default:
                header('Location: /crud-cursos/index.php');
                exit();
        }
    } else {
     
        header('Location: /crud-cursos/index.php?error=1');
        exit();
    }
}
   

?>