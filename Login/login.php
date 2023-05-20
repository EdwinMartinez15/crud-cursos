
<?php
    require_once('../Gestores/crud_gestor.php');
    require_once('../Gestores/gestor.php');
    $crudG=new CrudGestor();
    $gestor=new Gestor();
    $listaGestores=$crudG->mostrar();
?>

<html>
    <head>
        <title>Administrar Libro</title>
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-7">
                    <div class="text-center">
                        <img src="https://static.vecteezy.com/system/resources/previews/000/061/183/original/bar-logo-vector.jpg" alt="Bar Logo" style="width: 600px;" />
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div >
                        <div class="btn-group">
                            
                 
                    
                        <div class="row justify-content-md-center">
    <div class="card">
        <form action="/crud-cursos/Login/control_login.php" class="text-center p-4" method="post">
            <div class="card-header">
                <h5 class="mb-0">Iniciar Sesión</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" required>
                </div>
                <div class="mb-3">
                    <label for="clave" class="form-label">Clave</label>
                    <input type="password" class="form-control" id="clave" name="clave" required>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-grid gap-2">
                    <a href="/crud-cursos/Templates/informacion/Sedes.php" class="btn btn-primary">Información</a>
                    <input type="hidden" name="iniciar" value="iniciar">
                    <input type="submit" value="Iniciar Sesión" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>  
</div>



        <?php
   
        ?>
    </body>
</html>