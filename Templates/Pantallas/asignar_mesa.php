
<?php
// Conexión a la base de datos (debes proporcionar tus propias credenciales)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud-cursos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

if (isset($_POST['asignar']) && isset($_POST['mesa'])) {
    $mesa = $_POST['mesa'];

    // Verificar el estado actual de la mesa en la base de datos
    $sql = "SELECT estado FROM mesas WHERE numero_mesa = $mesa";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $estado = $row["estado"];

        if ($estado == 'Disponible') {
            // Actualizar el estado de la mesa en la base de datos
            $sql = "UPDATE mesas SET estado = 'Asignada' WHERE numero_mesa = $mesa";
            if ($conn->query($sql) === TRUE) {
                header("Location: /crud-cursos/Templates/Pantallas/Tomapedido.php");
                exit();
            } else {
                echo "Error al asignar la mesa: " . $conn->error;
            }
        } else {
            header("Location: /crud-cursos/Templates/Pantallas/Tomapedido.php");
            exit();
        }
    } else {
        echo "No se encontró información de la mesa.";
    }
}

if (isset($_POST['finalizar']) && isset($_POST['mesa'])) {
    $mesa = $_POST['mesa'];

    // Verificar el estado actual de la mesa en la base de datos
    $sql = "SELECT estado FROM mesas WHERE numero_mesa = $mesa";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $estado = $row["estado"];

        if ($estado == 'Asignada') {
            // Actualizar el estado de la mesa en la base de datos
            $sql = "UPDATE mesas SET estado = 'Disponible' WHERE numero_mesa = $mesa";
            if ($conn->query($sql) === TRUE) {
                header("Location: /crud-cursos/Templates/Pantallas/Asignacion_mesas.php");
    exit();
            } else {
                echo "Error al finalizar la asignación de la mesa: " . $conn->error;
            }
        } else {
            header("Location: /crud-cursos/Templates/Pantallas/Asignacion_mesas.php");
            exit();
        }
    } else {
        echo "No se encontró información de la mesa.";
    }
}

$conn->close();
?>
