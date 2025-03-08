<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Musica";

// Conectar a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Crear tabla Instrumento
$sql = "CREATE TABLE IF NOT EXISTS Instrumento (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    tipo ENUM('viento', 'cuerda', 'percusión', 'eléctricos') NOT NULL,
    origen ENUM('aborigen', 'cubano', 'europeo', 'mexicano', 'guatemalteco') NOT NULL,
    modelo VARCHAR(50) NOT NULL,
    UNIQUE (nombre, tipo, origen, modelo)
)";
if ($conn->query($sql) === TRUE) {
    echo "Tabla Instrumento creada correctamente.";
} else {
    echo "Error al crear la tabla Instrumento: " . $conn->error;
}
$conn->close();
?>

<p><a href="index.php">Volver a la página principal</a></p>
