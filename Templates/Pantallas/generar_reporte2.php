<?php
session_start();
$tipo = $_SESSION['Tipo'];
$id = $_SESSION['Id'];






if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crud-cursos"; // Reemplazar con el nombre de tu base de datos

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    // Consulta para obtener los datos del inventario
    $sql = "SELECT nombre, tipo, proveedor, costo_venta, costo_compra, cantidad FROM producto";
    $result = $conn->query($sql);

    // Crear un archivo temporal para almacenar los datos CSV
    $tempFile = tmpfile();
    $csvFile = fopen("php://temp", "w");

    // Escribir los encabezados en el archivo CSV
    fputcsv($csvFile, array('Nombre', 'Tipo', 'Proveedor', 'Costo Venta', 'Costo Compra', 'Cantidad'));

    // Recorrer los resultados de la consulta y escribir los datos en el archivo CSV
    while ($row = $result->fetch_assoc()) {
        fputcsv($csvFile, $row);
    }

    // Establecer el tipo de contenido y el nombre del archivo
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment;filename="reporte_inventario.csv"');

    // Enviar el contenido del archivo CSV al cliente
    rewind($csvFile);
    fpassthru($csvFile);

    // Cerrar y eliminar el archivo temporal
    fclose($csvFile);
    fclose($tempFile);

    // Cerrar la conexión a la base de datos
    $conn->close();

    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Generar Reporte de Inventario</title>
    <style>
          body {
            background-image: url('https://img.freepik.com/foto-gratis/fondo-acuarela-pintada-mano-forma-cielo-nubes_24972-1095.jpg?w=996&t=st=1683950251~exp=1683950851~hmac=3e42a5c65d340866f7e5cc5b67929cf296a13948afc91fa57fb67fb820a8a041');
            background-size: cover;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
        }

        form {
            text-align: center;
            margin-top: 50px;
        }

        label {
            font-weight: bold;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Generar Reporte de Inventario</h1>
    <form method="POST" action="">
        <input type="submit" value="Generar Reporte">
    </form>
</body>
</html>
<!DOCTYPE html>
<html>


