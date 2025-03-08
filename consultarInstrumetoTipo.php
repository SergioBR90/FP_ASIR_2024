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
    <title>Consultar Instrumentos por Tipo</title>
</head>
<body>
    <h1>Consultar Instrumentos por Tipo</h1>
    <form method="post">
        Tipo: 
        <select name="tipo" required>
            <option value="viento">Viento</option>
            <option value="cuerda">Cuerda</option>
            <option value="percusión">Percusión</option>
            <option value="eléctricos">Eléctricos</option>
        </select><br>
        <input type="submit" name="submit" value="Consultar">
    </form>
    <p><a href="index.php">Volver a la página principal</a></p>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $tipo = $_POST['tipo'];
    $sql = "SELECT * FROM Instrumento WHERE tipo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $tipo);
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
        echo "<p>No se encontraron instrumentos del tipo $tipo.</p>";
    }
    $stmt->close();
}
$conn->close();
?>
