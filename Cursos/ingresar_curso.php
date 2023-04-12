<?php
    session_start();
    $tipo=$_SESSION['Tipo'];
    if($tipo!='administrador'){
        echo 'No tiene permiso';
        die();
    }
    require_once('../Cursos/crud_curso.php');
    require_once('../Cursos/curso.php');
    $crudC=new CrudCurso();
    $curso=new Curso();
    $listaCursos=$crudC->mostrar();
    include('../Templates/Cabezas/cabeza_curso.php');
?>
<div class="container position-fixed top-50 start-50 translate-middle w-auto p-3">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Ingrese los datos del curso
                </div>
                <div class="card-body">
                    <form action="/crud-cursos/Cursos/administrar_curso.php" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                                <input  type="text"class="form-control" name="nombre" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Codigo</label>
                                <input type="text"class="form-control" name="codigo">
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