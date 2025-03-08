<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Musica";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
$sql = "SELECT * FROM Instrumento";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consultar Todos los Instrumentos</title>
</head>
<body>
    <h1>Consultar Todos los Instrumentos</h1>
    <?php
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Código</th><th>Nombre</th><th>Tipo</th><th>Origen</th><th>Modelo</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['codigo'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['tipo'] . "</td>";
            echo "<td>" . $row['origen'] . "</td>";
            echo "<td>" . $row['modelo'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No hay instrumentos registrados.</p>";
    }
    ?>
    <p><a href="index.php">Volver a la página principal</a></p>
</body>
</html>
<?php
$conn->close();
?>
