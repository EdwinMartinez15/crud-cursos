<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Toma de Pedido</title>
    <style>
  body {
            background-image: url('https://img.freepik.com/foto-gratis/fondo-acuarela-pintada-mano-forma-cielo-nubes_24972-1095.jpg?w=996&t=st=1683950251~exp=1683950851~hmac=3e42a5c65d340866f7e5cc5b67929cf296a13948afc91fa57fb67fb820a8a041');
            background-size: cover;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
        }

        select, input[type="number"], input[type="text"] {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            margin-top: 10px;
            padding: 8px 16px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="procesar_pedido.php" method="post">
            <h2>Toma de Pedido</h2>

            <label for="productos">Productos:</label>
            <select name="productos[]" multiple required>
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

                // Obtener la lista de productos desde la base de datos
                $sql = "SELECT nombre, costo_venta, cantidad FROM producto";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $nombreProducto = $row["nombre"];
                        $costoProducto = $row["costo_venta"];
                        $cantidadProducto = $row["cantidad"];
                        echo '<option value="' . $nombreProducto . '">' . $nombreProducto . ' ($' . $costoProducto . ')</option>';
                    }
                } else {
                    echo '<option value="" disabled selected>No se encontraron productos</option>';
                }

                // Cerrar la consulta anterior
                $result->close();
                ?>
            </select>

            <label for="cantidades">Cantidades:</label>
            <?php
            // Obtener la lista de productos desde la base de datos nuevamente
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $nombreProducto = $row["nombre"];
                    echo '<input type="number" name="cantidades[' . $nombreProducto . ']" min="1" max="' . $row["cantidad"] . '" placeholder="Cantidad de ' . $nombreProducto . '" required>';
                }
            }

            // Cerrar la conexión con la base de datos
            $conn->close();
            ?>
            
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" required>

            <input type="submit" value="Enviar Pedido">
        </form>
    </div>
</body>


</html>
