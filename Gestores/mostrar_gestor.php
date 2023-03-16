<?php
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Gestores/crud_gestor.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Gestores/gestor.php');
    $crud=new CrudGestor();
    $gestor=new Gestor();
    $listaGestores=$crud->mostrar();
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/cabeza_gestor.php')
?>
<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tabla Gestores
                </div>
                <div>
                    <?php  
                        var_dump($listaGestores);
                        //print_r(array_chunk($listaGestores, 2));  
                    ?>
                </div>
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Tipo Usuario</th>
                            <th>Usuario</th>
                            <th>Clave</th>
                            <th>Actualizar</th>
                            <th>Eliminar</th>
                        </thead>
                        <body>
                            <?php foreach ($listaGestores as $gestor) {?>
                            <tr>
                                <td><?php echo $gestor->getId() ?></td>
                                <td><?php echo $gestor->getNombre() ?></td>
                                <td><?php echo $gestor->getTipo_Usuario() ?></td>
                                <td><?php echo $gestor->getUsuario() ?></td>
                                <td><?php echo $gestor->getClave() ?></td>
                                <td><a href="/crud-cursos/Gestores/actualizar_gestor.php?id=<?php echo $gestor->getId()?>&accion=a" class="btn btn-primary">Actualizar</a></td>
                                <td><a href="/crud-cursos/Gestores/administrar_gestor.php?id=<?php echo $gestor->getId()?>&accion=e" class="btn btn-danger">Eliminar</a></td>
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