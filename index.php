<html>
    <head>
        <title>Administrar Libro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container position-fixed top-50 start-50 translate-middle fs-1">
            <div class="row justify-content-md-center">
                <div class="col col-lg-3 fs-1">
                    CRUD CURSOS
                </div>
                <div class="row row-cols-2 justify-content-md-center">
                    <div class="btn-group">
                        <a href="/crud-cursos/Login/login.php" class="btn btn-primary">Iniciar sesión</a>
                        <a href="/crud-cursos/Usuarios/mostrar_usuario.php" class="btn btn-primary">Ingresar datos</a>
                    </div>
                    
                </div>
            </div>  
        </div>
    <?php
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-cursos/cola.php')
    ?>