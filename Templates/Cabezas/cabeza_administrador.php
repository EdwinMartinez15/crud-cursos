<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
    $tipo = $_SESSION['Tipo'];
    $id = $_SESSION['Id'];
    $nombre = $_SESSION['Nombre'];
    if ($tipo != 'administrador') {
        echo 'No tiene permiso';
        die();
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

        .col-lg-9,
        .col-lg-3 {
            font-size: 1.4rem;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Menú</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/crud-cursos/Productos/mostrar_producto.php">Productos</a>
                        </li>

                        <?php if ($tipo == 'administrador') { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/crud-cursos/Gestores/mostrar_gestor.php">Gestores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/crud-cursos/Templates/PantallaReportes.php">Reportes</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="position-absolute top-0 end-0">
            <table>
                <tr>
                    <td>
                        <?php if ($tipo == 'gestor') { ?>
                            <a href="/crud-cursos/Templates/Pantallas/PantallaGestor.php" class="btn btn-info">Volver al inicio</a>
<?php } ?>
<?php if ($tipo == 'administrador') { ?>
<a href="/crud-cursos/Templates/Pantallas/PantallaAdministrador.php" class="btn btn-info">Volver al inicio</a>
<?php } ?>
</td>
<td>
<a href="/crud-cursos/Login/cerrarSesion.php" class="btn btn-danger">Cerrar sesión</a>

</td>
</tr>
</table>
</div>
</header>
<main>
<!-- Contenido principal -->
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-3g6oyBt07hL76XlTUaAX3s7pLi6kWg4b4PH71W/jONwqqc0if1i+OaApeTRj3IbW" crossorigin="anonymous"></script>
</body>
</html>