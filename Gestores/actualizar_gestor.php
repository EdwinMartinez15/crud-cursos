<?php
    session_start();
    $tipo=$_SESSION['Tipo'];
    if($tipo!='administrador'){
        echo 'No tiene permiso';
        die();
    }
    require_once('../Gestores/crud_gestor.php');
    require_once('../Gestores/gestor.php');
    $crudG=new CrudGestor();
    $gestor=new Gestor();
    $gestor=$crudG->obtenerGestor($_GET['id']);
    $listaGestores=$crudG->mostrar();
    include('../Templates/Cabezas/cabeza_administrador.php');
?>
        <style>
            body {
                background-image: url('https://img.freepik.com/foto-gratis/fondo-acuarela-pintada-mano-forma-cielo-nubes_24972-1095.jpg?w=996&t=st=1683950251~exp=1683950851~hmac=3e42a5c65d340866f7e5cc5b67929cf296a13948afc91fa57fb67fb820a8a041');
                background-size: cover;
            }
            .container {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            .row {
                justify-content: center;
            }
            .col-lg-9 {
                font-size: 1.4rem;
            }
            .col-lg-3 {
                font-size: 1.4rem;
            }
        </style>
<div class="container position-fixed top-50 start-50 translate-middle w-auto p-3">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Ingrese los datos del gestor
                </div>
                <div class="card-body">
                    <form action="/crud-cursos/Gestores/administrar_gestor.php" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">Id</label>
                                <input readonly type="text"class="form-control" name="id" value="<?php echo $gestor->getId()?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                                <input  type="text"class="form-control" name="nombres" value="<?php echo $gestor->getNombre()?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Apellido</label>
                                <input  type="text"class="form-control" name="apellidos" value="<?php echo $gestor->getApellidos()?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Documento</label>
                                <input  type="text"class="form-control" name="documento" value="<?php echo $gestor->getDocumento()?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Correo</label>
                                <input  type="text"class="form-control" name="correo" value="<?php echo $gestor->getCorreo()?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Direccion</label>
                                <input  type="text"class="form-control" name="direccion" value="<?php echo $gestor->getDireccion()?>">
                        </div>
                        <div>
                            <label for="" class="form-label">Tipo Usuario</label>
                            <select name="tipo_usuario" class="form-select">
                            <?php if ($gestor->getTipo_usuario()=="administrador") {?>
                                    
                                    <option value="administrador" selected>administrador</option>
                                    <option value="mesero">mesero</option>
                                    <option value="cajero">cajero</option>
                                <?php }
                                ?>
                            <?php if ($gestor->getTipo_usuario()=="mesero") {?>
                                    
                                    <option value="administrador" >administrador</option>
                                    <option value="mesero" selected>mesero</option>
                                    <option value="cajero">cajero</option>
                                <?php }
                                ?>
                                <?php if ($gestor->getTipo_usuario()=="cajero") {?>
                                    
                                    <option value="administrador" >administrador</option>
                                    <option value="mesero">mesero</option>
                                    <option value="cajero" selected>cajero</option>
                                <?php }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Usuario</label>
                                <input type="text"class="form-control" name="usuario" value="<?php echo $gestor->getUsuario()?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Clave</label>
                                <input type="text"class="form-control" name="clave" value="<?php echo $gestor->getClave()?>">
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
   
    ?>