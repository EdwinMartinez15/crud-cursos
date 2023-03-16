<?php
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Usuarios/crud_usuario.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Usuarios/usuario.php');
    $crud=new CrudUsuario();
    $usuario=new Usuario();
    $listaUsuarios=$crud->mostrar();
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/cabeza_usuario.php')
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
                            <label for="" class="form-label">Direccion</label>
                                <input type="text"class="form-control" name="direccion">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Celular</label>
                                <input type="text"class="form-control" name="celular">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Ciudad</label>
                                <input type="text"class="form-control" name="ciudad">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Curso</label>
                                <input type="text"class="form-control" name="curso_id">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Gestor</label>
                                <select type="text"class="form-select" name="gestor_id">
                                    <option disabled selected>----</option>
                                <?php foreach ($listaUsuarios as $usuario) {?>
                                    <option value=<?php echo $usuario->getId() ?>> <?php echo $usuario->getNombres() ?></option>
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
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/cola.php')
    ?>