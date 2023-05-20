
<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<head>
    <title>Asignación de Mesas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            background-image: url('https://img.freepik.com/foto-gratis/fondo-acuarela-pintada-mano-forma-cielo-nubes_24972-1095.jpg?w=996&t=st=1683950251~exp=1683950851~hmac=3e42a5c65d340866f7e5cc5b67929cf296a13948afc91fa57fb67fb820a8a041');
            background-size: cover;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .mesa {
            width: 200px;
            padding: 20px;
            margin: 10px;
            text-align: center;
            border: 2px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }

        .mesa h3 {
            margin-top: 0;
        }

        .mesa p {
            margin-bottom: 10px;
        }

        .disponible {
            background-color: #4CAF50;
            color: white;
        }

        .asignada {
            background-color: #FF0000;
            color: white;
        }

        form {
            display: flex;
            justify-content: space-around;
        }

        input[type="submit"] {
            padding: 5px 10px;
            font-size: 14px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<a href="/crud-cursos/Templates/Pantallas/PantallaAdministrador.php" class="btn btn-info">Volver al inicio</a>
<body>  

    <div class="container">
      
        
        <?php
        // Conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crud-cursos";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Error de conexión a la base de datos: " . $conn->connect_error);
        }

        // Obtener el estado de las mesas desde la base de datos
        $sql = "SELECT numero_mesa, estado FROM mesas";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $mesaId = $row["numero_mesa"];
                $mesaEstado = $row["estado"];
                $mesaClass = ($mesaEstado === "Disponible") ? "disponible" : "asignada";

                echo '<div class="mesa ' . $mesaClass . '">';
                echo '<h3>Mesa ' . $mesaId . '</h3>';
                echo '<p>Estado: ' . $mesaEstado . '</p>';
                echo '<form action
="asignar_mesa.php" method="post">';
echo '<input type="hidden" name="mesa" value="' . $mesaId . '">';
echo '<input type="submit" value="Asignar" name="asignar">';
echo '<input type="submit" value="Finalizar Asignación" name="finalizar">';
echo '</form>';
echo '</div>';
}
} else {
echo "No se encontraron mesas.";
}


    $conn->close();
    ?>
    
   
</div>

</body>
</html>

