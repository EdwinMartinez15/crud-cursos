<?php
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Usuarios/crud_usuario.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Usuarios/usuario.php');
    $crud=new CrudUsuario();
    $usuario=new Usuario();
    $usuario=$crud->obtenerUsuario($_GET['id']);
    //$listaUsuarios=$crud->mostrar();
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Gestores/crud_gestor.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Gestores/gestor.php');
    $crudG=new CrudGestor();
    $gestor=new Gestor();
    $listaGestores=$crudG->mostrar();
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Cursos/crud_curso.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Cursos/curso.php');
    $crudC=new CrudCurso();
    $curso=new Curso();
    $listaCursos=$crudC->mostrar();
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/cabeza_usuario.php');
?>
<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Ingrese los datos del usuario
                </div>
                <div class="card-body">
                    <form action="/crud-cursos/Usuarios/administrar_usuario.php" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">Id</label>
                                <input readonly type="text"class="form-control" name="id" value="<?php echo $usuario->getId()?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nombres</label>
                                <input  type="text"class="form-control" name="nombres" value="<?php echo $usuario->getNombres()?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Apellidos</label>
                                <input type="text"class="form-control" name="apellidos" value="<?php echo $usuario->getApellidos()?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Correo</label>
                                <input type="text"class="form-control" name="correo" value="<?php echo $usuario->getCorreo()?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Direccion</label>
                                <input type="text"class="form-control" name="direccion" value="<?php echo $usuario->getDireccion()?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Celular</label>
                                <input type="text"class="form-control" name="celular" value="<?php echo $usuario->getCelular()?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Ciudad</label>
                                <input type="text"class="form-control" name="ciudad" value="<?php echo $usuario->getCiudad()?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Curso</label>
                                <input type="text"class="form-control" name="curso_id" value="<?php echo $usuario->getCurso_id()?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Curso</label>
                                <select type="text"class="form-select" name="curso_id" value="<?php echo $usuario->getCurso_id()?>">
                                <?php foreach ($listaCursos as $curso) {?>
                                    <?php if ($curso->getId()==$usuario->getCurso_id()) {?>
                                        <option selected value=<?php echo $curso->getId() ?>> <?php echo $curso->getNombre() ?></option>
                                    <?php }
                                    ?>
                                    <?php if ($curso->getId()!=$usuario->getCurso_id()) {?>
                                        <option value=<?php echo $curso->getId() ?>> <?php echo $curso->getNombre() ?></option>
                                    <?php }
                                    ?>
                                <?php }?>   
                                </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Gestor</label>
                                <select type="text"class="form-select" name="gestor_id" value="<?php echo $usuario->getGestor_id()?>">
                                <?php foreach ($listaGestores as $gestor) {?>
                                    <?php if ($gestor->getId()==$usuario->getGestor_id()) {?>
                                        <option selected value=<?php echo $gestor->getId() ?>> <?php echo $gestor->getNombre() ?></option>
                                    <?php }
                                    ?>
                                    <?php if ($gestor->getId()!=$usuario->getGestor_id()) {?>
                                        <option value=<?php echo $gestor->getId() ?>> <?php echo $gestor->getNombre() ?></option>
                                    <?php }
                                    ?>
                                <?php }?>   
                                </select>
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