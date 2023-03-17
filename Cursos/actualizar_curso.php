<?php
    session_start();
    $tipo=$_SESSION['Tipo'];
    if($tipo!='administrador'){
        echo 'No tiene permiso';
        die();
    }
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Cursos/crud_curso.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Cursos/curso.php');
    $crudG=new CrudCurso();
    $curso=new Curso();
    $curso=$crudG->obtenerCurso($_GET['id']);
    $listaCursos=$crudG->mostrar();
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/cabeza_curso.php');
?>
<div class="container position-fixed top-50 start-50 translate-middle w-50 p-3">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Ingrese los datos del curso
                </div>
                <div class="card-body">
                    <form action="/crud-cursos/Cursos/administrar_curso.php" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">Id</label>
                                <input readonly type="text"class="form-control" name="id" value="<?php echo $curso->getId()?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                                <input  type="text"class="form-control" name="nombre" value="<?php echo $curso->getNombre()?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Codigo</label>
                                <input type="text"class="form-control" name="codigo" value="<?php echo $curso->getCodigo()?>">
                        </div>
                        <input type="hidden" name="actualizar" value="actualizar">
                        <input type="submit" value="Guardar" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/cola.php')
    ?>