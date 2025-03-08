<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Musica";

// Crear conexión
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Crear base de datos
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Base de datos '$dbname' creada correctamente.";
} else {
    echo "Error al crear la base de datos: " . $conn->error;
}
$conn->close();
?>

<p><a href="index.php">Volver a la página principal</a></p>
