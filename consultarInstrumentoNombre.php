<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Musica";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consultar Instrumento por Nombre</title>
</head>
<body>
    <h1>Consultar Instrumento por Nombre</h1>
    <form method="post">
        Nombre: <input type="text" name="nombre" required><br>
        <input type="submit" name="submit" value="Consultar">
    </form>
    <p><a href="index.php">Volver a la página principal</a></p>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $sql = "SELECT * FROM Instrumento WHERE nombre LIKE ?";
    $stmt = $conn->prepare($sql);
    $param = "%" . $nombre . "%";
    $stmt->bind_param("s", $param);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "<h3>Resultados:</h3>";
        while ($row = $result->fetch_assoc()) {
            echo "Código: " . $row['codigo'] . "<br>";
            echo "Nombre: " . $row['nombre'] . "<br>";
            echo "Tipo: " . $row['tipo'] . "<br>";
            echo "Origen: " . $row['origen'] . "<br>";
            echo "Modelo: " . $row['modelo'] . "<br><br>";
        }
    } else {
        echo "<p>No se encontró instrumento con el nombre \"$nombre\".</p>";
    }
    $stmt->close();
}
$conn->close();
?>
