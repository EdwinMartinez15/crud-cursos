<?php
    session_start();
    $tipo=$_SESSION['Tipo'];
    if($tipo!='administrador'){
        echo 'No tiene permiso';
        die();
    }
    require_once('../Gestores/crud_gestor.php');
    require_once('../Gestores/gestor.php');
    $crud=new CrudGestor();
    $gestor=new Gestor();
    $listaGestores=$crud->mostrar();
    include('../Templates/Cabezas/cabeza_gestor.php')
?>
<div class="container position-fixed top-50 start-50 translate-middle w-auto p-3">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    Tabla Gestores
                    <?php echo $_GET['id']?>
                </div>
                <div class="card-body ">
                    <table class="table text-center">
                        <thead>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Tipo Usuario</th>
                            <th>Usuario</th>
                            <th>Clave</th>
                            <th>Elegir usuarios</th>
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
                                <td><a href="/crud-cursos/Gestores/actualizar_gestor_multiple.php?id=<?php echo $gestor->getId()?>" class="btn btn-primary">Usuarios</a></td>
                                <td><a href="/crud-cursos/Gestores/actualizar_gestor.php?id=<?php echo $gestor->getId()?>&accion=a" class="btn btn-primary">Actualizar</a></td>
                                <td><a href="/crud-cursos/Gestores/administrar_gestor.php?id=<?php echo $gestor->getId()?>&accion=e" class="btn btn-danger">Eliminar</a></td>
                            </tr>
                            <?php }?>
                        </body>
                    </table>
                </div>
                <div class="card-footer text-end">
                    <a href="/crud-cursos/Gestores/ingresar_gestor.php" class="btn btn-primary ">Ingresar</a>
                </div>
            </div>
        </div>
    </div>
</div>


    </body>
    <?php
    include('../Templates/Colas/cola.php')
    ?>