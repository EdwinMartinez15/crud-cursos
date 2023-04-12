<?php
    session_start();
    
    require_once('../Login/login.php');
    
    require_once('../Gestores/crud_gestor.php');
    require_once('../Gestores/gestor.php');
    
    $crudG = new CrudGestor();
    $gestor = new Gestor();
    $usuarioG=$_POST['usuario'];
    $gestor=$crudG->seleccionGC($usuarioG);
    
    $_SESSION['Tipo']=$gestor['tipo_usuario'];
    $_SESSION['Id']=$gestor['id'];
    $_SESSION['Nombre']=$gestor['nombre'];

    


    if (isset($_POST['iniciar'])) {
        if ($gestor['clave']==$_POST['clave']) {
            switch ($gestor['tipo_usuario']) {
                case 'administrador':
                    header('Location: /crud-cursos/Templates/Pantallas/PantallaAdministrador.php');
                    break;
                case 'gestor':
                    header('Location: /crud-cursos/Templates/Pantallas/PantallaGestor.php');
                    break;
                
                default:
                    header('Location: /crud-cursos/Login/login.php');
                    break;
            }
        }
        else {
            
        }
    }
    else {
    }


?>