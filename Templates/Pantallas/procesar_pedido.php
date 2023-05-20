<?php
// Obtener los datos del formulario
$productos = $_POST['productos'];
$cantidades = $_POST['cantidades'];
$fecha = $_POST['fecha']; // Agregado: Obtener la fecha del formulario

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud-cursos";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Variable para verificar si ocurrió algún error en el procesamiento del pedido
$error = false;

// Iniciar transacción
$conn->begin_transaction();

// Recorrer los productos y cantidades para procesar cada uno
foreach ($productos as $producto) {
    $cantidadPedido = $cantidades[$producto];

    // Obtener la cantidad actual en la base de datos
    $sql = "SELECT cantidad FROM producto WHERE nombre = '$producto'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $cantidadBaseDatos = $row["cantidad"];

        if ($cantidadBaseDatos > 0 && $cantidadPedido <= $cantidadBaseDatos) {
            // Actualizar la cantidad de unidades en la base de datos
            $sql = "UPDATE producto SET cantidad = cantidad - $cantidadPedido WHERE nombre = '$producto'";
            if (!$conn->query($sql)) {
                $error = true;
                break;
            }

            // Guardar los datos del pedido en una tabla de base de datos
            $sql = "INSERT INTO pedidos (producto, cantidad, fecha) VALUES ('$producto', $cantidadPedido, '$fecha')"; // Modificado: Agregar la fecha al insert
            if (!$conn->query($sql)) {
                $error = true;
                break;
            }
        } else {
            $error = true;
            break;
        }
    } else {
        $error = true;
        break;
    }
}

// Verificar si ocurrió algún error durante el procesamiento del pedido
if (!$error) {
    // Confirmar la transacción
    $conn->commit();
    header("Location: /crud-cursos/Templates/Pantallas/Asignacion_mesas.php");
    exit();
} else {
    // Revertir la transacción en caso de error
    $conn->rollback();
    echo "Error al procesar el pedido. No se guardaron los datos en la base de datos.";
}

$conn->close();
?>
