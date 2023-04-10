<?php
    session_start();
    $tipo=$_SESSION['Tipo'];
    $id=$_SESSION['Id'];
    
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
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Cursos/crud_curso.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Cursos/curso.php');
    $crudC=new CrudCurso();
    $curso=new Curso();
    $listaCursos=$crudC->mostrar();
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Templates/Cabezas/cabeza_administrador.php')

?>
<div class="scrolling-wrapper position-fixed top-50 start-50 translate-middle w-auto p-3">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tabla Usuarios <?php echo $nombre ?>
                </div>
                <div class="card-body ">
                    <table class="table text-center" style="width:100%">
                        <thead>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Documento</th>
                            <th>Correo</th>
                            <th>Direccion</th>
                            <th>Celular</th>
                            <th>Ultimo estudio</th>
                            <th>Continua</th>
                            <th>Observacion</th>
                            <th>Ciudad</th>
                            <th>Curso_id</th>
                            <?php if($tipo=='administrador'){?>
                                <th>Gestor_id</th>
                            <?php ;}?>
                            <th>Actualizar</th>
                            <?php if($tipo=='administrador'){?>
                                <th>Eliminar</th>
                            <?php ;}?>
                        </thead>
                        <body>
                            <?php if($tipo=='administrador'){?>
                                <?php foreach ($listaUsuarios as $usuario) {?>
                                    <tr>
                                        <td><?php echo $usuario->getId() ?></td>
                                        <td><?php echo $usuario->getNombres() ?></td>
                                        <td><?php echo $usuario->getApellidos() ?></td>
                                        <td><?php echo $usuario->getDocumento() ?></td>
                                        <td><?php echo $usuario->getCorreo() ?></td>
                                        <td><?php echo $usuario->getDireccion() ?></td>
                                        <td><?php echo $usuario->getCelular() ?></td>
                                        <td><?php echo $usuario->getUltimo_estudio() ?></td>
                                        <td><?php echo $usuario->getContinua() ?></td>
                                        <td><?php echo $usuario->getObservacion() ?></td>
                                        <td><?php echo $usuario->getCiudad() ?></td>
                                        <td><?php 
                                            foreach ($listaCursos as $curso) {?>
                                            <?php if($usuario->getCurso_id()==$curso->getId()){echo $curso->getNombre();} ?>
                                            <?php }?>
                                        </td>
                                        <td><?php foreach ($listaGestores as $gestor) {?>
                                            <?php if($usuario->getGestor_id()==$gestor->getId()){echo $gestor->getNombre();} ?>
                                            <?php }?>
                                        </td>
                                        <td><a href="/crud-cursos/Usuarios/actualizar_usuario.php?id=<?php echo $usuario->getId()?>&accion=a" class="btn btn-primary">Actualizar</a></td>
                                        <?php if($tipo=='administrador'){?>
                                            <td><a href="/crud-cursos/Usuarios/administrar_usuario.php?id=<?php echo $usuario->getId()?>&accion=e" class="btn btn-danger">Eliminar</a></td>
                                            <?php ;}?>
                                        </tr>
                                        <?php }?>
                            <?php ;}?>
                            <?php if($tipo=='gestor'){?>
                                <?php foreach ($listaUsuarios as $usuario) {?>
                                    <tr>
                                    <?php if($id==$usuario->getGestor_id()&&$usuario->getGestor_id()!=NULL){?>
                                        <td><?php echo $usuario->getId() ?></td>
                                        <td><?php echo $usuario->getNombres() ?></td>
                                        <td><?php echo $usuario->getApellidos() ?></td>
                                        <td><?php echo $usuario->getDocumento() ?></td>
                                        <td><?php echo $usuario->getCorreo() ?></td>
                                        <td><?php echo $usuario->getDireccion() ?></td>
                                        <td><?php echo $usuario->getCelular() ?></td>
                                        <td><?php echo $usuario->getUltimo_estudio() ?></td>
                                        <td><?php echo $usuario->getContinua() ?></td>
                                        <td><?php echo $usuario->getObservacion() ?></td>
                                        <td><?php echo $usuario->getCiudad() ?></td>
                                        <td><?php 
                                            foreach ($listaCursos as $curso) {?>
                                            <?php if($usuario->getCurso_id()==$curso->getId()){echo $curso->getNombre();} ?>
                                            <?php }?>
                                        </td>
                                        <td><a href="/crud-cursos/Usuarios/actualizar_usuario.php?id=<?php echo $usuario->getId()?>&accion=a" class="btn btn-primary">Actualizar</a></td>
                                        <?php if($tipo=='administrador'){?>
                                            <td><a href="/crud-cursos/Usuarios/administrar_usuario.php?id=<?php echo $usuario->getId()?>&accion=e" class="btn btn-danger">Eliminar</a></td>
                                            <?php ;}?>
                                            <?php ;}?>
                                        </tr>
                                        <?php }?>
                            <?php ;}?>
                        </body>
                    </table>
                </div>
                <div class="card-footer text-end">
                    <a href="/crud-cursos/Reportes/excelUsuarios.php" class="btn btn-primary ">Generar reporte de todos</a>
                    <a href="/crud-cursos/Reportes/excelCursos.php" class="btn btn-primary ">Generar reporte por cursos</a>
                    <a href="/crud-cursos/Reportes/excelGestor.php" class="btn btn-primary ">Generar reporte por gestor</a>
                </div>
            </div>
        </div>
    </div>
</div>


    <?php
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Templates/Colas/cola.php')
    ?>