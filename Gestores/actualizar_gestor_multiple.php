<?php
    session_start();
    $tipo=$_SESSION['Tipo'];
    if($tipo!='administrador'){
        echo 'No tiene permiso';
        die();
    }
    require_once('../Gestores/crud_gestor.php');
    require_once('../Gestores/gestor.php');
    $crudG=new CrudGestor();
    $gestor=new Gestor();

    require_once('../Usuarios/crud_usuario.php');
    require_once('../Usuarios/usuario.php');
    $crudU=new CrudUsuario();
    $usuario=new Usuario();
    $listaUsuarios=$crudU->mostrar();

    $gestor=$crudG->obtenerGestor($_GET['id']);
    $listaGestores=$crudG->mostrar();
    include('../Templates/Cabezas/cabeza_gestor.php')
?>
<div class="container position-fixed top-50 start-50 translate-middle w-auto p-3">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Seleccione los usuarios que desea asignar gestor <?php echo $gestor->getNombre()?>:
                </div>
                <div class="card-body">
                <form action="/crud-cursos/Usuarios/administrar_usuario.php" method="post">
                    <div class="mb-3">
                                <input hidden type="text"class="form-control" name="idGestor" value="<?php echo $gestor->getId()?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Usuario(s)</label>
                        <select multiple type="text"class="form-select" name="idUsuario[]" value="<?php echo $usuario->getId()?>">
                                <?php foreach ($listaUsuarios as $usuario) {?>
                                    <?php if($usuario->getGestor_id()!=$gestor->getId()){?>
                                        <option value="<?php echo $usuario->getId() ?>"> <?php echo $usuario->getNombres() ?></option>
                                    <?php }?>   
                                <?php }?>   
                        </select>
                    </div>
                    <input type="hidden" name="actualizarM" value="actualizarM">
                    <input type="submit" value="Asignar" class="btn btn-success">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
    include('../Templates/Colas/cola.php')
    ?>