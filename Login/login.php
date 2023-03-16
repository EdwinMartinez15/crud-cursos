
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <?php
            require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Gestores/crud_gestor.php');
            require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/Gestores/gestor.php');
            $crudG=new CrudGestor();
            $gestor=new Gestor();
            $listaGestores=$crudG->mostrar();


        ?>
        <div class="container position-fixed top-50 start-50 translate-middle fs-1">
            <div class="row justify-content-md-center">
            <div class="card">
                <form action="/crud-cursos/Login/control_login.php"  method="post">
                    <div class="card-header">
                        Iniciar Sesion
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Usuario</label>
                        <input type="text"class="form-control" name="usuario">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Clave</label>
                            <input type="text"class="form-control" name="clave">
                    </div>
                    <div>
                        <input type="hidden" name="iniciar" value="iniciar">
                        <input type="submit" value="Iniciar Seción" class="btn btn-success">
                    </div>
                </form>
            </div>  
        </div>
    </body>
</html>