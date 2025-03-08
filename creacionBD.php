<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Gestion";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die ("Error de conexion" . $conn->connect_error);
} else {
    echo "Conexion exitosa <br>";
}

$sql = "CREATE DATABASE IF NOT EXISTS Gestion";
if ($conn->query($sql) === TRUE) {
    echo "Base de datos creada satisfactoriamente <br>";
}

$conn->select_db("Gestion");

$sql = "CREATE TABLE IF NOT EXISTS usuarios (
 DNI INT PRIMARY KEY NOT NULL,
 Nombre VARCHAR (100),
 Apellidos VARCHAR (100),
 Localidad VARCHAR (100),
 Centro_Estudios VARCHAR (100),
 Usuario VARCHAR (100),
 Contrasena VARCHAR (100)
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla creada satisfactoriamente <br>";
} else {
    echo "Error al crear la tabla" . $conn->error;
}

$conn->close();
?>