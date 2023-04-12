<?php

header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=Reporte_". date('Y:m:d:g:i:s').".xls");

require_once('../Usuarios/crud_usuario.php');
require_once('../Usuarios/usuario.php');
$crudU=new CrudUsuario();
$usuario=new Usuario();
$listaUsuarios=$crudU->mostrar();
require_once('../Gestores/crud_gestor.php');
require_once('../Gestores/gestor.php');
$crudG=new CrudGestor();
$gestor=new Gestor();
$listaGestores=$crudG->mostrar();
require_once('../Cursos/crud_curso.php');
require_once('../Cursos/curso.php');
$crudC=new CrudCurso();
$curso=new Curso();
$listaCursos=$crudC->mostrar();
?>
<table class="table text-center">
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
                            <th>Gestor_id</th>
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
                                            foreach ($listaCursos as $curso) {?>
                                            <?php if($usuario->getCurso_id()==$curso->getId()){echo $curso->getNombre();} ?>
                                            <?php }?>
                                        </td>
                                        <td><?php foreach ($listaGestores as $gestor) {?>
                                            <?php if($usuario->getGestor_id()==$gestor->getId()){echo $gestor->getNombre();} ?>
                                            <?php }?>
                                        </td>
                                        <?php }?>
                        </body>
                    </table>