<?php
    session_start();
    $tipo=$_SESSION['Tipo'];
    $id=$_SESSION['Id'];
    
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

    include('Cabezas/cabeza_administrador.php')

?>
        <div class="container position-fixed top-50 start-50 translate-middle fs-1">
            <div class="row justify-content-md-center">
                <div class="col col-lg-2 fs-1">
                    REPORTES
                </div>
                <form action="/crud-cursos/Reportes/administrarReportes.php" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Reporte de usuarios</label>
                    </div>
                    <input type="hidden" name="usuario" value="usuario">
                    <input type="submit" value="Generar reporte" class="btn btn-success">
                </form>
                <form action="/crud-cursos/Reportes/administrarReportes.php" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Reporte por curso</label>
                        <select type="text"class="form-select" name="curso_id" value="<?php echo $usuario->getCurso_id()?>">
                                    <option value="" disabled selected>Seleccione su curso</option>
                                <?php foreach ($listaCursos as $curso) {?>
                                        <option value=<?php echo $curso->getId() ?>> <?php echo $curso->getNombre() ?></option>
                                    ?>
                                <?php }?>   
                        </select>
                    </div>
                    <input type="hidden" name="curso" value="curso">
                    <input type="submit" value="Generar reporte" class="btn btn-success">
                </form>
                <form action="/crud-cursos/Reportes/administrarReportes.php" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Reporte por gestor</label>
                        <select type="text"class="form-select" name="curso_id" value="<?php echo $usuario->getCurso_id()?>">
                                    <option value="" disabled selected>Seleccione su gestor</option>
                                <?php foreach ($listaGestores as $gestor) {?>
                                        <option value=<?php echo $gestor->getId() ?>> <?php echo $gestor->getNombre() ?></option>
                                    ?>
                                <?php }?>   
                        </select>
                    </div>
                    <input type="hidden" name="curso" value="curso">
                    <input type="submit" value="Generar reporte" class="btn btn-success">
                </form>
                <form action="/crud-cursos/Reportes/administrarReportes.php" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Reporte de usuarios por gestor</label>
                        
                    </div>
                    <input type="hidden" name="gestorUsuarios" value="gestorUsuarios">
                    <input type="submit" value="Generar reporte" class="btn btn-success">
                </form>
            </div>  
        </div>
    <?php
    include('Colas/cola.php')
    ?>