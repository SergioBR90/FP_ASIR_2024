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
    <title>Consultar Instrumento por Código</title>
</head>
<body>
    <h1>Consultar Instrumento por Código</h1>
    <form method="post">
        Código: <input type="number" name="codigo" required><br>
        <input type="submit" name="submit" value="Consultar">
    </form>
    <p><a href="index.php">Volver a la página principal</a></p>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $codigo = $_POST['codigo'];
    $sql = "SELECT * FROM Instrumento WHERE codigo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $codigo);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "<h3>Resultado:</h3>";
        $row = $result->fetch_assoc();
        echo "Código: " . $row['codigo'] . "<br>";
        echo "Nombre: " . $row['nombre'] . "<br>";
        echo "Tipo: " . $row['tipo'] . "<br>";
        echo "Origen: " . $row['origen'] . "<br>";
        echo "Modelo: " . $row['modelo'] . "<br>";
    } else {
        echo "<p>No se encontró instrumento con el código $codigo.</p>";
    }
    $stmt->close();
}

$conn->close();
?>
