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
    $listaGestores=$crudG->mostrar();
    include('../Templates/Cabezas/cabeza_gestor.php');
?>
<div class="container position-fixed top-50 start-50 translate-middle w-50 p-3">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Ingrese los datos del gestor
                </div>
                <div class="card-body">
                    <form action="/crud-cursos/Gestores/administrar_gestor.php" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                                <input  type="text"class="form-control" name="nombre" >
                        </div>
                        <div>
                            <label for="" class="form-label">Tipo Usuario</label>
                            <select name="tipo_usuario" class="form-select">
                                <option disabled selected>seleccione una opción</option>
                                <option value="administrador">administrador</option>
                                <option value="gestor">gestor</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Usuario</label>
                                <input type="text"class="form-control" name="usuario">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Clave</label>
                                <input type="text"class="form-control" name="clave">
                        </div>
                        <input type="hidden" name="insertar" value="insertar">
                        <input type="submit" value="Guardar" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
    include('../Templates/Colas/cola.php')
    ?>