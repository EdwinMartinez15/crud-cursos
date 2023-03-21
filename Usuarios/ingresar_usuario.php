<?php
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Usuarios/crud_usuario.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Usuarios/usuario.php');
    $crud=new CrudUsuario();
    $usuario=new Usuario();
    $listaUsuarios=$crud->mostrar();
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Cursos/crud_curso.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Cursos/curso.php');
    $crudC=new CrudCurso();
    $curso=new Curso();
    $listaCursos=$crudC->mostrar();
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Templates/Cabezas/cabeza_usuario.php')
?>
<div class="container position-fixed top-50 start-50 translate-middle w-50 p-3">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Ingrese los datos del usuario
                </div>
                <div class="card-body">
                    <form action="/crud-cursos/Usuarios/administrar_usuario.php" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">Nombres</label>
                                <input type="text"class="form-control" name="nombres">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Apellidos</label>
                                <input type="text"class="form-control" name="apellidos">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Correo</label>
                                <input type="text"class="form-control" name="correo">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Celular</label>
                                <input type="text"class="form-control" name="celular">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Curso</label>
                                <select type="text"class="form-select" name="curso_id" value="<?php echo $usuario->getCurso_id()?>">
                                    <option value="" disabled selected>Seleccione su curso</option>
                                <?php foreach ($listaCursos as $curso) {?>
                                        <option value=<?php echo $curso->getId() ?>> <?php echo $curso->getNombre() ?></option>
                                    ?>
                                <?php }?>   
                                </select>
                        </div>
                        
                        <input type="hidden" name="insertar" value="insertar">
                        <input type="submit" value="Guardar" class="btn btn-success">
                    </form>
                </div>
                <div class="card-footer text-muted">
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Templates/Colas/cola.php')
    ?>