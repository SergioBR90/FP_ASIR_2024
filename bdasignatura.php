<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registra asignaturas</title>
</head>
<body>
    <form action="" method="post">
        <h1>Inserta los módulos de este curso</h1>
        <label>Nombre módulo 1:</label>
        <input type="text" name="modulo1">
        <label>Introduce los créditos:</label>
        <input type="number" name="creditos1">
        <label>Introduce el código:</label>
        <input type="number" name="codigo1">
        <br><br>

        <label>Nombre módulo 2:</label>
        <input type="text" name="modulo2">
        <label>Introduce los créditos:</label>
        <input type="number" name="creditos2">
        <label>Introduce el código:</label>
        <input type="number" name="codigo2">
        <br><br>

        <label>Nombre módulo 3:</label>
        <input type="text" name="modulo3">
        <label>Introduce los créditos:</label>
        <input type="number" name="creditos3">
        <label>Introduce el código:</label>
        <input type="number" name="codigo3">
        <br><br>

        <label>Nombre módulo 4:</label>
        <input type="text" name="modulo4">
        <label>Introduce los créditos:</label>
        <input type="number" name="creditos4">
        <label>Introduce el código:</label>
        <input type="number" name="codigo4">
        <br><br>

        <input type="submit" value="Ingresar">
    </form>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdasignatura";

// Conectar a MySQL
$conn = new mysqli($servername, $username, $password);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
    echo "Conexión exitosa <br>";
}

// Crear la base de datos si no existe
$sql = "CREATE DATABASE IF NOT EXISTS bdasignatura";
if ($conn->query($sql) === TRUE) {
    echo "Base de datos creada correctamente <br>";
}

// Seleccionar la base de datos
$conn->select_db("bdasignatura");

// Crear la tabla si no existe
$sql = "CREATE TABLE IF NOT EXISTS asignaturas (
    codigo INT PRIMARY KEY UNIQUE,
    nombre VARCHAR(255) NOT NULL,
    numero_creditos INT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla creada correctamente <br>";
} else {
    echo "Error al crear la tabla: " . $conn->error;
}

// Procesar el formulario cuando se envíe
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $datos = [];

    // Recoger datos de los módulos y validar que no estén vacíos
    for ($i = 1; $i <= 4; $i++) {
        if (!empty($_POST["modulo$i"]) && !empty($_POST["creditos$i"]) && !empty($_POST["codigo$i"])) {
            $nombre = mysqli_real_escape_string($conn, $_POST["modulo$i"]);
            $creditos = (int)$_POST["creditos$i"];
            $codigo = (int)$_POST["codigo$i"];
            $datos[] = "('$codigo', '$nombre', '$creditos')";
        }
    }

    // Si hay datos, insertar en la base de datos
    if (!empty($datos)) {
        $sql = "INSERT INTO asignaturas (codigo, nombre, numero_creditos) VALUES " . implode(", ", $datos);

        if ($conn->query($sql) === TRUE) {
            echo "Datos actualizados correctamente";
        } else {
            echo "Error al introducir los datos: " . $conn->error;
        }
    } else {
        echo "No se ingresaron datos válidos.";
    }
}

// Cerrar conexión
$conn->close();
?>
