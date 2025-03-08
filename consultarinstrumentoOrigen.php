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
    <title>Consultar Instrumentos por Origen</title>
</head>
<body>
    <h1>Consultar Instrumentos por Origen</h1>
    <form method="post">
        Origen: 
        <select name="origen" required>
            <option value="aborigen">Aborigen</option>
            <option value="cubano">Cubano</option>
            <option value="europeo">Europeo</option>
            <option value="mexicano">Mexicano</option>
            <option value="guatemalteco">Guatemalteco</option>
        </select><br>
        <input type="submit" name="submit" value="Consultar">
    </form>
    <p><a href="index.php">Volver a la página principal</a></p>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $origen = $_POST['origen'];
    $sql = "SELECT * FROM Instrumento WHERE origen = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $origen);
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
        echo "<p>No se encontraron instrumentos con origen $origen.</p>";
    }
    $stmt->close();
}
$conn->close();
?>
