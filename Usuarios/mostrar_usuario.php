<?php
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Usuarios/crud_usuario.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Usuarios/usuario.php');
    $crudU=new CrudUsuario();
    $usuario=new Usuario();
    $listaUsuarios=$crudU->mostrar();
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Gestores/crud_gestor.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Gestores/gestor.php');
    $crudG=new CrudGestor();
    $gestor=new Gestor();
    $listaGestores=$crudG->mostrar();
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/cabeza_usuario.php')
?>
<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tabla Usuarios
                </div>
                <div>
                    <?php  
                        var_dump($listaGestores); 
                    ?>
                </div>
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Correo</th>
                            <th>Direccion</th>
                            <th>Celular</th>
                            <th>Ciudad</th>
                            <th>Curso_id</th>
                            <th>Gestor_id</th>
                            <th>Actualizar</th>
                            <th>Eliminar</th>
                        </thead>
                        <body>
                            <?php foreach ($listaUsuarios as $usuario) {?>
                            <tr>
                                <td><?php echo $usuario->getId() ?></td>
                                <td><?php echo $usuario->getNombres() ?></td>
                                <td><?php echo $usuario->getApellidos() ?></td>
                                <td><?php echo $usuario->getCorreo() ?></td>
                                <td><?php echo $usuario->getDireccion() ?></td>
                                <td><?php echo $usuario->getCelular() ?></td>
                                <td><?php echo $usuario->getCiudad() ?></td>
                                <td><?php 
                                    foreach ($listaGestores as $gestor) {?>
                                        <?php if($usuario->getCurso_id()==$gestor->getId()){echo $gestor->getNombre();} ?>
                                    <?php }?>
                                </td>
                                <td><?php 
                                    foreach ($listaGestores as $gestor) {?>
                                        <?php if($usuario->getGestor_id()==$gestor->getId()){echo $gestor->getNombre();} ?>
                                    <?php }?>
                                </td>
                                <td><a href="/crud-cursos/Usuarios/actualizar_usuario.php?id=<?php echo $usuario->getId()?>&accion=a" class="btn btn-primary">Actualizar</a></td>
                                <td><a href="/crud-cursos/Usuarios/administrar_usuario.php?id=<?php echo $usuario->getId()?>&accion=e" class="btn btn-danger">Eliminar</a></td>
                            </tr>
                            <?php }?>
                        </body>
                    </table>
                </div>
                <div class="card-footer text-muted">
                </div>
            </div>
        </div>
    </div>
</div>


    </body>
    <?php
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/cola.php')
    ?>