<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar alumnos</title>
</head>
<body>
    <form action="corregidochatgpt.php" method="post">
    <label for="dni">Introduce el dni:</label>
    <input type="text" name="dni" required>
    <br>
    <label for="nombre">Introduce el nombre:</label>
    <input type="text" name="nombre" required>
    <br>
    <label for="apellidos">Introduce los apellidos:</label>
    <input type="text" name="apellidos">
    <br>
    <label for="localidad">Introduce la localida:</label>
    <input type="text" name="localidad">
    <br>
    <label for="ano_inicio">Año inicio de estudios:</label>
    <input type="text" name="ano_inicio">
    <br>
    <label for="modo_aceso">Introduce el modo de acceso</label>
    <input type="text" name="modo_aceso">
    <br>
    <input type="submit" value="Insertar">
    </form>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdasignatura";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
} else {
    echo "Conexión establecida <br>";
}


$sql = "CREATE TABLE IF NOT EXISTS alumnos (
    dni VARCHAR(10) PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100),
    localidad VARCHAR(100),
    ano_inicio INT,
    modo_acceso VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla 'alumnos' creada correctamente <br>";
} else {
    echo "Error al crear la tabla: " . $conn->error;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dni = mysqli_real_escape_string($conn, $_POST['dni']);
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $apellidos = mysqli_real_escape_string($conn, $_POST['apellidos']);
    $localidad = mysqli_real_escape_string($conn, $_POST['localidad']);
    $ano_inicio = mysqli_real_escape_string($conn, $_POST['ano_inicio']);
    $modo_acceso = mysqli_real_escape_string($conn, $_POST['modo_acceso']);

  
    $sql = "INSERT INTO alumnos (dni, nombre, apellidos, localidad, ano_inicio, modo_acceso)
            VALUES ('$dni', '$nombre', '$apellidos', '$localidad', '$ano_inicio', '$modo_acceso')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos insertados correctamente";
    } else {
        echo "Error al insertar los datos: " . $conn->error;
    }
}

$conn->close();
?>
