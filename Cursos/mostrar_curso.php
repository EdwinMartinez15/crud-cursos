<?php
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Cursos/crud_curso.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Cursos/curso.php');
    $crud=new CrudCurso();
    $curso=new Curso();
    $listaCursos=$crud->mostrar();
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/cabeza_administrador.php')
?>
<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tabla Cursos
                </div>
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Codigo</th>
                            <th>Actualizar</th>
                            <th>Eliminar</th>
                        </thead>
                        <body>
                            <?php foreach ($listaCursos as $curso) {?>
                            <tr>
                                <td><?php echo $curso->getId() ?></td>
                                <td><?php echo $curso->getNombre() ?></td>
                                <td><?php echo $curso->getCodigo() ?></td>
                                <td><a href="/crud-cursos/Cursos/actualizar_curso.php?id=<?php echo $curso->getId()?>&accion=a" class="btn btn-primary">Actualizar</a></td>
                                <td><a href="/crud-cursos/Cursos/administrar_curso.php?id=<?php echo $curso->getId()?>&accion=e" class="btn btn-danger">Eliminar</a></td>
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